<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFormSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\MauticFocusBundle\EventListener\FormSubscriber' shared autowired service.
     *
     * @return \MauticPlugin\MauticFocusBundle\EventListener\FormSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['MauticPlugin\\MauticFocusBundle\\Model\\FocusModel'] ?? self::getFocusModelService($container));

        if (isset($container->services['MauticPlugin\\MauticFocusBundle\\EventListener\\FormSubscriber'])) {
            return $container->services['MauticPlugin\\MauticFocusBundle\\EventListener\\FormSubscriber'];
        }

        return $container->services['MauticPlugin\\MauticFocusBundle\\EventListener\\FormSubscriber'] = new \MauticPlugin\MauticFocusBundle\EventListener\FormSubscriber($a);
    }
}
