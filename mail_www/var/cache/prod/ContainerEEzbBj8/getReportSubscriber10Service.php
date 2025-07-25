<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReportSubscriber10Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PageBundle\EventListener\ReportSubscriber' shared autowired service.
     *
     * @return \Mautic\PageBundle\EventListener\ReportSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\PageBundle\\EventListener\\ReportSubscriber'] = new \Mautic\PageBundle\EventListener\ReportSubscriber(($container->services['Mautic\\LeadBundle\\Model\\CompanyReportData'] ?? $container->load('getCompanyReportDataService')), ($container->services['Mautic\\PageBundle\\Entity\\HitRepository'] ?? $container->load('getHitRepositoryService')), ($container->services['translator'] ?? self::getTranslator2Service($container)));
    }
}
