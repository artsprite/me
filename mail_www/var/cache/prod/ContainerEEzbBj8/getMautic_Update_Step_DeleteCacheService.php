<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Update_Step_DeleteCacheService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.update.step.delete_cache' shared service.
     *
     * @return \Mautic\CoreBundle\Update\Step\DeleteCacheStep
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.update.step.delete_cache'] = new \Mautic\CoreBundle\Update\Step\DeleteCacheStep(($container->services['mautic.helper.cache'] ?? self::getMautic_Helper_CacheService($container)), ($container->services['translator'] ?? self::getTranslator2Service($container)));
    }
}
