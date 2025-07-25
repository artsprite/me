<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Y6YZvDnService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.y6YZvDn' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.y6YZvDn'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'pathsHelper' => ['services', 'mautic.helper.paths', 'getMautic_Helper_PathsService', false],
            'urlGenerator' => ['services', 'router', 'getRouterService', false],
        ], [
            'pathsHelper' => '?',
            'urlGenerator' => '?',
        ]);
    }
}
