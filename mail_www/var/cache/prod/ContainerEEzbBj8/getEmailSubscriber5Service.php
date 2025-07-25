<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEmailSubscriber5Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\IntegrationsBundle\EventListener\EmailSubscriber' shared autowired service.
     *
     * @return \Mautic\IntegrationsBundle\EventListener\EmailSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->services['Mautic\\IntegrationsBundle\\EventListener\\EmailSubscriber'])) {
            return $container->services['Mautic\\IntegrationsBundle\\EventListener\\EmailSubscriber'];
        }
        $b = ($container->services['mautic.helper.integration'] ?? self::getMautic_Helper_IntegrationService($container));

        if (isset($container->services['Mautic\\IntegrationsBundle\\EventListener\\EmailSubscriber'])) {
            return $container->services['Mautic\\IntegrationsBundle\\EventListener\\EmailSubscriber'];
        }

        return $container->services['Mautic\\IntegrationsBundle\\EventListener\\EmailSubscriber'] = new \Mautic\IntegrationsBundle\EventListener\EmailSubscriber(($container->services['translator'] ?? self::getTranslator2Service($container)), $a, ($container->services['mautic.integrations.token.parser'] ??= new \Mautic\IntegrationsBundle\Helper\TokenParser()), ($container->services['Mautic\\IntegrationsBundle\\Entity\\ObjectMappingRepository'] ?? $container->load('getObjectMappingRepositoryService')), $b);
    }
}
