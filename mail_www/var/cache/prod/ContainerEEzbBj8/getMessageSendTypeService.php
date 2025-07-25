<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessageSendTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ChannelBundle\Form\Type\MessageSendType' shared autowired service.
     *
     * @return \Mautic\ChannelBundle\Form\Type\MessageSendType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['router'] ?? self::getRouterService($container));

        if (isset($container->services['Mautic\\ChannelBundle\\Form\\Type\\MessageSendType'])) {
            return $container->services['Mautic\\ChannelBundle\\Form\\Type\\MessageSendType'];
        }
        $b = ($container->services['Mautic\\ChannelBundle\\Model\\MessageModel'] ?? $container->load('getMessageModelService'));

        if (isset($container->services['Mautic\\ChannelBundle\\Form\\Type\\MessageSendType'])) {
            return $container->services['Mautic\\ChannelBundle\\Form\\Type\\MessageSendType'];
        }

        return $container->services['Mautic\\ChannelBundle\\Form\\Type\\MessageSendType'] = new \Mautic\ChannelBundle\Form\Type\MessageSendType($a, $b);
    }
}
