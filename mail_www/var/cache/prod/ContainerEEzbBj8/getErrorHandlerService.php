<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getErrorHandlerService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\ErrorHandler\ErrorHandler' shared autowired service.
     *
     * @return \Mautic\CoreBundle\ErrorHandler\ErrorHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\ErrorHandler\\ErrorHandler'] = new \Mautic\CoreBundle\ErrorHandler\ErrorHandler();
    }
}
