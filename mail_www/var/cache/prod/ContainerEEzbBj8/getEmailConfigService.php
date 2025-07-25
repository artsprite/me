<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEmailConfigService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\EmailBundle\Helper\EmailConfig' shared autowired service.
     *
     * @return \Mautic\EmailBundle\Helper\EmailConfig
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\EmailBundle\\Helper\\EmailConfig'] = new \Mautic\EmailBundle\Helper\EmailConfig(($container->services['mautic.helper.core_parameters'] ??= new \Mautic\CoreBundle\Helper\CoreParametersHelper($container)));
    }
}
