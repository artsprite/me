<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaintenanceSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\EventListener\MaintenanceSubscriber' shared autowired service.
     *
     * @return \Mautic\CoreBundle\EventListener\MaintenanceSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['doctrine.dbal.default_connection'] ?? self::getDoctrine_Dbal_DefaultConnectionService($container));

        if (isset($container->services['Mautic\\CoreBundle\\EventListener\\MaintenanceSubscriber'])) {
            return $container->services['Mautic\\CoreBundle\\EventListener\\MaintenanceSubscriber'];
        }

        return $container->services['Mautic\\CoreBundle\\EventListener\\MaintenanceSubscriber'] = new \Mautic\CoreBundle\EventListener\MaintenanceSubscriber($a, ($container->services['Mautic\\UserBundle\\Entity\\UserTokenRepository'] ?? self::getUserTokenRepositoryService($container)), ($container->services['translator'] ?? self::getTranslator2Service($container)));
    }
}
