<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Lead_Query_Builder_Special_LeadlistService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.lead.query.builder.special.leadlist' shared service.
     *
     * @return \Mautic\LeadBundle\Segment\Query\Filter\SegmentReferenceFilterQueryBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.lead.query.builder.special.leadlist'] = new \Mautic\LeadBundle\Segment\Query\Filter\SegmentReferenceFilterQueryBuilder(($container->services['mautic.lead.model.random_parameter_name'] ??= new \Mautic\LeadBundle\Segment\RandomParameterName()), ($container->services['mautic.lead.repository.lead_segment_query_builder'] ?? self::getMautic_Lead_Repository_LeadSegmentQueryBuilderService($container)), ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)), ($container->services['mautic.lead.model.lead_segment_filter_factory'] ?? self::getMautic_Lead_Model_LeadSegmentFilterFactoryService($container)), ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container)));
    }
}
