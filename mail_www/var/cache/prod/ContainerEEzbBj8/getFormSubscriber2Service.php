<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFormSubscriber2Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\MauticSocialBundle\EventListener\FormSubscriber' shared autowired service.
     *
     * @return \MauticPlugin\MauticSocialBundle\EventListener\FormSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['MauticPlugin\\MauticSocialBundle\\EventListener\\FormSubscriber'] = new \MauticPlugin\MauticSocialBundle\EventListener\FormSubscriber(($container->services['MauticPlugin\\MauticSocialBundle\\Integration\\Config'] ?? $container->load('getConfigService')));
    }
}
