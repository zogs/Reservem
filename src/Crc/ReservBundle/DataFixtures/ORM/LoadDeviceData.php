<?php

namespace Crc\ReservBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Crc\ReservBundle\Entity\Device;
use SGK\BarcodeBundle\Generator\Generator;


class LoadDeviceData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
	private $container;

	public function setContainer(ContainerInterface $container = null)
	{
	    $this->container = $container;
	}

	public function load(ObjectManager $manager)
	{	

		for ($i=0; $i < 30; $i++) { 
			
			$device = new Device();
			$device->setCode('SRH'.$i);
			$device->setType('Sonde Temp RH');
			$device->setDescription('Sonde de température Humidité relative, etc...');
			$device->setDepartment($this->getReference('dpt_crc'));

			$this->addReference('SRH'.$i,$device);
			$manager->persist($device);
			$manager->flush();
		}

		for ($i=0; $i < 30; $i++) { 
			
			$device = new Device();
			$device->setCode('ABRI'.$i);
			$device->setType('Abri');
			$device->setDescription('Abri pour sonde HOBO');
			$device->setDepartment($this->getReference('dpt_crc'));

			$this->addReference('ABRI'.$i,$device);
			$manager->persist($device);
			$manager->flush();
		}
		
	}

	public function getOrder(){

		return 7; // the order in which fixtures will be loaded
	}
}

?>