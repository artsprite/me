<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReportFiltersTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ReportBundle\Form\Type\ReportFiltersType' shared autowired service.
     *
     * @return \Mautic\ReportBundle\Form\Type\ReportFiltersType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\ReportBundle\\Form\\Type\\ReportFiltersType'] = new \Mautic\ReportBundle\Form\Type\ReportFiltersType();
    }
}
