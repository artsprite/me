<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CfZajoBService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.CfZajoB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CfZajoB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'analyticsHelper' => ['services', 'mautic.helper.twig.analytics', 'getMautic_Helper_Twig_AnalyticsService', false],
        ], [
            'analyticsHelper' => '?',
        ]);
    }
}
