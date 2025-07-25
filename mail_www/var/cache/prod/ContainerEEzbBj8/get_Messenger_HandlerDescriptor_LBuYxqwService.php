<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_LBuYxqwService extends AppKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.LBuYxqw' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\PageBundle\\Model\\PageModel'] ?? self::getPageModelService($container));

        if (isset($container->privates['.messenger.handler_descriptor.LBuYxqw'])) {
            return $container->privates['.messenger.handler_descriptor.LBuYxqw'];
        }

        return $container->privates['.messenger.handler_descriptor.LBuYxqw'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(new \Mautic\MessengerBundle\MessageHandler\PageHitNotificationHandler(($container->services['Mautic\\PageBundle\\Entity\\PageRepository'] ?? $container->load('getPageRepositoryService')), ($container->services['Mautic\\PageBundle\\Entity\\HitRepository'] ?? $container->load('getHitRepositoryService')), ($container->services['Mautic\\LeadBundle\\Entity\\LeadRepository'] ?? self::getLeadRepository2Service($container)), ($container->privates['monolog.logger'] ?? self::getMonolog_LoggerService($container)), ($container->services['Mautic\\PageBundle\\Entity\\RedirectRepository'] ?? self::getRedirectRepositoryService($container)), $a), []);
    }
}
