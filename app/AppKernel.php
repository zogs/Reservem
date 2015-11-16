<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),

            //imported
            new FOS\UserBundle\FOSUserBundle(),
            new FOS\RestBundle\FOSRestBundle(),
            new FOS\CommentBundle\FOSCommentBundle(),
            new JMS\SerializerBundle\JMSSerializerBundle(),
            new JMS\I18nRoutingBundle\JMSI18nRoutingBundle(),
            new HWI\Bundle\OAuthBundle\HWIOAuthBundle(),
            new Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle(),
            new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle(),
            new Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle(),
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),
            new Sonata\CoreBundle\SonataCoreBundle(),
            new Sonata\BlockBundle\SonataBlockBundle(),
            new Sonata\DoctrineORMAdminBundle\SonataDoctrineORMAdminBundle(),
            new Sonata\AdminBundle\SonataAdminBundle(),
            new SGK\BarcodeBundle\SGKBarcodeBundle(),            

            //created
            new Zogs\UtilsBundle\ZogsUtilsBundle(),
            new Zogs\UserBundle\ZogsUserBundle(),
            new Zogs\FlashBundle\ZogsFlashBundle(),
            new Zogs\WorldBundle\ZogsWorldBundle(),
            new Zogs\ContactBundle\ZogsContactBundle(),
            new Zogs\ManagerBundle\ZogsManagerBundle(),
            new Zogs\BlogBundle\ZogsBlogBundle(),
            new Zogs\CommentBundle\ZogsCommentBundle(),
            new Zogs\CronBundle\ZogsCronBundle(),
            new Zogs\PageBundle\ZogsPageBundle(), 
            new Zogs\MailerBundle\ZogsMailerBundle(),
            new Zogs\StyleBundle\ZogsStyleBundle(),    
            new Zogs\DatabaseToolBundle\ZogsDatabaseToolBundle(),
            new Crc\ReservBundle\CrcReservBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }
}
