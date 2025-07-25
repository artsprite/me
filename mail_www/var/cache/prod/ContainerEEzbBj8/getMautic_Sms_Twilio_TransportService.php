<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Sms_Twilio_TransportService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.sms.twilio.transport' shared service.
     *
     * @return \Mautic\SmsBundle\Integration\Twilio\TwilioTransport
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.sms.twilio.configuration'] ?? $container->load('getMautic_Sms_Twilio_ConfigurationService'));

        if (isset($container->services['mautic.sms.twilio.transport'])) {
            return $container->services['mautic.sms.twilio.transport'];
        }

        return $container->services['mautic.sms.twilio.transport'] = new \Mautic\SmsBundle\Integration\Twilio\TwilioTransport($a, ($container->services['monolog.logger.mautic'] ?? self::getMonolog_Logger_MauticService($container)));
    }
}
