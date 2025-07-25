<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBuilderSubscriber2Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\EmailBundle\EventListener\BuilderSubscriber' shared autowired service.
     *
     * @return \Mautic\EmailBundle\EventListener\BuilderSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\EmailBundle\\Model\\EmailModel'] ?? self::getEmailModelService($container));

        if (isset($container->services['Mautic\\EmailBundle\\EventListener\\BuilderSubscriber'])) {
            return $container->services['Mautic\\EmailBundle\\EventListener\\BuilderSubscriber'];
        }
        $b = ($container->services['Mautic\\PageBundle\\Model\\TrackableModel'] ?? self::getTrackableModelService($container));

        if (isset($container->services['Mautic\\EmailBundle\\EventListener\\BuilderSubscriber'])) {
            return $container->services['Mautic\\EmailBundle\\EventListener\\BuilderSubscriber'];
        }
        $c = ($container->services['Mautic\\PageBundle\\Model\\RedirectModel'] ?? self::getRedirectModelService($container));

        if (isset($container->services['Mautic\\EmailBundle\\EventListener\\BuilderSubscriber'])) {
            return $container->services['Mautic\\EmailBundle\\EventListener\\BuilderSubscriber'];
        }

        return $container->services['Mautic\\EmailBundle\\EventListener\\BuilderSubscriber'] = new \Mautic\EmailBundle\EventListener\BuilderSubscriber(($container->services['mautic.helper.core_parameters'] ??= new \Mautic\CoreBundle\Helper\CoreParametersHelper($container)), $a, $b, $c, ($container->services['translator'] ?? self::getTranslator2Service($container)), ($container->services['Mautic\\EmailBundle\\Helper\\MailHashHelper'] ?? self::getMailHashHelperService($container)));
    }
}
