<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * cars
 *
 * @ORM\Table(name="cars")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\carsRepository")
 */
class cars
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\team_leaders", inversedBy="cars")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="licence_number", type="integer")
     */
    private $licenceNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="licence_from", type="date")
     */
    private $licenceFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="licence_to", type="date")
     */
    private $licenceTo;

    /**
     * @var string
     *
     * @ORM\Column(name="team_member", type="string", length=255)
     */
    private $teamMember;

    /**
     * @var int
     *
     * @ORM\Column(name="team_leader", type="integer")
     */
    private $teamLeader;


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
     * Set licenceNumber
     *
     * @param integer $licenceNumber
     *
     * @return cars
     */
    public function setLicenceNumber($licenceNumber)
    {
        $this->licenceNumber = $licenceNumber;

        return $this;
    }

    /**
     * Get licenceNumber
     *
     * @return int
     */
    public function getLicenceNumber()
    {
        return $this->licenceNumber;
    }

    /**
     * Set licenceFrom
     *
     * @param \DateTime $licenceFrom
     *
     * @return cars
     */
    public function setLicenceFrom($licenceFrom)
    {
        $this->licenceFrom = $licenceFrom;

        return $this;
    }

    /**
     * Get licenceFrom
     *
     * @return \DateTime
     */
    public function getLicenceFrom()
    {
        return $this->licenceFrom;
    }

    /**
     * Set licenceTo
     *
     * @param \DateTime $licenceTo
     *
     * @return cars
     */
    public function setLicenceTo($licenceTo)
    {
        $this->licenceTo = $licenceTo;

        return $this;
    }

    /**
     * Get licenceTo
     *
     * @return \DateTime
     */
    public function getLicenceTo()
    {
        return $this->licenceTo;
    }

    /**
     * Set teamMember
     *
     * @param string $teamMember
     *
     * @return cars
     */
    public function setTeamMember($teamMember)
    {
        $this->teamMember = $teamMember;

        return $this;
    }

    /**
     * Get teamMember
     *
     * @return string
     */
    public function getTeamMember()
    {
        return $this->teamMember;
    }

    /**
     * Set teamLeader
     *
     * @param integer $teamLeader
     *
     * @return cars
     */
    public function setTeamLeader($teamLeader)
    {
        $this->teamLeader = $teamLeader;

        return $this;
    }

    /**
     * Get teamLeader
     *
     * @return int
     */
    public function getTeamLeader()
    {
        return $this->teamLeader;
    }
}

