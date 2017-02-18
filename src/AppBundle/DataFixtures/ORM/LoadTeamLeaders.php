<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\cars;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Hautelook\AliceBundle\Alice\DataFixtureLoader;
use Nelmio\Alice\Fixtures;

class LoadTeamLeaders implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        /*return  array(
            __DIR__ . '/team_leaders.yml',
        );*/
        $objects = Fixtures::load(__DIR__ . '/team_leaders.yml', $manager);
    }
}