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


class UsersController extends Controller {

    /**
     * @return array
     * @View()
     */
    public function getUserAction()
    {
        $users = $this->getDoctrine()->getRepository('VhostManagerApiBundle:User')
                ->findAll();

        return array('users' => $users);
    }


} 