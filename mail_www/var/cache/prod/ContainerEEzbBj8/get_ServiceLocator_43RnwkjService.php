<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_43RnwkjService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.43Rnwkj' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.43Rnwkj'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'client' => ['services', 'mautic.webhook.http.client', 'getMautic_Webhook_Http_ClientService', true],
            'pathsHelper' => ['services', 'mautic.helper.paths', 'getMautic_Helper_PathsService', false],
        ], [
            'client' => '?',
            'pathsHelper' => '?',
        ]);
    }
}
