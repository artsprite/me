<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OBiQxh0Service extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.OBiQxh0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.OBiQxh0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'formFactory' => ['privates', 'form.factory', 'getForm_FactoryService', false],
            'model' => ['services', 'Mautic\\EmailBundle\\Model\\EmailModel', 'getEmailModelService', false],
            'security' => ['services', 'mautic.security', 'getMautic_SecurityService', false],
        ], [
            'formFactory' => '?',
            'model' => 'Mautic\\EmailBundle\\Model\\EmailModel',
            'security' => '?',
        ]);
    }
}
