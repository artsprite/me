<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMauticCrmBundleService extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\MauticCrmBundle\MauticCrmBundle' shared autowired service.
     *
     * @return \MauticPlugin\MauticCrmBundle\MauticCrmBundle
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['MauticPlugin\\MauticCrmBundle\\MauticCrmBundle'] = new \MauticPlugin\MauticCrmBundle\MauticCrmBundle();
    }
}
