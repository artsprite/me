<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNotificationEventsService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\NotificationBundle\NotificationEvents' shared autowired service.
     *
     * @return \Mautic\NotificationBundle\NotificationEvents
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\NotificationBundle\\NotificationEvents'] = new \Mautic\NotificationBundle\NotificationEvents();
    }
}
