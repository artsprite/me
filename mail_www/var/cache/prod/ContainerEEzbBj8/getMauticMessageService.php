<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMauticMessageService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\EmailBundle\Mailer\Message\MauticMessage' shared autowired service.
     *
     * @return \Mautic\EmailBundle\Mailer\Message\MauticMessage
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\EmailBundle\\Mailer\\Message\\MauticMessage'] = new \Mautic\EmailBundle\Mailer\Message\MauticMessage();
    }
}
