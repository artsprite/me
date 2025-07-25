<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCampaignSubscriber4Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CampaignBundle\EventListener\CampaignSubscriber' shared autowired service.
     *
     * @return \Mautic\CampaignBundle\EventListener\CampaignSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\CoreBundle\\Model\\AuditLogModel'] ?? self::getAuditLogModelService($container));

        if (isset($container->services['Mautic\\CampaignBundle\\EventListener\\CampaignSubscriber'])) {
            return $container->services['Mautic\\CampaignBundle\\EventListener\\CampaignSubscriber'];
        }
        $b = ($container->services['Mautic\\CampaignBundle\\Service\\CampaignAuditService'] ?? $container->load('getCampaignAuditServiceService'));

        if (isset($container->services['Mautic\\CampaignBundle\\EventListener\\CampaignSubscriber'])) {
            return $container->services['Mautic\\CampaignBundle\\EventListener\\CampaignSubscriber'];
        }

        return $container->services['Mautic\\CampaignBundle\\EventListener\\CampaignSubscriber'] = new \Mautic\CampaignBundle\EventListener\CampaignSubscriber(($container->services['mautic.helper.ip_lookup'] ?? self::getMautic_Helper_IpLookupService($container)), $a, $b);
    }
}
