<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLeadCategoryTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Form\Type\LeadCategoryType' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Form\Type\LeadCategoryType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\CategoryBundle\\Model\\CategoryModel'] ?? self::getCategoryModelService($container));

        if (isset($container->services['Mautic\\LeadBundle\\Form\\Type\\LeadCategoryType'])) {
            return $container->services['Mautic\\LeadBundle\\Form\\Type\\LeadCategoryType'];
        }

        return $container->services['Mautic\\LeadBundle\\Form\\Type\\LeadCategoryType'] = new \Mautic\LeadBundle\Form\Type\LeadCategoryType($a);
    }
}
