<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKnpMenu_MenuProvider_LazyService extends AppKernelProdContainer
{
    /*
     * Gets the private 'knp_menu.menu_provider.lazy' shared service.
     *
     * @return \Knp\Menu\Provider\LazyProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['knp_menu.menu_provider.lazy'] = new \Knp\Menu\Provider\LazyProvider(['main' => #[\Closure(name: 'mautic.menu.main', class: 'Knp\\Menu\\MenuItem')] fn () => ($container->services['mautic.menu.main'] ?? $container->load('getMautic_Menu_MainService')), 'admin' => #[\Closure(name: 'mautic.menu.admin', class: 'Knp\\Menu\\MenuItem')] fn () => ($container->services['mautic.menu.admin'] ?? $container->load('getMautic_Menu_AdminService')), 'extra' => #[\Closure(name: 'mautic.menu.extra', class: 'Knp\\Menu\\MenuItem')] fn () => ($container->services['mautic.menu.extra'] ?? $container->load('getMautic_Menu_ExtraService')), 'profile' => #[\Closure(name: 'mautic.menu.profile', class: 'Knp\\Menu\\MenuItem')] fn () => ($container->services['mautic.menu.profile'] ?? $container->load('getMautic_Menu_ProfileService'))]);
    }
}
