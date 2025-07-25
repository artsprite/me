<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWebhookSubscriber6Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\WebhookBundle\EventListener\WebhookSubscriber' shared autowired service.
     *
     * @return \Mautic\WebhookBundle\EventListener\WebhookSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\CoreBundle\\Model\\AuditLogModel'] ?? self::getAuditLogModelService($container));

        if (isset($container->services['Mautic\\WebhookBundle\\EventListener\\WebhookSubscriber'])) {
            return $container->services['Mautic\\WebhookBundle\\EventListener\\WebhookSubscriber'];
        }
        $b = ($container->services['mautic.webhook.notificator.webhookkillnotificator'] ?? $container->load('getMautic_Webhook_Notificator_WebhookkillnotificatorService'));

        if (isset($container->services['Mautic\\WebhookBundle\\EventListener\\WebhookSubscriber'])) {
            return $container->services['Mautic\\WebhookBundle\\EventListener\\WebhookSubscriber'];
        }

        return $container->services['Mautic\\WebhookBundle\\EventListener\\WebhookSubscriber'] = new \Mautic\WebhookBundle\EventListener\WebhookSubscriber(($container->services['mautic.helper.ip_lookup'] ?? self::getMautic_Helper_IpLookupService($container)), $a, $b);
    }
}
