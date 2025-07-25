<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOneupUploader_Command_ClearOrphansService extends AppKernelProdContainer
{
    /*
     * Gets the private 'oneup_uploader.command.clear_orphans' shared service.
     *
     * @return \Oneup\UploaderBundle\Command\ClearOrphansCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['oneup_uploader.command.clear_orphans'] = $instance = new \Oneup\UploaderBundle\Command\ClearOrphansCommand(($container->services['oneup_uploader.orphanage_manager'] ?? $container->load('getOneupUploader_OrphanageManagerService')));

        $instance->setName('oneup:uploader:clear-orphans');

        return $instance;
    }
}
