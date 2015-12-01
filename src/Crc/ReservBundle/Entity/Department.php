<?php

namespace Crc\ReservBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="department")
 * @ORM\Entity(repositoryClass="Crc\ReservBundle\Repository\DepartmentRepository")
 */
class Department
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

     /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $acronyme;

    /**
     * @ORM\Column(type="text")
     */
    private $description = '';

    /**
     * @ORM\Column(type="text")
     */
    private $address = '';

     /**
     * @ORM\OneToOne(targetEntity="Zogs\UtilsBundle\Entity\Image", fetch="EAGER", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $logo = null;

    /**
     * @ORM\ManyToMany(targetEntity="Zogs\UserBundle\Entity\User", fetch="EAGER")
     * @ORM\JoinTable(name="department_admins")
     */
    private $admins = null;

 /**
     * @ORM\ManyToMany(targetEntity="Zogs\UserBundle\Entity\User", inversedBy="departments")
     * @ORM\JoinTable(name="department_members")
     */
    private $members = null;

    /**
     * @ORM\OneToMany(targetEntity="Crc\ReservBundle\Entity\Device", mappedBy="department", cascade={"remove"})
     */
    private $devices = null;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->admins = new \Doctrine\Common\Collections\ArrayCollection();
        $this->members = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return Department
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
     * Set acronyme
     *
     * @param string $acronyme
     * @return Department
     */
    public function setAcronyme($acronyme)
    {
        $this->acronyme = $acronyme;

        return $this;
    }

    /**
     * Get acronyme
     *
     * @return string 
     */
    public function getAcronyme()
    {
        return $this->acronyme;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Department
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
     * Set address
     *
     * @param string $address
     * @return Department
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set logo
     *
     * @param \Zogs\UserBundle\Entity\Avatar $logo
     * @return Department
     */
    public function setLogo(\Zogs\UtilsBundle\Entity\Image $logo = null)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return \Zogs\UserBundle\Entity\Avatar 
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Add admins
     *
     * @param \Zogs\UserBundle\Entity\User $admins
     * @return Department
     */
    public function addAdmin(\Zogs\UserBundle\Entity\User $admins)
    {
        $this->admins[] = $admins;

        return $this;
    }

    /**
     * Remove admins
     *
     * @param \Zogs\UserBundle\Entity\User $admins
     */
    public function removeAdmin(\Zogs\UserBundle\Entity\User $admins)
    {
        $this->admins->removeElement($admins);
    }

    /**
     * Get admins
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAdmins()
    {
        return $this->admins;
    }

    /**
     * Return true if user is admin
     *
     * @param \Zogs\UserBundle\Entity\User $user
     * @return Boolean
     */
    public function isAdmin(\Zogs\UserBundle\Entity\User $user)
    {
        if($user->hasRole('ROLE_ADMIN')) return true;
        if($this->admins->contains($user)) return true;
        return false;
    }

    /**
     * Add members
     *
     * @param \Zogs\UserBundle\Entity\User $members
     * @return Department
     */
    public function addMember(\Zogs\UserBundle\Entity\User $members)
    {
        $this->members[] = $members;

        return $this;
    }

    /**
     * Remove members
     *
     * @param \Zogs\UserBundle\Entity\User $members
     */
    public function removeMember(\Zogs\UserBundle\Entity\User $members)
    {
        $this->members->removeElement($members);
    }

    /**
     * Get members
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * Return true if user is member
     *
     * @param \Zogs\UserBundle\Entity\User $user
     * @return Boolean
     */
    public function isMember(\Zogs\UserBundle\Entity\User $user)
    {
        if($user->hasRole('ROLE_ADMIN')) return true;
        if($this->members->contains($user)) return true;
        return false;
    }
}
