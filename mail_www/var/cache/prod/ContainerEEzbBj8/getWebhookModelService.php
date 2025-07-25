<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWebhookModelService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\WebhookBundle\Model\WebhookModel' shared autowired service.
     *
     * @return \Mautic\WebhookBundle\Model\WebhookModel
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['jms_serializer'] ?? $container->load('getJmsSerializerService'));

        if (isset($container->services['Mautic\\WebhookBundle\\Model\\WebhookModel'])) {
            return $container->services['Mautic\\WebhookBundle\\Model\\WebhookModel'];
        }
        $b = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->services['Mautic\\WebhookBundle\\Model\\WebhookModel'])) {
            return $container->services['Mautic\\WebhookBundle\\Model\\WebhookModel'];
        }
        $c = ($container->services['router'] ?? self::getRouterService($container));

        if (isset($container->services['Mautic\\WebhookBundle\\Model\\WebhookModel'])) {
            return $container->services['Mautic\\WebhookBundle\\Model\\WebhookModel'];
        }

        return $container->services['Mautic\\WebhookBundle\\Model\\WebhookModel'] = new \Mautic\WebhookBundle\Model\WebhookModel(($container->services['mautic.helper.core_parameters'] ??= new \Mautic\CoreBundle\Helper\CoreParametersHelper($container)), $a, ($container->services['mautic.webhook.http.client'] ?? $container->load('getMautic_Webhook_Http_ClientService')), ($container->services['mautic.permission.manager'] ?? self::getMautic_Permission_ManagerService($container)), ($container->services['mautic.security'] ?? self::getMautic_SecurityService($container)), $b, $c, ($container->services['Mautic\\CoreBundle\\Translation\\Translator'] ?? self::getTranslatorService($container)), ($container->services['mautic.helper.user'] ?? self::getMautic_Helper_UserService($container)), ($container->services['monolog.logger.mautic'] ?? self::getMonolog_Logger_MauticService($container)));
    }
}
