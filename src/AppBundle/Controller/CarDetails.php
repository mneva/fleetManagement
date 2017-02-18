<?php
/**
 * This file is part of the MiWay Insurance Application.
 *
 * @author      MiWay Development Team
 * @copyright   Copyright (c) 2014-2017 MiWay Insurance Ltd
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CarDetails extends Controller
{
    /**
     * @Route("/")
     */
    public function showCarsAction()
    {
        $teamLeaders = $this->getDoctrine()->getRepository('AppBundle:team_leaders')->findAll();

        $cars = $this->getDoctrine()->getRepository('AppBundle:cars')
            ->findBy(['teamLeader' => $teamLeaders]);

        return $this->render('cars.html.twig', ['cars' => $cars, 'teamLeaders' => $teamLeaders]);
    }
}