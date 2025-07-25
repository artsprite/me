<?php

namespace ContainerEEzbBj8;

class EntityManagerGhost5d4c4f5 extends \Doctrine\ORM\EntityManager implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'cache' => [parent::class, 'cache', null],
        "\0".parent::class."\0".'closed' => [parent::class, 'closed', null],
        "\0".parent::class."\0".'config' => [parent::class, 'config', null],
        "\0".parent::class."\0".'conn' => [parent::class, 'conn', null],
        "\0".parent::class."\0".'eventManager' => [parent::class, 'eventManager', null],
        "\0".parent::class."\0".'expressionBuilder' => [parent::class, 'expressionBuilder', null],
        "\0".parent::class."\0".'filterCollection' => [parent::class, 'filterCollection', null],
        "\0".parent::class."\0".'metadataFactory' => [parent::class, 'metadataFactory', null],
        "\0".parent::class."\0".'proxyFactory' => [parent::class, 'proxyFactory', null],
        "\0".parent::class."\0".'repositoryFactory' => [parent::class, 'repositoryFactory', null],
        "\0".parent::class."\0".'unitOfWork' => [parent::class, 'unitOfWork', null],
        'cache' => [parent::class, 'cache', null],
        'closed' => [parent::class, 'closed', null],
        'config' => [parent::class, 'config', null],
        'conn' => [parent::class, 'conn', null],
        'eventManager' => [parent::class, 'eventManager', null],
        'expressionBuilder' => [parent::class, 'expressionBuilder', null],
        'filterCollection' => [parent::class, 'filterCollection', null],
        'metadataFactory' => [parent::class, 'metadataFactory', null],
        'proxyFactory' => [parent::class, 'proxyFactory', null],
        'repositoryFactory' => [parent::class, 'repositoryFactory', null],
        'unitOfWork' => [parent::class, 'unitOfWork', null],
    ];
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('EntityManagerGhost5d4c4f5', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManagerGhost5d4c4f5', 'EntityManagerGhost5d4c4f5', false);
}
