<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * team_leaders
 *
 * @ORM\Table(name="team_leaders")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\team_leadersRepository")
 */
class team_leaders
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;


    /**
     * var int
     *
     * @ORM\Column(name="cars", type="string")
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\cars", mappedBy="team_leader")
     */
    private $cars;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return team_leaders
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set cars
     *
     * @param string $cars
     *
     * @return team_leaders
     */
    public function setCars($cars)
    {
        $this->cars = $cars;

        return $this;
    }

    /**
     * Get cars
     *
     * @return string
     */
    public function getCars()
    {
        return $this->cars;
    }
}

