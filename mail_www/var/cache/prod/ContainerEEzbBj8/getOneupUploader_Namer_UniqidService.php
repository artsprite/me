<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOneupUploader_Namer_UniqidService extends AppKernelProdContainer
{
    /*
     * Gets the public 'oneup_uploader.namer.uniqid' shared service.
     *
     * @return \Oneup\UploaderBundle\Uploader\Naming\UniqidNamer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['oneup_uploader.namer.uniqid'] = new \Oneup\UploaderBundle\Uploader\Naming\UniqidNamer();
    }
}
