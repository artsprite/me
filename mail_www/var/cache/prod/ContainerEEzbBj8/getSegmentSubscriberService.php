<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSegmentSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\EventListener\SegmentSubscriber' shared autowired service.
     *
     * @return \Mautic\LeadBundle\EventListener\SegmentSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\CoreBundle\\Model\\AuditLogModel'] ?? self::getAuditLogModelService($container));

        if (isset($container->services['Mautic\\LeadBundle\\EventListener\\SegmentSubscriber'])) {
            return $container->services['Mautic\\LeadBundle\\EventListener\\SegmentSubscriber'];
        }
        $b = ($container->services['Mautic\\LeadBundle\\Model\\ListModel'] ?? self::getListModelService($container));

        if (isset($container->services['Mautic\\LeadBundle\\EventListener\\SegmentSubscriber'])) {
            return $container->services['Mautic\\LeadBundle\\EventListener\\SegmentSubscriber'];
        }

        return $container->services['Mautic\\LeadBundle\\EventListener\\SegmentSubscriber'] = new \Mautic\LeadBundle\EventListener\SegmentSubscriber(($container->services['mautic.helper.ip_lookup'] ?? self::getMautic_Helper_IpLookupService($container)), $a, $b, ($container->services['mautic.lead.validator.lead.list.campaign'] ?? $container->load('getMautic_Lead_Validator_Lead_List_CampaignService')), ($container->services['translator'] ?? self::getTranslator2Service($container)));
    }
}
