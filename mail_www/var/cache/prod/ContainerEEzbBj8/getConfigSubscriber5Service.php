<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConfigSubscriber5Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ConfigBundle\EventListener\ConfigSubscriber' shared autowired service.
     *
     * @return \Mautic\ConfigBundle\EventListener\ConfigSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\ConfigBundle\\Service\\ConfigChangeLogger'] ?? $container->load('getConfigChangeLoggerService'));

        if (isset($container->services['Mautic\\ConfigBundle\\EventListener\\ConfigSubscriber'])) {
            return $container->services['Mautic\\ConfigBundle\\EventListener\\ConfigSubscriber'];
        }

        return $container->services['Mautic\\ConfigBundle\\EventListener\\ConfigSubscriber'] = new \Mautic\ConfigBundle\EventListener\ConfigSubscriber($a, ($container->services['Mautic\\CoreBundle\\Entity\\IpAddressRepository'] ?? $container->load('getIpAddressRepositoryService')), ($container->services['mautic.helper.core_parameters'] ??= new \Mautic\CoreBundle\Helper\CoreParametersHelper($container)), ($container->services['Mautic\\CoreBundle\\Entity\\AuditLogRepository'] ?? $container->load('getAuditLogRepositoryService')));
    }
}
