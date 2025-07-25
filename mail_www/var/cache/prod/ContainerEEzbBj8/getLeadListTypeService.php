<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLeadListTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Form\Type\LeadListType' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Form\Type\LeadListType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\LeadBundle\\Model\\ListModel'] ?? self::getListModelService($container));

        if (isset($container->services['Mautic\\LeadBundle\\Form\\Type\\LeadListType'])) {
            return $container->services['Mautic\\LeadBundle\\Form\\Type\\LeadListType'];
        }

        return $container->services['Mautic\\LeadBundle\\Form\\Type\\LeadListType'] = new \Mautic\LeadBundle\Form\Type\LeadListType($a);
    }
}
