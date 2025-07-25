<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReportCleanupService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ReportBundle\Model\ReportCleanup' shared autowired service.
     *
     * @return \Mautic\ReportBundle\Model\ReportCleanup
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\ReportBundle\\Model\\ReportCleanup'] = new \Mautic\ReportBundle\Model\ReportCleanup(($container->services['mautic.report.model.file_handler'] ?? $container->load('getMautic_Report_Model_FileHandlerService')));
    }
}
