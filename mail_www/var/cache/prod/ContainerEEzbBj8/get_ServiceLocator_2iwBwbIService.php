<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2iwBwbIService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.2iwBwbI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2iwBwbI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'emailPeriodMetrics' => ['services', 'Mautic\\EmailBundle\\Stats\\EmailPeriodMetrics', 'getEmailPeriodMetricsService', true],
            'model' => ['services', 'Mautic\\CampaignBundle\\Model\\CampaignModel', 'getCampaignModelService', false],
        ], [
            'emailPeriodMetrics' => 'Mautic\\EmailBundle\\Stats\\EmailPeriodMetrics',
            'model' => 'Mautic\\CampaignBundle\\Model\\CampaignModel',
        ]);
    }
}
