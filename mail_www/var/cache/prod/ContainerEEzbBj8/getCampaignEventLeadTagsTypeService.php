<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCampaignEventLeadTagsTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Form\Type\CampaignEventLeadTagsType' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Form\Type\CampaignEventLeadTagsType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\LeadBundle\\Form\\Type\\CampaignEventLeadTagsType'] = new \Mautic\LeadBundle\Form\Type\CampaignEventLeadTagsType(($container->services['translator'] ?? self::getTranslator2Service($container)));
    }
}
