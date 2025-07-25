<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMigrationCommandSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\EventListener\MigrationCommandSubscriber' shared autowired service.
     *
     * @return \Mautic\CoreBundle\EventListener\MigrationCommandSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.database.version.provider'] ?? self::getMautic_Database_Version_ProviderService($container));

        if (isset($container->services['Mautic\\CoreBundle\\EventListener\\MigrationCommandSubscriber'])) {
            return $container->services['Mautic\\CoreBundle\\EventListener\\MigrationCommandSubscriber'];
        }
        $b = ($container->services['mautic.generated.columns.provider'] ?? self::getMautic_Generated_Columns_ProviderService($container));

        if (isset($container->services['Mautic\\CoreBundle\\EventListener\\MigrationCommandSubscriber'])) {
            return $container->services['Mautic\\CoreBundle\\EventListener\\MigrationCommandSubscriber'];
        }
        $c = ($container->services['doctrine.dbal.default_connection'] ?? self::getDoctrine_Dbal_DefaultConnectionService($container));

        if (isset($container->services['Mautic\\CoreBundle\\EventListener\\MigrationCommandSubscriber'])) {
            return $container->services['Mautic\\CoreBundle\\EventListener\\MigrationCommandSubscriber'];
        }

        return $container->services['Mautic\\CoreBundle\\EventListener\\MigrationCommandSubscriber'] = new \Mautic\CoreBundle\EventListener\MigrationCommandSubscriber($a, $b, $c);
    }
}
