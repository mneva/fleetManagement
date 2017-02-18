<?php
/**
 * This file is part of the MiWay Insurance Application.
 *
 * @author      MiWay Development Team
 * @copyright   Copyright (c) 2014-2017 MiWay Insurance Ltd
 */

namespace AppBundle\DataFixtures\ORM;


use AppBundle\Entity\cars;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class addCars implements FixtureInterface, OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $teamLeader = $manager->getRepository('AppBundle:team_leaders')
            ->findAll();

        for ($i = 0; $i < 20; $i++)
        {
            $car = new cars();
            $car->setLicenceNumber($i * $i);
            $car->setLicenceFrom(date("Y-m-d")-$i);
            $car->setLicenceTo(date("Y-m-d") - 10 + $i);
            $car->setTeamMember('Member'.$i);
            $car->setTeamLeader($teamLeader[$i]);
            $manager->persist($car);
        }
        $manager->flush();
        /*$event1 = new Event();
        $event1->setName('Darth\'s Birthday Party');
        $event1->setLocation('Deathstar');
        $event1->setTime(new \DateTime('Friday noon'));
        $event1->setDetails('Ha! Darth HATES surprises');
        $event1->setOwner($wayne);
        $manager->persist($event1);

        $event2 = new Event();
        $event2->setName('Rebellion Fundraiser Bake Sale!');
        $event2->setLocation('Endor');
        $event2->setTime(new \DateTime('Thursday noon'));
        $event2->setDetails('Ewok pies! Support the rebellion');
        $event2->setOwner($wayne);
        $manager->persist($event2);

        $manager->flush();*/
    }

    public function getOrder()
    {
        return 20;
    }
}

/*<?php namespace Yoda\EventBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Yoda\EventBundle\Entity\Event;

class LoadEvents implements FixtureInterface, OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $wayne = $manager->getRepository('UserBundle:User')
            ->findOneByUsernameOrEmail('wayne');

        $event1 = new Event();
        $event1->setName('Darth\'s Birthday Party');
        $event1->setLocation('Deathstar');
        $event1->setTime(new \DateTime('Friday noon'));
        $event1->setDetails('Ha! Darth HATES surprises');
        $event1->setOwner($wayne);
        $manager->persist($event1);

        $event2 = new Event();
        $event2->setName('Rebellion Fundraiser Bake Sale!');
        $event2->setLocation('Endor');
        $event2->setTime(new \DateTime('Thursday noon'));
        $event2->setDetails('Ewok pies! Support the rebellion');
        $event2->setOwner($wayne);
        $manager->persist($event2);

        $manager->flush();
    }

    public function getOrder()
    {
        return 20;
    }
}*/