<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Core_Service_BulkNotificationService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.core.service.bulk_notification' shared service.
     *
     * @return \Mautic\CoreBundle\Service\BulkNotification
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.core.service.bulk_notification'] = new \Mautic\CoreBundle\Service\BulkNotification(($container->services['Mautic\\CoreBundle\\Model\\NotificationModel'] ?? self::getNotificationModelService($container)));
    }
}
