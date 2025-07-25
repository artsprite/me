<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RtMZBb1Service extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.rtMZBb1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.rtMZBb1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'assetsHelper' => ['services', 'Mautic\\CoreBundle\\Twig\\Helper\\AssetsHelper', 'getAssetsHelperService', false],
            'coreParametersHelper' => ['services', 'mautic.helper.core_parameters', 'getMautic_Helper_CoreParametersService', false],
            'emailConfig' => ['services', 'Mautic\\EmailBundle\\Helper\\EmailConfig', 'getEmailConfigService', true],
            'model' => ['services', 'Mautic\\EmailBundle\\Model\\EmailModel', 'getEmailModelService', false],
            'routerHelper' => ['services', 'router', 'getRouterService', false],
            'themeHelper' => ['services', 'mautic.helper.theme', 'getMautic_Helper_ThemeService', false],
            'translator' => ['services', 'Mautic\\CoreBundle\\Translation\\Translator', 'getTranslatorService', false],
        ], [
            'assetsHelper' => 'Mautic\\CoreBundle\\Twig\\Helper\\AssetsHelper',
            'coreParametersHelper' => '?',
            'emailConfig' => 'Mautic\\EmailBundle\\Helper\\EmailConfig',
            'model' => 'Mautic\\EmailBundle\\Model\\EmailModel',
            'routerHelper' => '?',
            'themeHelper' => '?',
            'translator' => 'Mautic\\CoreBundle\\Translation\\Translator',
        ]);
    }
}
