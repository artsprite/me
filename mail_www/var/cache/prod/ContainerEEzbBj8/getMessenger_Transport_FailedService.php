<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Transport_FailedService extends AppKernelProdContainer
{
    /*
     * Gets the private 'messenger.transport.failed' shared service.
     *
     * @return \Symfony\Component\Messenger\Transport\TransportInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['messenger.transport_factory'] ?? $container->load('getMessenger_TransportFactoryService'));

        if (isset($container->privates['messenger.transport.failed'])) {
            return $container->privates['messenger.transport.failed'];
        }

        return $container->privates['messenger.transport.failed'] = $a->createTransport($container->getEnv('messenger-nullable:MAUTIC_MESSENGER_DSN_FAILED'), ['transport_name' => 'failed'], ($container->privates['messenger.transport.native_php_serializer'] ??= new \Symfony\Component\Messenger\Transport\Serialization\PhpSerializer()));
    }
}
