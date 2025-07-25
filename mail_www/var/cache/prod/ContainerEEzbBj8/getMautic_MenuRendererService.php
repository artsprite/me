<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_MenuRendererService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.menu_renderer' shared service.
     *
     * @return \Mautic\CoreBundle\Menu\MenuRenderer
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['twig'] ?? self::getTwigService($container));

        if (isset($container->services['mautic.menu_renderer'])) {
            return $container->services['mautic.menu_renderer'];
        }

        return $container->services['mautic.menu_renderer'] = new \Mautic\CoreBundle\Menu\MenuRenderer(($container->services['knp_menu.matcher'] ?? self::getKnpMenu_MatcherService($container)), $a);
    }
}
