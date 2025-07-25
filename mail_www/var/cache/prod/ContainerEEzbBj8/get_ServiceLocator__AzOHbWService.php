<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__AzOHbWService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator..AzOHbW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..AzOHbW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'ipLookupHelper' => ['services', 'mautic.helper.ip_lookup', 'getMautic_Helper_IpLookupService', false],
            'model' => ['services', 'Mautic\\LeadBundle\\Model\\LeadModel', 'getLeadModelService', false],
            'pointGroupModel' => ['services', 'Mautic\\PointBundle\\Model\\PointGroupModel', 'getPointGroupModelService', true],
        ], [
            'ipLookupHelper' => '?',
            'model' => 'Mautic\\LeadBundle\\Model\\LeadModel',
            'pointGroupModel' => 'Mautic\\PointBundle\\Model\\PointGroupModel',
        ]);
    }
}
