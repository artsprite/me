<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSearchSubscriber4Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\AssetBundle\EventListener\SearchSubscriber' shared autowired service.
     *
     * @return \Mautic\AssetBundle\EventListener\SearchSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\AssetBundle\\Model\\AssetModel'] ?? self::getAssetModelService($container));

        if (isset($container->services['Mautic\\AssetBundle\\EventListener\\SearchSubscriber'])) {
            return $container->services['Mautic\\AssetBundle\\EventListener\\SearchSubscriber'];
        }

        return $container->services['Mautic\\AssetBundle\\EventListener\\SearchSubscriber'] = new \Mautic\AssetBundle\EventListener\SearchSubscriber($a, ($container->services['mautic.security'] ?? self::getMautic_SecurityService($container)), ($container->services['Mautic\\CoreBundle\\Service\\GlobalSearch'] ?? $container->load('getGlobalSearchService')));
    }
}
