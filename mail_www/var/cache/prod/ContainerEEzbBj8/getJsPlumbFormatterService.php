<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJsPlumbFormatterService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Helper\Tree\JsPlumbFormatter' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Helper\Tree\JsPlumbFormatter
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\Helper\\Tree\\JsPlumbFormatter'] = new \Mautic\CoreBundle\Helper\Tree\JsPlumbFormatter();
    }
}
