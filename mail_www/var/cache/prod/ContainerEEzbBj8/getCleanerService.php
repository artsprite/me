<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCleanerService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PluginBundle\Helper\Cleaner' shared autowired service.
     *
     * @return \Mautic\PluginBundle\Helper\Cleaner
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\PluginBundle\\Helper\\Cleaner'] = new \Mautic\PluginBundle\Helper\Cleaner();
    }
}
