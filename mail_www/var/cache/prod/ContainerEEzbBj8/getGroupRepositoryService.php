<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGroupRepositoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PointBundle\Entity\GroupRepository' shared autowired service.
     *
     * @return \Mautic\PointBundle\Entity\GroupRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\PointBundle\\Entity\\GroupRepository'] = new \Mautic\PointBundle\Entity\GroupRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
