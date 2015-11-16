<?php

namespace Crc\ReservBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Crc\ReservBundle\Entity\Device;
use Crc\ReservBundle\Entity\Reservation;

class LoadReservationData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
	private $container;

	public function setContainer(ContainerInterface $container = null)
	{
	    $this->container = $container;
	}

	public function load(ObjectManager $manager)
	{		
		/*
		$reserv = new Reservation();
		$reserv->setUser($this->getReference('user1'));
		$reserv->setDateBegin(\DateTime::createFromFormat('j-M-Y', '1-Oct-2015'));
		$reserv->setDateEnd(\DateTime::createFromFormat('j-M-Y', '30-Oct-2015'));
		$reserv->setComment('Reservation de test 1');
		$reserv->setName('Reservation 1');
		$reserv->setConfirmed(true);
		$reserv->setDepartment($this->getReference('dpt_crc'));
		for ($i=1; $i < 5; $i++) { 
			$reserv->addDevice($this->getReference('SRH'.$i));
			$reserv->addDevice($this->getReference('ABRI'.$i));
		}
		

		$manager->persist($reserv);
		$manager->flush();

		$reserv = new Reservation();
		$reserv->setUser($this->getReference('user2'));
		$reserv->setDateBegin(\DateTime::createFromFormat('j-M-Y', '1-Nov-2015'));
		$reserv->setDateEnd(\DateTime::createFromFormat('j-M-Y', '30-Nov-2015'));
		$reserv->setComment('Reservation de test 2');
		$reserv->setName('Reservation 2');
		$reserv->setConfirmed(true);
		$reserv->setDepartment($this->getReference('dpt_crc'));
		for ($i=1; $i <= 5; $i++) { 
			$reserv->addDevice($this->getReference('SRH'.$i));
			$reserv->addDevice($this->getReference('ABRI'.$i));
		}
		

		$manager->persist($reserv);
		$manager->flush();

		$reserv = new Reservation();
		$reserv->setUser($this->getReference('user2'));
		$reserv->setDateBegin(\DateTime::createFromFormat('j-M-Y', '15-Nov-2015'));
		$reserv->setDateEnd(\DateTime::createFromFormat('j-M-Y', '30-Dec-2015'));
		$reserv->setComment('Reservation de test 3');
		$reserv->setName('Reservation 3');
		$reserv->setDepartment($this->getReference('dpt_crc'));
		$reserv->setConfirmed(true);
		for ($i=1; $i <= 5; $i++) { 
			$reserv->addDevice($this->getReference('SRH'.$i));
		}
		

		$manager->persist($reserv);
		$manager->flush();
		*/
	}

	public function getOrder(){

		return 8; // the order in which fixtures will be loaded
	}
}

?>