<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEmailType2Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Form\Type\EmailType' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Form\Type\EmailType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\LeadBundle\\Form\\Type\\EmailType'] = new \Mautic\LeadBundle\Form\Type\EmailType(($container->services['mautic.helper.user'] ?? self::getMautic_Helper_UserService($container)));
    }
}
