<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Integrations_Sync_SyncProcess_ValueHelperService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.integrations.sync.sync_process.value_helper' shared service.
     *
     * @return \Mautic\IntegrationsBundle\Sync\SyncProcess\Direction\Helper\ValueHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.integrations.sync.sync_process.value_helper'] = new \Mautic\IntegrationsBundle\Sync\SyncProcess\Direction\Helper\ValueHelper();
    }
}
