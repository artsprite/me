<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_ServerParamsService extends AppKernelProdContainer
{
    /*
     * Gets the private 'form.server_params' shared service.
     *
     * @return \Symfony\Component\Form\Util\ServerParams
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['form.server_params'] = new \Symfony\Component\Form\Util\ServerParams(($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()));
    }
}
