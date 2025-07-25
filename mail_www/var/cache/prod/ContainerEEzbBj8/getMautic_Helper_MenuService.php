<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Helper_MenuService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.helper.menu' shared service.
     *
     * @return \Mautic\CoreBundle\Menu\MenuHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.helper.integration'] ?? self::getMautic_Helper_IntegrationService($container));

        if (isset($container->services['mautic.helper.menu'])) {
            return $container->services['mautic.helper.menu'];
        }

        return $container->services['mautic.helper.menu'] = new \Mautic\CoreBundle\Menu\MenuHelper(($container->services['mautic.security'] ?? self::getMautic_SecurityService($container)), ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), ($container->services['mautic.helper.core_parameters'] ??= new \Mautic\CoreBundle\Helper\CoreParametersHelper($container)), $a);
    }
}
