<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBatchTagTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\MauticTagManagerBundle\Form\Type\BatchTagType' shared autowired service.
     *
     * @return \MauticPlugin\MauticTagManagerBundle\Form\Type\BatchTagType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['MauticPlugin\\MauticTagManagerBundle\\Form\\Type\\BatchTagType'] = new \MauticPlugin\MauticTagManagerBundle\Form\Type\BatchTagType();
    }
}
