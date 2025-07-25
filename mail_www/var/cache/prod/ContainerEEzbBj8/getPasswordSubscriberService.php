<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPasswordSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\UserBundle\EventListener\PasswordSubscriber' shared autowired service.
     *
     * @return \Mautic\UserBundle\EventListener\PasswordSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\UserBundle\\Model\\PasswordStrengthEstimatorModel'] ?? $container->load('getPasswordStrengthEstimatorModelService'));

        if (isset($container->services['Mautic\\UserBundle\\EventListener\\PasswordSubscriber'])) {
            return $container->services['Mautic\\UserBundle\\EventListener\\PasswordSubscriber'];
        }

        return $container->services['Mautic\\UserBundle\\EventListener\\PasswordSubscriber'] = new \Mautic\UserBundle\EventListener\PasswordSubscriber($a);
    }
}
