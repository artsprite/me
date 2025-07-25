<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCampaignEventDeleteSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CampaignBundle\EventListener\CampaignEventDeleteSubscriber' shared autowired service.
     *
     * @return \Mautic\CampaignBundle\EventListener\CampaignEventDeleteSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\CampaignBundle\\Model\\CampaignModel'] ?? self::getCampaignModelService($container));

        if (isset($container->services['Mautic\\CampaignBundle\\EventListener\\CampaignEventDeleteSubscriber'])) {
            return $container->services['Mautic\\CampaignBundle\\EventListener\\CampaignEventDeleteSubscriber'];
        }
        $b = ($container->services['Mautic\\CampaignBundle\\Model\\EventModel'] ?? $container->load('getEventModelService'));

        if (isset($container->services['Mautic\\CampaignBundle\\EventListener\\CampaignEventDeleteSubscriber'])) {
            return $container->services['Mautic\\CampaignBundle\\EventListener\\CampaignEventDeleteSubscriber'];
        }

        return $container->services['Mautic\\CampaignBundle\\EventListener\\CampaignEventDeleteSubscriber'] = new \Mautic\CampaignBundle\EventListener\CampaignEventDeleteSubscriber(($container->services['Mautic\\CampaignBundle\\Entity\\LeadEventLogRepository'] ?? self::getLeadEventLogRepositoryService($container)), ($container->services['Mautic\\CampaignBundle\\Helper\\CampaignConfig'] ?? $container->load('getCampaignConfigService')), $a, $b);
    }
}
