<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getListTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Form\Type\ListType' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Form\Type\ListType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\LeadBundle\\Model\\ListModel'] ?? self::getListModelService($container));

        if (isset($container->services['Mautic\\LeadBundle\\Form\\Type\\ListType'])) {
            return $container->services['Mautic\\LeadBundle\\Form\\Type\\ListType'];
        }

        return $container->services['Mautic\\LeadBundle\\Form\\Type\\ListType'] = new \Mautic\LeadBundle\Form\Type\ListType(($container->services['translator'] ?? self::getTranslator2Service($container)), $a);
    }
}
