<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLeadNoteRepositoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Entity\LeadNoteRepository' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Entity\LeadNoteRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\LeadBundle\\Entity\\LeadNoteRepository'] = new \Mautic\LeadBundle\Entity\LeadNoteRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
