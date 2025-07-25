<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Migrations_DependencyFactoryService extends AppKernelProdContainer
{
    /*
     * Gets the private 'doctrine.migrations.dependency_factory' shared service.
     *
     * @return \Doctrine\Migrations\DependencyFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = new \Doctrine\Migrations\Configuration\Configuration();

        $b = new \Doctrine\Migrations\Metadata\Storage\TableMetadataStorageConfiguration();
        $b->setTableName($container->getEnv('MAUTIC_MIGRATIONS_TABLE_NAME'));

        $a->addMigrationsDirectory('Mautic\\Migrations', (\dirname(__DIR__, 4).'/app/migrations'));
        $a->setCustomTemplate((\dirname(__DIR__, 4).'/app/migrations/Migration.template'));
        $a->setAllOrNothing(false);
        $a->setCheckDatabasePlatform(true);
        $a->setTransactional(true);
        $a->setMetadataStorageConfiguration($b);

        $container->privates['doctrine.migrations.dependency_factory'] = $instance = \Doctrine\Migrations\DependencyFactory::fromEntityManager(new \Doctrine\Migrations\Configuration\Migration\ExistingConfiguration($a), \Doctrine\Migrations\Configuration\EntityManager\ManagerRegistryEntityManager::withSimpleDefault(($container->services['doctrine'] ?? self::getDoctrineService($container))), ($container->privates['monolog.logger'] ?? self::getMonolog_LoggerService($container)));

        $instance->setDefinition('Doctrine\\Migrations\\Version\\MigrationFactory', #[\Closure(name: 'doctrine.migrations.container_aware_migrations_factory', class: 'Doctrine\\Bundle\\MigrationsBundle\\MigrationsFactory\\ContainerAwareMigrationFactory')] fn () => ($container->privates['doctrine.migrations.container_aware_migrations_factory'] ?? $container->load('getDoctrine_Migrations_ContainerAwareMigrationsFactoryService')));

        return $instance;
    }
}
