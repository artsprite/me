<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSubmissionRepositoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\FormBundle\Entity\SubmissionRepository' shared autowired service.
     *
     * @return \Mautic\FormBundle\Entity\SubmissionRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\FormBundle\\Entity\\SubmissionRepository'] = new \Mautic\FormBundle\Entity\SubmissionRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
