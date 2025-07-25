<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Helper_ComposerService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.helper.composer' shared service.
     *
     * @return \Mautic\CoreBundle\Helper\ComposerHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.helper.composer'] = new \Mautic\CoreBundle\Helper\ComposerHelper(($container->services['kernel'] ?? $container->get('kernel', 1)), ($container->services['monolog.logger.mautic'] ?? self::getMonolog_Logger_MauticService($container)));
    }
}
