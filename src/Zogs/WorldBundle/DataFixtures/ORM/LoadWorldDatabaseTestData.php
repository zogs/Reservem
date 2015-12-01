<?php

namespace Zogs\WorldBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadWorldDatabaseTestData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{

	/**
	 * @var ContainerInterface
	*/
	private $container;

	/**
	* {@inheritDoc}
	*/
	public function setContainer(ContainerInterface $container = null)
	{
	 	$this->container = $container;
	}

	public function load(ObjectManager $manager)
	{		
		if($this->container->hasParameter('world.importer.load_as_fixtures') && true == $this->container->getParameter('world.importer.load_as_fixtures')) {

			$importer = $this->container->get('world.importer.sql');
			$importer->setMethod('dbal');		
			
			if($this->container->hasParameter('world.importer.dir_to_import')) {

				$dir = $this->container->getParameter('world.importer.dir_to_import');								
			} else {

				$dir = $this->container->get('kernel')->getRootDir().'/src/Zogs/WorldBundle/Resources/import/';
			}
			
			$importer->importAll($dir);
			
		}		
	}

	public function getOrder(){

		return 0; // the order in which fixtures will be loaded
	}
}

?>