<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSegmentReportSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\EventListener\SegmentReportSubscriber' shared autowired service.
     *
     * @return \Mautic\LeadBundle\EventListener\SegmentReportSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\LeadBundle\\EventListener\\SegmentReportSubscriber'] = new \Mautic\LeadBundle\EventListener\SegmentReportSubscriber(($container->services['mautic.lead.reportbundle.fields_builder'] ?? $container->load('getMautic_Lead_Reportbundle_FieldsBuilderService')));
    }
}
