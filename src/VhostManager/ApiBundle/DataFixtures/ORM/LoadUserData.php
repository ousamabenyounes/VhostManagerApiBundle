<?php
/**
 * Created by JetBrains PhpStorm.
 * User: obenyounes
 * Date: 11/7/13
 * Time: 10:38 AM
 * To change this template use File | Settings | File Templates.
 */

namespace VhostManager\ApiBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\Doctrine;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use VhostManager\ApiBundle\Entity\User;


class LoadUserData implements FixtureInterface {


    /**
     * @param ObjectManager $objectManager
     */
    public function load(ObjectManager $manager)
    {
        $alice = new User();
        $alice->setUsername('alice');
        $alice->setEmail('mail@mail.com');
        $alice->setPassword('tfdsfdsfsd');


        $bob = new User();
        $bob->setUsername('bob');
        $bob->setEmail('mail2@mail.com');
        $bob->setPassword('tfdsfdsfsdfds');


        $manager->persist($alice);
        $manager->persist($bob);

        $manager->flush();
    }

}