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

		//$importer = $this->container->get('world.importer.sql');
		//$importer->addOption('force');
		//$importer->addOption('debug-info');
		//$res = $importer->import('/var/www/local.dev/Sfbase/src/Zogs/WorldBundle/Resources/import/FR.sql');
		$connection=$manager->getConnection();
		$file='/var/www/local.dev/Sfbase/src/Zogs/WorldBundle/Resources/import/FR.sql';
		if(!file_exists($file)) {
			echo sprintf('File %s does not exists', $file);
		} 
		$data = file_get_contents($file);

		$err = $connection->exec($data);
		


	}

	public function getOrder(){

		return 0; // the order in which fixtures will be loaded
	}
}

?>