<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPointActionHelper3Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PageBundle\Helper\PointActionHelper' shared autowired service.
     *
     * @return \Mautic\PageBundle\Helper\PointActionHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container));

        if (isset($container->services['Mautic\\PageBundle\\Helper\\PointActionHelper'])) {
            return $container->services['Mautic\\PageBundle\\Helper\\PointActionHelper'];
        }

        return $container->services['Mautic\\PageBundle\\Helper\\PointActionHelper'] = new \Mautic\PageBundle\Helper\PointActionHelper($a);
    }
}
