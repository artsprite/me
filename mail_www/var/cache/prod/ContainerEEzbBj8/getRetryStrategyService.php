<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRetryStrategyService extends AppKernelProdContainer
{
    /*
     * Gets the private 'Mautic\MessengerBundle\Retry\RetryStrategy' shared autowired service.
     *
     * @return \Mautic\MessengerBundle\Retry\RetryStrategy
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['Mautic\\MessengerBundle\\Retry\\RetryStrategy'] = new \Mautic\MessengerBundle\Retry\RetryStrategy(($container->services['mautic.helper.core_parameters'] ??= new \Mautic\CoreBundle\Helper\CoreParametersHelper($container)));
    }
}
