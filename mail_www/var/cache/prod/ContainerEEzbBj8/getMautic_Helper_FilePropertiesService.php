<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Helper_FilePropertiesService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.helper.file_properties' shared service.
     *
     * @return \Mautic\CoreBundle\Helper\FileProperties
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.helper.file_properties'] = new \Mautic\CoreBundle\Helper\FileProperties();
    }
}
