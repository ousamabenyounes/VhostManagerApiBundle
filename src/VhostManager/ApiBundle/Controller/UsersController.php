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
use Symfony\Component\HttpFoundation\JsonResponse;
use VhostManager\ApiBundle\Controller\WebServiceController;


class UsersController extends WebServiceController
{

    /**
     * @return array
     * @View()
     */
    public function getUsersAction()
    {

        $users = $this->getDoctrine()->getRepository('VhostManagerApiBundle:User')
            ->findAll();
    //    var_dump($users);

        $users = $this->formatUsers($users);
        return new JsonResponse(array('users' => $users));
    }




} 