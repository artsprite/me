<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCompanyControllerService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Controller\CompanyController' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Controller\CompanyController
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack());

        $container->services['Mautic\\LeadBundle\\Controller\\CompanyController'] = $instance = new \Mautic\LeadBundle\Controller\CompanyController(($container->privates['form.factory'] ?? self::getForm_FactoryService($container)), ($container->services['mautic.helper.form.field_helper'] ?? self::getMautic_Helper_Form_FieldHelperService($container)), ($container->services['doctrine'] ?? self::getDoctrineService($container)), ($container->services['Mautic\\CoreBundle\\Factory\\ModelFactory'] ?? self::getModelFactoryService($container)), ($container->services['mautic.helper.user'] ?? self::getMautic_Helper_UserService($container)), ($container->services['mautic.helper.core_parameters'] ??= new \Mautic\CoreBundle\Helper\CoreParametersHelper($container)), ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container)), ($container->services['Mautic\\CoreBundle\\Translation\\Translator'] ?? self::getTranslatorService($container)), ($container->services['mautic.core.service.flashbag'] ?? self::getMautic_Core_Service_FlashbagService($container)), $a, ($container->services['mautic.security'] ?? self::getMautic_SecurityService($container)));

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? self::get_ServiceLocator_O2p6Lk7Service($container))->withContext('Mautic\\LeadBundle\\Controller\\CompanyController', $container));
        $instance->setRequestStackLeadDetailsTrait($a);

        return $instance;
    }
}
