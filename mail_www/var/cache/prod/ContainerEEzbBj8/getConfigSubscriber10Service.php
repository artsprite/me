<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConfigSubscriber10Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\NotificationBundle\EventListener\ConfigSubscriber' shared autowired service.
     *
     * @return \Mautic\NotificationBundle\EventListener\ConfigSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\NotificationBundle\\EventListener\\ConfigSubscriber'] = new \Mautic\NotificationBundle\EventListener\ConfigSubscriber();
    }
}
