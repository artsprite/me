<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEventHelperService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PluginBundle\Helper\EventHelper' shared autowired service.
     *
     * @return \Mautic\PluginBundle\Helper\EventHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\PluginBundle\\Helper\\EventHelper'] = new \Mautic\PluginBundle\Helper\EventHelper();
    }
}
