<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_TransportFactoryService extends AppKernelProdContainer
{
    /*
     * Gets the private 'messenger.transport_factory' shared service.
     *
     * @return \Symfony\Component\Messenger\Transport\TransportFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['messenger.transport_factory'] = new \Symfony\Component\Messenger\Transport\TransportFactory(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['messenger.transport.amqp.factory'] ??= new \Symfony\Component\Messenger\Bridge\Amqp\Transport\AmqpTransportFactory());
            yield 1 => ($container->privates['messenger.transport.sync.factory'] ?? $container->load('getMessenger_Transport_Sync_FactoryService'));
            yield 2 => ($container->privates['messenger.transport.in_memory.factory'] ??= new \Symfony\Component\Messenger\Transport\InMemory\InMemoryTransportFactory());
            yield 3 => ($container->privates['messenger.transport.doctrine.factory'] ?? $container->load('getMessenger_Transport_Doctrine_FactoryService'));
            yield 4 => ($container->privates['Mautic\\MessengerBundle\\Transport\\NullTransportFactory'] ??= new \Mautic\MessengerBundle\Transport\NullTransportFactory());
        }, 5));
    }
}
