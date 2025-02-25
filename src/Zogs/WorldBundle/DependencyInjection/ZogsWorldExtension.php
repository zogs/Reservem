<?php

namespace Zogs\WorldBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class ZogsWorldExtension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('admin.yml');

        // Once the services definition are read, get your service and add a method call to setConfig()
        $ExporterServiceDefintion = $container->getDefinition( 'world.exporter.sql' );
        $ExporterServiceDefintion->addMethodCall( 'setConfig', array( $config[ 'exporter' ] ) );
        $ExporterServiceDefintion->addMethodCall( 'setMysqlPath', array( $config[ 'mysql_path' ] ) );

        $ImporterServiceDefintion = $container->getDefinition( 'world.importer.sql' );
        $ImporterServiceDefintion->addMethodCall( 'setConfig', array( $config[ 'importer' ] ) );
        $ImporterServiceDefintion->addMethodCall( 'setMysqlPath', array( $config[ 'mysql_path' ] ) );
    }
}
