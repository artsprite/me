<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TuwHLDMService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.TuwHLDM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.TuwHLDM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'assetsHelper' => ['services', 'Mautic\\CoreBundle\\Twig\\Helper\\AssetsHelper', 'getAssetsHelperService', false],
            'coreParametersHelper' => ['services', 'mautic.helper.core_parameters', 'getMautic_Helper_CoreParametersService', false],
            'routerHelper' => ['services', 'router', 'getRouterService', false],
            'themeHelper' => ['services', 'mautic.helper.theme', 'getMautic_Helper_ThemeService', false],
            'translator' => ['services', 'Mautic\\CoreBundle\\Translation\\Translator', 'getTranslatorService', false],
        ], [
            'assetsHelper' => 'Mautic\\CoreBundle\\Twig\\Helper\\AssetsHelper',
            'coreParametersHelper' => '?',
            'routerHelper' => '?',
            'themeHelper' => '?',
            'translator' => 'Mautic\\CoreBundle\\Translation\\Translator',
        ]);
    }
}
