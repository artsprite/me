<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNoUserExceptionService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Field\Exception\NoUserException' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Field\Exception\NoUserException
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\LeadBundle\\Field\\Exception\\NoUserException'] = new \Mautic\LeadBundle\Field\Exception\NoUserException();
    }
}
