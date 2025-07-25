<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPointSubscriber6Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PageBundle\EventListener\PointSubscriber' shared autowired service.
     *
     * @return \Mautic\PageBundle\EventListener\PointSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\PointBundle\\Model\\PointModel'] ?? $container->load('getPointModelService'));

        if (isset($container->services['Mautic\\PageBundle\\EventListener\\PointSubscriber'])) {
            return $container->services['Mautic\\PageBundle\\EventListener\\PointSubscriber'];
        }
        $b = ($container->services['Mautic\\PageBundle\\Helper\\PointActionHelper'] ?? $container->load('getPointActionHelper3Service'));

        if (isset($container->services['Mautic\\PageBundle\\EventListener\\PointSubscriber'])) {
            return $container->services['Mautic\\PageBundle\\EventListener\\PointSubscriber'];
        }

        return $container->services['Mautic\\PageBundle\\EventListener\\PointSubscriber'] = new \Mautic\PageBundle\EventListener\PointSubscriber($a, $b);
    }
}
