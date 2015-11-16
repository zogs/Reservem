<?php

namespace Crc\ReservBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="reserv_reservation")
 * @ORM\Entity(repositoryClass="Crc\ReservBundle\Repository\ReservationRepository")
 */
class Reservation
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

     /**
     * @ORM\Column(type="boolean")
     */
    private $ongoing = false;

    /**
     * @ORM\Column(type="boolean")
     */
    private $confirmed = false;

    /**
     * @ORM\Column(type="boolean")
     */
    private $active = true;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $name = '';

    /**
     * @ORM\ManyToOne(targetEntity="Zogs\UserBundle\Entity\User", inversedBy="reservations", fetch="EAGER")
     */
    private $user;

     /**
     * @ORM\ManyToOne(targetEntity="Crc\ReservBundle\Entity\Department", fetch="EAGER")
     */
    private $department = null;

     /**
     * @ORM\Column(type="date")
     */
    private $date_begin;

    /**
     * @ORM\Column(type="date")
     */
    private $date_end;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $status = '';

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $comment = '';

    /**
     * @ORM\ManyToMany(targetEntity="Crc\ReservBundle\Entity\Device", fetch="EAGER", inversedBy="reservations")
     * @ORM\JoinColumn(nullable=true, name="user_id")
     */
    private $devices = null;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->devices = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set user
     *
     * @param integer $user
     * @return Reservation
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return integer 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set date_begin
     *
     * @param \DateTime $dateBegin
     * @return Reservation
     */
    public function setDateBegin($dateBegin)
    {
        $this->date_begin = $dateBegin;

        return $this;
    }

    /**
     * Get date_begin
     *
     * @return \DateTime 
     */
    public function getDateBegin()
    {
        return $this->date_begin;
    }

    /**
     * Set date_end
     *
     * @param \DateTime $dateEnd
     * @return Reservation
     */
    public function setDateEnd($dateEnd)
    {
        $this->date_end = $dateEnd;

        return $this;
    }

    /**
     * Get date_end
     *
     * @return \DateTime 
     */
    public function getDateEnd()
    {
        return $this->date_end;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Reservation
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
     * Set comment
     *
     * @param string $comment
     * @return Reservation
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
     * Add devices
     *
     * @param \Crc\ReservBundle\Entity\Device $devices
     * @return Reservation
     */
    public function addDevice(\Crc\ReservBundle\Entity\Device $devices)
    {
        $this->devices[] = $devices;

        return $this;
    }


     /**
     * Has device type
     *
     * @param string ^type
     * @return boolean
     */
    public function hasDeviceType($type)
    {
        foreach ($this->devices as $device) {
            if($device->getType() == $type) return true;
        }
        return false;
    }

     /**
     * Get array of device by type
     *
     * @param string ^type
     * @return array
     */
    public function getDevicesByType($type)
    {
        $a = array();
        foreach ($this->devices as $device) {
            if($device->getType() == $type) $a[] = $device;
        }
        return $a;
    }

    /**
     * Get array of type
     *
     * @param string $type
     * @return array
     */
    public function getAllTypes()
    {
        $a = array();
        foreach ($this->devices as $device) {
            if( ! in_array($device->getType(),$a)) $a[] = $device->getType();
        }
        return $a;
    }

    /**
     * Get array of device by type
     *
     * @return integer
     */
    public function countDevicesType($type)
    {
        $devices = $this->getDevicesByType($type);

        return count($devices);
    }

    /**
     * Remove devices
     *
     * @param \Crc\ReservBundle\Entity\Device $devices
     */
    public function removeDevice(\Crc\ReservBundle\Entity\Device $devices)
    {
        $this->devices->removeElement($devices);
    }

    /**
     * Get devices
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDevices()
    {
        return $this->devices;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Reservation
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
     * Set validated
     *
     * @param boolean $validated
     * @return Reservation
     */
    public function setValidated($validated)
    {
        $this->validated = $validated;

        return $this;
    }

    /**
     * Get validated
     *
     * @return boolean 
     */
    public function getValidated()
    {
        return $this->validated;
    }


    /**
     * Set confirmed
     *
     * @param boolean $confirmed
     * @return Reservation
     */
    public function setConfirmed($confirmed)
    {
        $this->confirmed = $confirmed;

        return $this;
    }

    /**
     * Get confirmed
     *
     * @return boolean 
     */
    public function getConfirmed()
    {
        return $this->confirmed;
    }

    /**
     * Set department
     *
     * @param \Crc\ReservBundle\Entity\Department $department
     * @return Reservation
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
     * Set ongoing
     *
     * @param boolean $ongoing
     * @return Reservation
     */
    public function setOngoing($ongoing)
    {
        $this->ongoing = $ongoing;

        return $this;
    }

    /**
     * Get ongoing
     *
     * @return boolean 
     */
    public function getOngoing()
    {
        return $this->ongoing;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Reservation
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }
}
