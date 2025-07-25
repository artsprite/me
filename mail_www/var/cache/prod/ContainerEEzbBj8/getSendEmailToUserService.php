<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSendEmailToUserService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\EmailBundle\Model\SendEmailToUser' shared autowired service.
     *
     * @return \Mautic\EmailBundle\Model\SendEmailToUser
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\EmailBundle\\Model\\EmailModel'] ?? self::getEmailModelService($container));

        if (isset($container->services['Mautic\\EmailBundle\\Model\\SendEmailToUser'])) {
            return $container->services['Mautic\\EmailBundle\\Model\\SendEmailToUser'];
        }
        $b = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->services['Mautic\\EmailBundle\\Model\\SendEmailToUser'])) {
            return $container->services['Mautic\\EmailBundle\\Model\\SendEmailToUser'];
        }
        $c = ($container->services['mautic.validator.email'] ?? self::getMautic_Validator_EmailService($container));

        if (isset($container->services['Mautic\\EmailBundle\\Model\\SendEmailToUser'])) {
            return $container->services['Mautic\\EmailBundle\\Model\\SendEmailToUser'];
        }

        return $container->services['Mautic\\EmailBundle\\Model\\SendEmailToUser'] = new \Mautic\EmailBundle\Model\SendEmailToUser($a, $b, ($container->services['mautic.lead.validator.custom_field'] ?? $container->load('getMautic_Lead_Validator_CustomFieldService')), $c);
    }
}
