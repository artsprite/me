<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getClientTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ApiBundle\Form\Type\ClientType' shared autowired service.
     *
     * @return \Mautic\ApiBundle\Form\Type\ClientType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['validator'] ?? self::getValidatorService($container));

        if (isset($container->services['Mautic\\ApiBundle\\Form\\Type\\ClientType'])) {
            return $container->services['Mautic\\ApiBundle\\Form\\Type\\ClientType'];
        }
        $b = ($container->services['router'] ?? self::getRouterService($container));

        if (isset($container->services['Mautic\\ApiBundle\\Form\\Type\\ClientType'])) {
            return $container->services['Mautic\\ApiBundle\\Form\\Type\\ClientType'];
        }

        return $container->services['Mautic\\ApiBundle\\Form\\Type\\ClientType'] = new \Mautic\ApiBundle\Form\Type\ClientType(($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), ($container->services['translator'] ?? self::getTranslator2Service($container)), $a, $b);
    }
}
