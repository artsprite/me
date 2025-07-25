<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Integrations_Sync_Notification_HandlerCompanyService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.integrations.sync.notification.handler_company' shared service.
     *
     * @return \Mautic\IntegrationsBundle\Sync\Notification\Handler\CompanyNotificationHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.integrations.sync.notification.handler_company'] = new \Mautic\IntegrationsBundle\Sync\Notification\Handler\CompanyNotificationHandler(($container->services['mautic.integrations.sync.notification.writer'] ?? $container->load('getMautic_Integrations_Sync_Notification_WriterService')), ($container->services['mautic.integrations.sync.notification.helper_user_notification'] ?? $container->load('getMautic_Integrations_Sync_Notification_HelperUserNotificationService')), ($container->services['mautic.integrations.sync.notification.helper_company'] ?? $container->load('getMautic_Integrations_Sync_Notification_HelperCompanyService')));
    }
}
