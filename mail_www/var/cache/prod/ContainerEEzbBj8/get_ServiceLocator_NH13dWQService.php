<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NH13dWQService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.nH13dWQ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.nH13dWQ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'form' => ['privates', '.errored..service_locator.nH13dWQ.Symfony\\Component\\Form\\FormInterface', NULL, 'Cannot autowire service ".service_locator.nH13dWQ": it references interface "Symfony\\Component\\Form\\FormInterface" but no such service exists. You should maybe alias this interface to the existing "fos_oauth_server.authorize.form" service.'],
        ], [
            'form' => 'Symfony\\Component\\Form\\FormInterface',
        ]);
    }
}
