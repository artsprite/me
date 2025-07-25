<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ei10MuFService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.ei10MuF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ei10MuF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'membershipManager' => ['services', 'mautic.campaign.membership.manager', 'getMautic_Campaign_Membership_ManagerService', false],
        ], [
            'membershipManager' => '?',
        ]);
    }
}
