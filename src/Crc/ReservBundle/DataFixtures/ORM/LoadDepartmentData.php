<?php

namespace Crc\ReservBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Crc\ReservBundle\Entity\Device;
use Crc\ReservBundle\Entity\Department;


class LoadDepartmenetData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
	private $container;

	public function setContainer(ContainerInterface $container = null)
	{
	    $this->container = $container;
	}

	public function load(ObjectManager $manager)
	{	


		$crc = new Department();
		$crc->setName('Centre de Recherche de Climatologie');
		$crc->setAddress('6 boulevard Gabriel');
		$crc->setAcronyme('CRC');
		$crc->setDescription('Le centre de recherc...ect');
		$crc->addAdmin($this->getReference('user1'));
		$crc->addMember($this->getReference('user1'));

		$this->addReference('dpt_crc',$crc);
		$manager->persist($crc);

		$bgs = new Department();
		$bgs->setName('Biogésciences');
		$bgs->setAddress('6 boulevard Gabriel');
		$bgs->setAcronyme('BGS');
		$bgs->setDescription('Le centre de recherc...ect');
		$bgs->addAdmin($this->getReference('user2'));
		$bgs->addMember($this->getReference('user2'));

		$this->addReference('dpt_bgs',$bgs);
		$manager->persist($bgs);

		
		$manager->flush();
		
		
	}

	public function getOrder(){

		return 6; // the order in which fixtures will be loaded
	}
}

?>