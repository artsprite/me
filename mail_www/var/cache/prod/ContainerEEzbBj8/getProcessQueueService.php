<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProcessQueueService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Service\ProcessQueue' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Service\ProcessQueue
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\Service\\ProcessQueue'] = new \Mautic\CoreBundle\Service\ProcessQueue();
    }
}
