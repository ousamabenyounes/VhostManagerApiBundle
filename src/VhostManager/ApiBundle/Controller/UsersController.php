<?php
/**
 * Created by PhpStorm.
 * User: obenyounes
 * Date: 31/10/13
 * Time: 00:37
 */

namespace VhostManager\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use VhostManager\ApiBundle\Entity\User;


class UsersController extends Controller
{

    /**
     * @return array
     * @View()
     */
    public function getUsersAction()
    {
        $users = $this->getDoctrine()->getRepository('VhostManagerApiBundle:User')
                ->findAll();

        return array('users' => $users);
    }


    /**
     * @param User $user
     * @return array
     * @View()
     * @ParamConverter("user", class="VhostManagerApiBundle:User")
     */
    public function getUserAction(User $user)
    {
        return array('user' => $user);
    }

} 