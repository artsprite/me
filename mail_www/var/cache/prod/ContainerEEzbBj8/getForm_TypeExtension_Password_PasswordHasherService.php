<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_TypeExtension_Password_PasswordHasherService extends AppKernelProdContainer
{
    /*
     * Gets the private 'form.type_extension.password.password_hasher' shared service.
     *
     * @return \Symfony\Component\Form\Extension\PasswordHasher\Type\PasswordTypePasswordHasherExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['form.type_extension.password.password_hasher'] = new \Symfony\Component\Form\Extension\PasswordHasher\Type\PasswordTypePasswordHasherExtension(($container->privates['form.listener.password_hasher'] ?? $container->load('getForm_Listener_PasswordHasherService')));
    }
}
