<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStageActionTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\StageBundle\Form\Type\StageActionType' shared autowired service.
     *
     * @return \Mautic\StageBundle\Form\Type\StageActionType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\StageBundle\\Form\\Type\\StageActionType'] = new \Mautic\StageBundle\Form\Type\StageActionType();
    }
}
