<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Report_Model_SchedulerTemplateFactoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.report.model.scheduler_template_factory' shared service.
     *
     * @return \Mautic\ReportBundle\Scheduler\Factory\SchedulerTemplateFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.report.model.scheduler_template_factory'] = new \Mautic\ReportBundle\Scheduler\Factory\SchedulerTemplateFactory();
    }
}
