<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCampaignEventAssetDownloadTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\AssetBundle\Form\Type\CampaignEventAssetDownloadType' shared autowired service.
     *
     * @return \Mautic\AssetBundle\Form\Type\CampaignEventAssetDownloadType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\AssetBundle\\Form\\Type\\CampaignEventAssetDownloadType'] = new \Mautic\AssetBundle\Form\Type\CampaignEventAssetDownloadType();
    }
}
