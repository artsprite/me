<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getExecutionProhibitedExceptionService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CampaignBundle\Executioner\Scheduler\Exception\ExecutionProhibitedException' shared autowired service.
     *
     * @return \Mautic\CampaignBundle\Executioner\Scheduler\Exception\ExecutionProhibitedException
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CampaignBundle\\Executioner\\Scheduler\\Exception\\ExecutionProhibitedException'] = new \Mautic\CampaignBundle\Executioner\Scheduler\Exception\ExecutionProhibitedException();
    }
}
