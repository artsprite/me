<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Lead_Constraint_Validator_Lead_List_CampaignService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.lead.constraint.validator.lead.list.campaign' shared service.
     *
     * @return \Mautic\LeadBundle\Validator\Constraints\SegmentUsedInCampaignsValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.lead.constraint.validator.lead.list.campaign'] = new \Mautic\LeadBundle\Validator\Constraints\SegmentUsedInCampaignsValidator(($container->services['mautic.lead.validator.lead.list.campaign'] ?? $container->load('getMautic_Lead_Validator_Lead_List_CampaignService')));
    }
}
