<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Firewall_Map_Context_MainService extends AppKernelProdContainer
{
    /*
     * Gets the private 'security.firewall.map.context.main' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\UserBundle\\Security\\EntryPoint\\MainEntryPoint'] ?? $container->load('getMainEntryPointService'));

        if (isset($container->privates['security.firewall.map.context.main'])) {
            return $container->privates['security.firewall.map.context.main'];
        }
        $b = ($container->privates['security.event_dispatcher.main'] ?? $container->load('getSecurity_EventDispatcher_MainService'));

        if (isset($container->privates['security.firewall.map.context.main'])) {
            return $container->privates['security.firewall.map.context.main'];
        }
        $c = ($container->privates['security.token_storage'] ?? self::getSecurity_TokenStorageService($container));
        $d = ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService'));

        return $container->privates['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['security.channel_listener'] ?? $container->load('getSecurity_ChannelListenerService'));
            yield 1 => ($container->privates['security.context_listener.1'] ?? self::getSecurity_ContextListener_1Service($container));
            yield 2 => ($container->privates['security.firewall.authenticator.main'] ?? $container->load('getSecurity_Firewall_Authenticator_MainService'));
            yield 3 => ($container->privates['security.access_listener'] ?? $container->load('getSecurity_AccessListenerService'));
        }, 4), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($c, ($container->privates['security.authentication.trust_resolver'] ??= new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver()), $d, 'main', $a, NULL, NULL, ($container->privates['monolog.logger.security'] ?? self::getMonolog_Logger_SecurityService($container)), false), new \Symfony\Component\Security\Http\Firewall\LogoutListener($c, $d, $b, ['csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => '/s/logout']), new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('main', 'security.user_checker', '.security.request_matcher.T4HX2rQ', true, false, 'mautic.user.provider', 'mautic', 'Mautic\\UserBundle\\Security\\EntryPoint\\MainEntryPoint', NULL, NULL, ['fos_oauth', 'mautic_sso', 'form_login', 'light_saml_sp', 'remember_me'], NULL, ['path' => '/s/logout', 'target' => '/s/login', 'enable_csrf' => NULL, 'csrf_token_id' => 'logout', 'csrf_parameter' => '_csrf_token', 'invalidate_session' => true, 'clear_site_data' => [], 'delete_cookies' => []]));
    }
}
