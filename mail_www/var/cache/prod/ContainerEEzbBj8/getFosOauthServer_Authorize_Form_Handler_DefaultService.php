<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosOauthServer_Authorize_Form_Handler_DefaultService extends AppKernelProdContainer
{
    /*
     * Gets the private 'fos_oauth_server.authorize.form.handler.default' shared service.
     *
     * @return \FOS\OAuthServerBundle\Form\Handler\AuthorizeFormHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['fos_oauth_server.authorize.form.handler.default'] = new \FOS\OAuthServerBundle\Form\Handler\AuthorizeFormHandler(($container->privates['fos_oauth_server.authorize.form'] ?? $container->load('getFosOauthServer_Authorize_FormService')), ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()));
    }
}
