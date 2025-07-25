<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Validator_EmailaddressService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.validator.emailaddress' shared service.
     *
     * @return \Mautic\LeadBundle\Form\Validator\Constraints\EmailAddressValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.validator.email'] ?? self::getMautic_Validator_EmailService($container));

        if (isset($container->services['mautic.validator.emailaddress'])) {
            return $container->services['mautic.validator.emailaddress'];
        }

        return $container->services['mautic.validator.emailaddress'] = new \Mautic\LeadBundle\Form\Validator\Constraints\EmailAddressValidator($a);
    }
}
