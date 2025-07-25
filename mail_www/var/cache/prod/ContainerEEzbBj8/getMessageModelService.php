<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessageModelService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ChannelBundle\Model\MessageModel' shared autowired service.
     *
     * @return \Mautic\ChannelBundle\Model\MessageModel
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.channel.helper.channel_list'] ?? self::getMautic_Channel_Helper_ChannelListService($container));

        if (isset($container->services['Mautic\\ChannelBundle\\Model\\MessageModel'])) {
            return $container->services['Mautic\\ChannelBundle\\Model\\MessageModel'];
        }
        $b = ($container->services['Mautic\\CampaignBundle\\Model\\CampaignModel'] ?? self::getCampaignModelService($container));

        if (isset($container->services['Mautic\\ChannelBundle\\Model\\MessageModel'])) {
            return $container->services['Mautic\\ChannelBundle\\Model\\MessageModel'];
        }
        $c = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->services['Mautic\\ChannelBundle\\Model\\MessageModel'])) {
            return $container->services['Mautic\\ChannelBundle\\Model\\MessageModel'];
        }
        $d = ($container->services['router'] ?? self::getRouterService($container));

        if (isset($container->services['Mautic\\ChannelBundle\\Model\\MessageModel'])) {
            return $container->services['Mautic\\ChannelBundle\\Model\\MessageModel'];
        }

        return $container->services['Mautic\\ChannelBundle\\Model\\MessageModel'] = new \Mautic\ChannelBundle\Model\MessageModel($a, $b, ($container->services['mautic.permission.manager'] ?? self::getMautic_Permission_ManagerService($container)), ($container->services['mautic.security'] ?? self::getMautic_SecurityService($container)), $c, $d, ($container->services['Mautic\\CoreBundle\\Translation\\Translator'] ?? self::getTranslatorService($container)), ($container->services['mautic.helper.user'] ?? self::getMautic_Helper_UserService($container)), ($container->services['monolog.logger.mautic'] ?? self::getMonolog_Logger_MauticService($container)), ($container->services['mautic.helper.core_parameters'] ??= new \Mautic\CoreBundle\Helper\CoreParametersHelper($container)));
    }
}
