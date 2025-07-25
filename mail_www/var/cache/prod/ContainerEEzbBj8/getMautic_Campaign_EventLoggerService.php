<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Campaign_EventLoggerService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.campaign.event_logger' shared service.
     *
     * @return \Mautic\CampaignBundle\Executioner\Logger\EventLogger
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\LeadBundle\\Tracker\\ContactTracker'] ?? self::getContactTrackerService($container));

        if (isset($container->services['mautic.campaign.event_logger'])) {
            return $container->services['mautic.campaign.event_logger'];
        }
        $b = ($container->services['Mautic\\CampaignBundle\\Model\\SummaryModel'] ?? $container->load('getSummaryModelService'));

        if (isset($container->services['mautic.campaign.event_logger'])) {
            return $container->services['mautic.campaign.event_logger'];
        }

        return $container->services['mautic.campaign.event_logger'] = new \Mautic\CampaignBundle\Executioner\Logger\EventLogger(($container->services['mautic.helper.ip_lookup'] ?? self::getMautic_Helper_IpLookupService($container)), $a, ($container->services['Mautic\\CampaignBundle\\Entity\\LeadEventLogRepository'] ?? self::getLeadEventLogRepositoryService($container)), ($container->services['Mautic\\CampaignBundle\\Entity\\LeadRepository'] ?? self::getLeadRepositoryService($container)), $b);
    }
}
