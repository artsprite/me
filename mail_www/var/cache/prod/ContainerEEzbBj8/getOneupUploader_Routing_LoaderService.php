<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOneupUploader_Routing_LoaderService extends AppKernelProdContainer
{
    /*
     * Gets the public 'oneup_uploader.routing.loader' shared service.
     *
     * @return \Oneup\UploaderBundle\Routing\RouteLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['oneup_uploader.routing.loader'] = new \Oneup\UploaderBundle\Routing\RouteLoader($container->parameters['oneup_uploader.controllers']);
    }
}
