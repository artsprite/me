<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getInjectCustomContentSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\GrapesJsBuilderBundle\EventSubscriber\InjectCustomContentSubscriber' shared autowired service.
     *
     * @return \MauticPlugin\GrapesJsBuilderBundle\EventSubscriber\InjectCustomContentSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['MauticPlugin\\GrapesJsBuilderBundle\\Model\\GrapesJsBuilderModel'] ?? $container->load('getGrapesJsBuilderModelService'));

        if (isset($container->services['MauticPlugin\\GrapesJsBuilderBundle\\EventSubscriber\\InjectCustomContentSubscriber'])) {
            return $container->services['MauticPlugin\\GrapesJsBuilderBundle\\EventSubscriber\\InjectCustomContentSubscriber'];
        }
        $b = ($container->privates['twig'] ?? self::getTwigService($container));

        if (isset($container->services['MauticPlugin\\GrapesJsBuilderBundle\\EventSubscriber\\InjectCustomContentSubscriber'])) {
            return $container->services['MauticPlugin\\GrapesJsBuilderBundle\\EventSubscriber\\InjectCustomContentSubscriber'];
        }
        $c = ($container->services['router'] ?? self::getRouterService($container));

        if (isset($container->services['MauticPlugin\\GrapesJsBuilderBundle\\EventSubscriber\\InjectCustomContentSubscriber'])) {
            return $container->services['MauticPlugin\\GrapesJsBuilderBundle\\EventSubscriber\\InjectCustomContentSubscriber'];
        }

        return $container->services['MauticPlugin\\GrapesJsBuilderBundle\\EventSubscriber\\InjectCustomContentSubscriber'] = new \MauticPlugin\GrapesJsBuilderBundle\EventSubscriber\InjectCustomContentSubscriber(($container->services['grapesjsbuilder.config'] ?? $container->load('getGrapesjsbuilder_ConfigService')), $a, $b, ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), $c);
    }
}
