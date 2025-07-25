<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCompanyTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Form\Type\CompanyType' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Form\Type\CompanyType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['router'] ?? self::getRouterService($container));

        if (isset($container->services['Mautic\\LeadBundle\\Form\\Type\\CompanyType'])) {
            return $container->services['Mautic\\LeadBundle\\Form\\Type\\CompanyType'];
        }

        return $container->services['Mautic\\LeadBundle\\Form\\Type\\CompanyType'] = new \Mautic\LeadBundle\Form\Type\CompanyType(($container->services['mautic.permission.manager'] ?? self::getMautic_Permission_ManagerService($container)), $a, ($container->services['translator'] ?? self::getTranslator2Service($container)));
    }
}
