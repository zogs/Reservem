<?php

namespace Crc\ReservBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="reserv_device")
 * @UniqueEntity("code")
 * @ORM\Entity(repositoryClass="Crc\ReservBundle\Repository\DeviceRepository")
 */
class Device
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $code;

     /**
     * @ORM\Column(type="string", length=90)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=90, nullable=true)
     */
    private $model = null;

    /**
     * @ORM\Column(length=255)
     * @Gedmo\Slug(updatable=true, unique=false, fields={"type"})
     */
    private $slug;

    /**
     * @ORM\Column(type="string", length=300, nullable=true)
     */
    private $description = null;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $status = '';

    /**
     * @ORM\Column(type="boolean")
     */
    private $working = true;

    /**
     * @ORM\Column(type="boolean")
     */
    private $missing = false;

        /**
     * @ORM\Column(type="boolean")
     */
    private $on_the_ground = false;

    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $comment = null;

    /**
     * @ORM\ManyToOne(targetEntity="Zogs\UserBundle\Entity\User", fetch="EAGER")
     */
    private $creator = null;

    /**
     * @ORM\ManyToOne(targetEntity="Crc\ReservBundle\Entity\Department", inversedBy="devices", fetch="EAGER")
     */
    private $department = null;

    /**
     * @ORM\ManyToMany(targetEntity="Crc\ReservBundle\Entity\Reservation", fetch="EAGER", mappedBy="devices")
     */
    private $reservations = null;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reservations = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return Device
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Device
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Device
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Device
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set working
     *
     * @param boolean $working
     * @return Device
     */
    public function setWorking($working)
    {
        $this->working = $working;

        return $this;
    }

    /**
     * Get working
     *
     * @return boolean 
     */
    public function getWorking()
    {
        return $this->working;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Device
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set in_use
     *
     * @param boolean $inUse
     * @return Device
     */
    public function setInUse($inUse)
    {
        $this->in_use = $inUse;

        return $this;
    }

    /**
     * Get in_use
     *
     * @return boolean 
     */
    public function getInUse()
    {
        return $this->in_use;
    }

    /**
     * Set missing
     *
     * @param boolean $missing
     * @return Device
     */
    public function setMissing($missing)
    {
        $this->missing = $missing;

        return $this;
    }

    /**
     * Get missing
     *
     * @return boolean 
     */
    public function getMissing()
    {
        return $this->missing;
    }

    /**
     * Set on_the_ground
     *
     * @param boolean $onTheGround
     * @return Device
     */
    public function setOnTheGround($onTheGround)
    {
        $this->on_the_ground = $onTheGround;

        return $this;
    }

    /**
     * Get on_the_ground
     *
     * @return boolean 
     */
    public function getOnTheGround()
    {
        return $this->on_the_ground;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Device
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set model
     *
     * @param string $model
     * @return Device
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string 
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set creator
     *
     * @param \Zogs\UserBundle\Entity\User $creator
     * @return Device
     */
    public function setCreator(\Zogs\UserBundle\Entity\User $creator = null)
    {
        $this->creator = $creator;

        return $this;
    }

    /**
     * Get creator
     *
     * @return \Zogs\UserBundle\Entity\User 
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * Set department
     *
     * @param \Crc\ReservBundle\Entity\Department $department
     * @return Device
     */
    public function setDepartment(\Crc\ReservBundle\Entity\Department $department = null)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * Get department
     *
     * @return \Crc\ReservBundle\Entity\Department 
     */
    public function getDepartment()
    {
        return $this->department;
    }


    /**
     * Add reservations
     *
     * @param \Crc\ReservBundle\Entity\Reservation $reservations
     * @return Device
     */
    public function addReservation(\Crc\ReservBundle\Entity\Reservation $reservations)
    {
        $this->reservations[] = $reservations;

        return $this;
    }

    /**
     * Remove reservations
     *
     * @param \Crc\ReservBundle\Entity\Reservation $reservations
     */
    public function removeReservation(\Crc\ReservBundle\Entity\Reservation $reservations)
    {
        $this->reservations->removeElement($reservations);
    }

    /**
     * Get reservations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReservations()
    {
        return $this->reservations;
    }
}
