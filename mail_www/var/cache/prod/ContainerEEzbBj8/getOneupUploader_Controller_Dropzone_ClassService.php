<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOneupUploader_Controller_Dropzone_ClassService extends AppKernelProdContainer
{
    /*
     * Gets the public 'oneup_uploader.controller.dropzone.class' shared service.
     *
     * @return \Mautic\AssetBundle\Controller\UploadController
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['oneup_uploader.controller.dropzone.class'] = new \Mautic\AssetBundle\Controller\UploadController();
    }
}
