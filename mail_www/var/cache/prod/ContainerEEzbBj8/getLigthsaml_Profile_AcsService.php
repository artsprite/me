<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLigthsaml_Profile_AcsService extends AppKernelProdContainer
{
    /*
     * Gets the public 'ligthsaml.profile.acs' shared service.
     *
     * @return \LightSaml\Builder\Profile\WebBrowserSso\Sp\SsoSpReceiveResponseProfileBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['lightsaml.container.build'] ?? $container->load('getLightsaml_Container_BuildService'));

        if (isset($container->services['ligthsaml.profile.acs'])) {
            return $container->services['ligthsaml.profile.acs'];
        }

        return $container->services['ligthsaml.profile.acs'] = new \LightSaml\Builder\Profile\WebBrowserSso\Sp\SsoSpReceiveResponseProfileBuilder($a);
    }
}
