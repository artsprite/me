<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUpdateLeadCampaignsCommandService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CampaignBundle\Command\UpdateLeadCampaignsCommand' shared autowired service.
     *
     * @return \Mautic\CampaignBundle\Command\UpdateLeadCampaignsCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CampaignBundle\\Command\\UpdateLeadCampaignsCommand'] = new \Mautic\CampaignBundle\Command\UpdateLeadCampaignsCommand(($container->services['Mautic\\CampaignBundle\\Entity\\CampaignRepository'] ?? $container->load('getCampaignRepositoryService')), ($container->services['translator'] ?? self::getTranslator2Service($container)), ($container->services['mautic.campaign.membership.builder'] ?? self::getMautic_Campaign_Membership_BuilderService($container)), ($container->privates['monolog.logger'] ?? self::getMonolog_LoggerService($container)), ($container->services['mautic.helper.twig.formatter'] ?? self::getMautic_Helper_Twig_FormatterService($container)), ($container->services['mautic.helper.paths'] ?? self::getMautic_Helper_PathsService($container)), ($container->services['mautic.helper.core_parameters'] ??= new \Mautic\CoreBundle\Helper\CoreParametersHelper($container)));
    }
}
