<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRestrictionHelper2Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ConfigBundle\Mapper\Helper\RestrictionHelper' shared autowired service.
     *
     * @return \Mautic\ConfigBundle\Mapper\Helper\RestrictionHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\ConfigBundle\\Mapper\\Helper\\RestrictionHelper'] = new \Mautic\ConfigBundle\Mapper\Helper\RestrictionHelper();
    }
}
