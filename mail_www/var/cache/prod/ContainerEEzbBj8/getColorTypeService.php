<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getColorTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\MauticFocusBundle\Form\Type\ColorType' shared autowired service.
     *
     * @return \MauticPlugin\MauticFocusBundle\Form\Type\ColorType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['MauticPlugin\\MauticFocusBundle\\Form\\Type\\ColorType'] = new \MauticPlugin\MauticFocusBundle\Form\Type\ColorType();
    }
}
