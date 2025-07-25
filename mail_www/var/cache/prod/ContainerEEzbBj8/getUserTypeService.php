<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\UserBundle\Form\Type\UserType' shared autowired service.
     *
     * @return \Mautic\UserBundle\Form\Type\UserType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\UserBundle\\Model\\UserModel'] ?? self::getUserModelService($container));

        if (isset($container->services['Mautic\\UserBundle\\Form\\Type\\UserType'])) {
            return $container->services['Mautic\\UserBundle\\Form\\Type\\UserType'];
        }

        return $container->services['Mautic\\UserBundle\\Form\\Type\\UserType'] = new \Mautic\UserBundle\Form\Type\UserType(($container->services['translator'] ?? self::getTranslator2Service($container)), $a, ($container->services['Mautic\\CoreBundle\\Helper\\LanguageHelper'] ?? $container->load('getLanguageHelperService')));
    }
}
