<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTriggerEventRepositoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PointBundle\Entity\TriggerEventRepository' shared autowired service.
     *
     * @return \Mautic\PointBundle\Entity\TriggerEventRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\PointBundle\\Entity\\TriggerEventRepository'] = new \Mautic\PointBundle\Entity\TriggerEventRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
