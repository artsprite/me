<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCleanupMaintenanceCommandService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Command\CleanupMaintenanceCommand' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Command\CleanupMaintenanceCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\Command\\CleanupMaintenanceCommand'] = new \Mautic\CoreBundle\Command\CleanupMaintenanceCommand(($container->services['translator'] ?? self::getTranslator2Service($container)), ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container)), ($container->services['mautic.helper.paths'] ?? self::getMautic_Helper_PathsService($container)), ($container->services['mautic.helper.core_parameters'] ??= new \Mautic\CoreBundle\Helper\CoreParametersHelper($container)), ($container->services['Mautic\\CoreBundle\\Model\\AuditLogModel'] ?? self::getAuditLogModelService($container)), ($container->services['mautic.helper.ip_lookup'] ?? self::getMautic_Helper_IpLookupService($container)));
    }
}
