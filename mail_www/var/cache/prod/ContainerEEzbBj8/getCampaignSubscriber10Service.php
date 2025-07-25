<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCampaignSubscriber10Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PageBundle\EventListener\CampaignSubscriber' shared autowired service.
     *
     * @return \Mautic\PageBundle\EventListener\CampaignSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\LeadBundle\\Model\\LeadModel'] ?? self::getLeadModelService($container));

        if (isset($container->services['Mautic\\PageBundle\\EventListener\\CampaignSubscriber'])) {
            return $container->services['Mautic\\PageBundle\\EventListener\\CampaignSubscriber'];
        }
        $b = ($container->services['mautic.campaign.executioner.realtime'] ?? $container->load('getMautic_Campaign_Executioner_RealtimeService'));

        if (isset($container->services['Mautic\\PageBundle\\EventListener\\CampaignSubscriber'])) {
            return $container->services['Mautic\\PageBundle\\EventListener\\CampaignSubscriber'];
        }

        return $container->services['Mautic\\PageBundle\\EventListener\\CampaignSubscriber'] = new \Mautic\PageBundle\EventListener\CampaignSubscriber($a, ($container->services['mautic.page.helper.tracking'] ?? $container->load('getMautic_Page_Helper_TrackingService')), $b);
    }
}
