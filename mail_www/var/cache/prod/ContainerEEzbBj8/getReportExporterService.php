<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReportExporterService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ReportBundle\Model\ReportExporter' shared autowired service.
     *
     * @return \Mautic\ReportBundle\Model\ReportExporter
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\ReportBundle\\Model\\ReportExporter'] = new \Mautic\ReportBundle\Model\ReportExporter(($container->services['Mautic\\ReportBundle\\Model\\ScheduleModel'] ?? $container->load('getScheduleModelService')), ($container->services['mautic.report.model.report_data_adapter'] ?? $container->load('getMautic_Report_Model_ReportDataAdapterService')), ($container->services['Mautic\\ReportBundle\\Model\\ReportExportOptions'] ?? $container->load('getReportExportOptionsService')), ($container->services['Mautic\\ReportBundle\\Model\\ReportFileWriter'] ?? $container->load('getReportFileWriterService')), ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container)));
    }
}
