<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCampaignActionDeleteContactSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\EventListener\CampaignActionDeleteContactSubscriber' shared autowired service.
     *
     * @return \Mautic\LeadBundle\EventListener\CampaignActionDeleteContactSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\LeadBundle\\Model\\LeadModel'] ?? self::getLeadModelService($container));

        if (isset($container->services['Mautic\\LeadBundle\\EventListener\\CampaignActionDeleteContactSubscriber'])) {
            return $container->services['Mautic\\LeadBundle\\EventListener\\CampaignActionDeleteContactSubscriber'];
        }

        return $container->services['Mautic\\LeadBundle\\EventListener\\CampaignActionDeleteContactSubscriber'] = new \Mautic\LeadBundle\EventListener\CampaignActionDeleteContactSubscriber($a, ($container->services['mautic.campaign.helper.removed_contact_tracker'] ??= new \Mautic\CampaignBundle\Helper\RemovedContactTracker()));
    }
}
