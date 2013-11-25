<?php

namespace VhostManager\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use VhostManager\ApiBundle\Entity\User;


class WebServiceController extends Controller
{

    public function formatUsers($users) {
        $output = array();
        foreach ($users as $user) {
            $output[] = array(
                'id' => $user->getId(),
                'name' => $user->getUserName()
            );
        }
       return $output;
    }

}
