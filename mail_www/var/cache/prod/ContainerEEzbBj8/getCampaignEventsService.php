<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCampaignEventsService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CampaignBundle\CampaignEvents' shared autowired service.
     *
     * @return \Mautic\CampaignBundle\CampaignEvents
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CampaignBundle\\CampaignEvents'] = new \Mautic\CampaignBundle\CampaignEvents();
    }
}
