<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCampaignSubscriber8Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\FormBundle\EventListener\CampaignSubscriber' shared autowired service.
     *
     * @return \Mautic\FormBundle\EventListener\CampaignSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\FormBundle\\Model\\FormModel'] ?? self::getFormModelService($container));

        if (isset($container->services['Mautic\\FormBundle\\EventListener\\CampaignSubscriber'])) {
            return $container->services['Mautic\\FormBundle\\EventListener\\CampaignSubscriber'];
        }
        $b = ($container->services['Mautic\\FormBundle\\Model\\SubmissionModel'] ?? self::getSubmissionModelService($container));

        if (isset($container->services['Mautic\\FormBundle\\EventListener\\CampaignSubscriber'])) {
            return $container->services['Mautic\\FormBundle\\EventListener\\CampaignSubscriber'];
        }
        $c = ($container->services['mautic.campaign.executioner.realtime'] ?? $container->load('getMautic_Campaign_Executioner_RealtimeService'));

        if (isset($container->services['Mautic\\FormBundle\\EventListener\\CampaignSubscriber'])) {
            return $container->services['Mautic\\FormBundle\\EventListener\\CampaignSubscriber'];
        }
        $d = ($container->services['mautic.helper.form.field_helper'] ?? self::getMautic_Helper_Form_FieldHelperService($container));

        if (isset($container->services['Mautic\\FormBundle\\EventListener\\CampaignSubscriber'])) {
            return $container->services['Mautic\\FormBundle\\EventListener\\CampaignSubscriber'];
        }

        return $container->services['Mautic\\FormBundle\\EventListener\\CampaignSubscriber'] = new \Mautic\FormBundle\EventListener\CampaignSubscriber($a, $b, $c, $d);
    }
}
