<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Firewall_Authenticator_Oauth2AreaService extends AppKernelProdContainer
{
    /*
     * Gets the private 'security.firewall.authenticator.oauth2_area' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['security.authenticator.form_login.oauth2_area'] ?? $container->load('getSecurity_Authenticator_FormLogin_Oauth2AreaService'));

        if (isset($container->privates['security.firewall.authenticator.oauth2_area'])) {
            return $container->privates['security.firewall.authenticator.oauth2_area'];
        }
        $b = ($container->privates['security.event_dispatcher.oauth2_area'] ?? self::getSecurity_EventDispatcher_Oauth2AreaService($container));

        if (isset($container->privates['security.firewall.authenticator.oauth2_area'])) {
            return $container->privates['security.firewall.authenticator.oauth2_area'];
        }

        return $container->privates['security.firewall.authenticator.oauth2_area'] = new \Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener(new \Symfony\Component\Security\Http\Authentication\AuthenticatorManager([$a], ($container->privates['security.token_storage'] ?? self::getSecurity_TokenStorageService($container)), $b, 'oauth2_area', ($container->privates['monolog.logger.security'] ?? self::getMonolog_Logger_SecurityService($container)), true, true, []));
    }
}
