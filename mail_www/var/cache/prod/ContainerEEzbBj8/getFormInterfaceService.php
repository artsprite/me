<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFormInterfaceService extends AppKernelProdContainer
{
    /*
     * Gets the private '.errored..service_locator.nH13dWQ.Symfony\Component\Form\FormInterface' shared service.
     *
     * @return \Symfony\Component\Form\FormInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        throw new RuntimeException('Cannot autowire service ".service_locator.nH13dWQ": it references interface "Symfony\\Component\\Form\\FormInterface" but no such service exists. You should maybe alias this interface to the existing "fos_oauth_server.authorize.form" service.');
    }
}
