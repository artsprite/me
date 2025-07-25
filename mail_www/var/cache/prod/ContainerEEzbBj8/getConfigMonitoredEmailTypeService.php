<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConfigMonitoredEmailTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\EmailBundle\Form\Type\ConfigMonitoredEmailType' shared autowired service.
     *
     * @return \Mautic\EmailBundle\Form\Type\ConfigMonitoredEmailType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->services['Mautic\\EmailBundle\\Form\\Type\\ConfigMonitoredEmailType'])) {
            return $container->services['Mautic\\EmailBundle\\Form\\Type\\ConfigMonitoredEmailType'];
        }

        return $container->services['Mautic\\EmailBundle\\Form\\Type\\ConfigMonitoredEmailType'] = new \Mautic\EmailBundle\Form\Type\ConfigMonitoredEmailType($a);
    }
}
