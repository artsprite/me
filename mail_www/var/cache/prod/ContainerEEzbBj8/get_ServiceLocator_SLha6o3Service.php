<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SLha6o3Service extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.sLha6o3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.sLha6o3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'model' => ['services', 'Mautic\\LeadBundle\\Model\\ListModel', 'getListModelService', false],
            'segmentDependencyTreeFactory' => ['services', 'mautic.lead.service.segment_dependency_tree_factory', 'getMautic_Lead_Service_SegmentDependencyTreeFactoryService', true],
        ], [
            'model' => 'Mautic\\LeadBundle\\Model\\ListModel',
            'segmentDependencyTreeFactory' => '?',
        ]);
    }
}
