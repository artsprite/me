<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Token_PermissionsService extends AppKernelProdContainer
{
    /*
     * Gets the public 'security.token.permissions' shared autowired service.
     *
     * @return \Mautic\UserBundle\Security\Authentication\Token\Permissions\TokenPermissions
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['security.token.permissions'] = new \Mautic\UserBundle\Security\Authentication\Token\Permissions\TokenPermissions(($container->privates['security.token_storage'] ?? self::getSecurity_TokenStorageService($container)), ($container->services['Mautic\\UserBundle\\Entity\\PermissionRepository'] ?? self::getPermissionRepositoryService($container)), ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)));
    }
}
