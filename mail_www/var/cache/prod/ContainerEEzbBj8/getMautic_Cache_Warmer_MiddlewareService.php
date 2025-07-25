<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Cache_Warmer_MiddlewareService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.cache.warmer.middleware' shared service.
     *
     * @return \Mautic\CoreBundle\Cache\MiddlewareCacheWarmer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.cache.warmer.middleware'] = new \Mautic\CoreBundle\Cache\MiddlewareCacheWarmer('prod');
    }
}
