<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChannelActionModelService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ChannelBundle\Model\ChannelActionModel' shared autowired service.
     *
     * @return \Mautic\ChannelBundle\Model\ChannelActionModel
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\ChannelBundle\\Model\\ChannelActionModel'] = new \Mautic\ChannelBundle\Model\ChannelActionModel(($container->services['Mautic\\LeadBundle\\Model\\LeadModel'] ?? self::getLeadModelService($container)), ($container->services['Mautic\\LeadBundle\\Model\\DoNotContact'] ?? self::getDoNotContactService($container)), ($container->services['translator'] ?? self::getTranslator2Service($container)));
    }
}
