<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStatRepository4Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\NotificationBundle\Entity\StatRepository' shared autowired service.
     *
     * @return \Mautic\NotificationBundle\Entity\StatRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\NotificationBundle\\Entity\\StatRepository'] = new \Mautic\NotificationBundle\Entity\StatRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
