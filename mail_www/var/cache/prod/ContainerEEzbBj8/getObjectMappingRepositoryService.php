<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getObjectMappingRepositoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\IntegrationsBundle\Entity\ObjectMappingRepository' shared autowired service.
     *
     * @return \Mautic\IntegrationsBundle\Entity\ObjectMappingRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\IntegrationsBundle\\Entity\\ObjectMappingRepository'] = new \Mautic\IntegrationsBundle\Entity\ObjectMappingRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
