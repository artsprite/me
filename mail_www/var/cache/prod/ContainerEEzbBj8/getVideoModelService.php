<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVideoModelService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PageBundle\Model\VideoModel' shared autowired service.
     *
     * @return \Mautic\PageBundle\Model\VideoModel
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\LeadBundle\\Tracker\\ContactTracker'] ?? self::getContactTrackerService($container));

        if (isset($container->services['Mautic\\PageBundle\\Model\\VideoModel'])) {
            return $container->services['Mautic\\PageBundle\\Model\\VideoModel'];
        }
        $b = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->services['Mautic\\PageBundle\\Model\\VideoModel'])) {
            return $container->services['Mautic\\PageBundle\\Model\\VideoModel'];
        }
        $c = ($container->services['router'] ?? self::getRouterService($container));

        if (isset($container->services['Mautic\\PageBundle\\Model\\VideoModel'])) {
            return $container->services['Mautic\\PageBundle\\Model\\VideoModel'];
        }

        return $container->services['Mautic\\PageBundle\\Model\\VideoModel'] = new \Mautic\PageBundle\Model\VideoModel(($container->services['mautic.helper.ip_lookup'] ?? self::getMautic_Helper_IpLookupService($container)), $a, ($container->services['mautic.permission.manager'] ?? self::getMautic_Permission_ManagerService($container)), ($container->services['mautic.security'] ?? self::getMautic_SecurityService($container)), $b, $c, ($container->services['Mautic\\CoreBundle\\Translation\\Translator'] ?? self::getTranslatorService($container)), ($container->services['mautic.helper.user'] ?? self::getMautic_Helper_UserService($container)), ($container->services['monolog.logger.mautic'] ?? self::getMonolog_Logger_MauticService($container)), ($container->services['mautic.helper.core_parameters'] ??= new \Mautic\CoreBundle\Helper\CoreParametersHelper($container)));
    }
}
