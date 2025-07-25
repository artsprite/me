<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosRest_ViewHandlerService extends AppKernelProdContainer
{
    /*
     * Gets the public 'fos_rest.view_handler' shared service.
     *
     * @return \FOS\RestBundle\View\ViewHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['router'] ?? self::getRouterService($container));

        if (isset($container->services['fos_rest.view_handler'])) {
            return $container->services['fos_rest.view_handler'];
        }

        return $container->services['fos_rest.view_handler'] = \FOS\RestBundle\View\ViewHandler::create($a, new \FOS\RestBundle\Serializer\JMSSerializerAdapter(($container->services['jms_serializer'] ?? $container->load('getJmsSerializerService')), ($container->services['jms_serializer.serialization_context_factory'] ??= new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory()), ($container->services['jms_serializer.deserialization_context_factory'] ??= new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory())), ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), ['json' => false], 400, 204, false, ['serializeNullStrategy' => false]);
    }
}
