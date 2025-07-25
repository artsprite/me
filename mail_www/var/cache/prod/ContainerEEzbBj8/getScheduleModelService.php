<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getScheduleModelService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ReportBundle\Model\ScheduleModel' shared autowired service.
     *
     * @return \Mautic\ReportBundle\Model\ScheduleModel
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\ReportBundle\\Model\\ScheduleModel'] = new \Mautic\ReportBundle\Model\ScheduleModel(($container->services['mautic.permission.manager'] ?? self::getMautic_Permission_ManagerService($container)), ($container->services['mautic.report.model.scheduler_planner'] ?? $container->load('getMautic_Report_Model_SchedulerPlannerService')));
    }
}
