<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDsnValidator2Service extends AppKernelProdContainer
{
    /*
     * Gets the private 'Mautic\MessengerBundle\Validator\DsnValidator' shared autowired service.
     *
     * @return \Mautic\MessengerBundle\Validator\DsnValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['messenger.transport_factory'] ?? $container->load('getMessenger_TransportFactoryService'));

        if (isset($container->privates['Mautic\\MessengerBundle\\Validator\\DsnValidator'])) {
            return $container->privates['Mautic\\MessengerBundle\\Validator\\DsnValidator'];
        }

        return $container->privates['Mautic\\MessengerBundle\\Validator\\DsnValidator'] = new \Mautic\MessengerBundle\Validator\DsnValidator($a);
    }
}
