<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Native_ConnectorService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.native.connector' shared service.
     *
     * @return \Symfony\Contracts\HttpClient\HttpClientInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.native.connector'] = \Symfony\Component\HttpClient\HttpClient::create();
    }
}
