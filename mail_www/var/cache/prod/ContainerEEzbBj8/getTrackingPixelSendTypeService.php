<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTrackingPixelSendTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PageBundle\Form\Type\TrackingPixelSendType' shared autowired service.
     *
     * @return \Mautic\PageBundle\Form\Type\TrackingPixelSendType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.page.helper.tracking'] ?? $container->load('getMautic_Page_Helper_TrackingService'));

        if (isset($container->services['Mautic\\PageBundle\\Form\\Type\\TrackingPixelSendType'])) {
            return $container->services['Mautic\\PageBundle\\Form\\Type\\TrackingPixelSendType'];
        }

        return $container->services['Mautic\\PageBundle\\Form\\Type\\TrackingPixelSendType'] = new \Mautic\PageBundle\Form\Type\TrackingPixelSendType($a);
    }
}
