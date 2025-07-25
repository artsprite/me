<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGroupListTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PointBundle\Form\Type\GroupListType' shared autowired service.
     *
     * @return \Mautic\PointBundle\Form\Type\GroupListType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\PointBundle\\Form\\Type\\GroupListType'] = new \Mautic\PointBundle\Form\Type\GroupListType(($container->services['mautic.permission.manager'] ?? self::getMautic_Permission_ManagerService($container)), ($container->services['Mautic\\PointBundle\\Entity\\GroupRepository'] ?? $container->load('getGroupRepositoryService')));
    }
}
