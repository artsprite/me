<?php

namespace Proxies\__CG__\MauticPlugin\MauticFocusBundle\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Focus extends \MauticPlugin\MauticFocusBundle\Entity\Focus implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'MauticPlugin\\MauticFocusBundle\\Entity\\Focus' . "\0" . 'id', '' . "\0" . 'MauticPlugin\\MauticFocusBundle\\Entity\\Focus' . "\0" . 'description', '' . "\0" . 'MauticPlugin\\MauticFocusBundle\\Entity\\Focus' . "\0" . 'editor', '' . "\0" . 'MauticPlugin\\MauticFocusBundle\\Entity\\Focus' . "\0" . 'html', '' . "\0" . 'MauticPlugin\\MauticFocusBundle\\Entity\\Focus' . "\0" . 'htmlMode', '' . "\0" . 'MauticPlugin\\MauticFocusBundle\\Entity\\Focus' . "\0" . 'name', '' . "\0" . 'MauticPlugin\\MauticFocusBundle\\Entity\\Focus' . "\0" . 'category', '' . "\0" . 'MauticPlugin\\MauticFocusBundle\\Entity\\Focus' . "\0" . 'type', '' . "\0" . 'MauticPlugin\\MauticFocusBundle\\Entity\\Focus' . "\0" . 'website', '' . "\0" . 'MauticPlugin\\MauticFocusBundle\\Entity\\Focus' . "\0" . 'style', '' . "\0" . 'MauticPlugin\\MauticFocusBundle\\Entity\\Focus' . "\0" . 'publishUp', '' . "\0" . 'MauticPlugin\\MauticFocusBundle\\Entity\\Focus' . "\0" . 'publishDown', '' . "\0" . 'MauticPlugin\\MauticFocusBundle\\Entity\\Focus' . "\0" . 'properties', '' . "\0" . 'MauticPlugin\\MauticFocusBundle\\Entity\\Focus' . "\0" . 'utmTags', '' . "\0" . 'MauticPlugin\\MauticFocusBundle\\Entity\\Focus' . "\0" . 'form', '' . "\0" . 'MauticPlugin\\MauticFocusBundle\\Entity\\Focus' . "\0" . 'cache', 'changes', 'new', 'deletedId', 'pastChanges', '' . "\0" . 'MauticPlugin\\MauticFocusBundle\\Entity\\Focus' . "\0" . 'uuid'];
        }

        return ['__isInitialized__', '' . "\0" . 'MauticPlugin\\MauticFocusBundle\\Entity\\Focus' . "\0" . 'id', '' . "\0" . 'MauticPlugin\\MauticFocusBundle\\Entity\\Focus' . "\0" . 'description', '' . "\0" . 'MauticPlugin\\MauticFocusBundle\\Entity\\Focus' . "\0" . 'editor', '' . "\0" . 'MauticPlugin\\MauticFocusBundle\\Entity\\Focus' . "\0" . 'html', '' . "\0" . 'MauticPlugin\\MauticFocusBundle\\Entity\\Focus' . "\0" . 'htmlMode', '' . "\0" . 'MauticPlugin\\MauticFocusBundle\\Entity\\Focus' . "\0" . 'name', '' . "\0" . 'MauticPlugin\\MauticFocusBundle\\Entity\\Focus' . "\0" . 'category', '' . "\0" . 'MauticPlugin\\MauticFocusBundle\\Entity\\Focus' . "\0" . 'type', '' . "\0" . 'MauticPlugin\\MauticFocusBundle\\Entity\\Focus' . "\0" . 'website', '' . "\0" . 'MauticPlugin\\MauticFocusBundle\\Entity\\Focus' . "\0" . 'style', '' . "\0" . 'MauticPlugin\\MauticFocusBundle\\Entity\\Focus' . "\0" . 'publishUp', '' . "\0" . 'MauticPlugin\\MauticFocusBundle\\Entity\\Focus' . "\0" . 'publishDown', '' . "\0" . 'MauticPlugin\\MauticFocusBundle\\Entity\\Focus' . "\0" . 'properties', '' . "\0" . 'MauticPlugin\\MauticFocusBundle\\Entity\\Focus' . "\0" . 'utmTags', '' . "\0" . 'MauticPlugin\\MauticFocusBundle\\Entity\\Focus' . "\0" . 'form', '' . "\0" . 'MauticPlugin\\MauticFocusBundle\\Entity\\Focus' . "\0" . 'cache', 'changes', 'new', 'deletedId', 'pastChanges', '' . "\0" . 'MauticPlugin\\MauticFocusBundle\\Entity\\Focus' . "\0" . 'uuid'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Focus $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * {@inheritDoc}
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);

        parent::__clone();
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(?\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(?\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function toArray(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toArray', []);

        return parent::toArray();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getEditor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEditor', []);

        return parent::getEditor();
    }

    /**
     * {@inheritDoc}
     */
    public function setEditor($editor)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEditor', [$editor]);

        return parent::setEditor($editor);
    }

    /**
     * {@inheritDoc}
     */
    public function getHtml()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHtml', []);

        return parent::getHtml();
    }

    /**
     * {@inheritDoc}
     */
    public function setHtml($html)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHtml', [$html]);

        return parent::setHtml($html);
    }

    /**
     * {@inheritDoc}
     */
    public function getHtmlMode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHtmlMode', []);

        return parent::getHtmlMode();
    }

    /**
     * {@inheritDoc}
     */
    public function setHtmlMode($htmlMode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHtmlMode', [$htmlMode]);

        return parent::setHtmlMode($htmlMode);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategory', []);

        return parent::getCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategory($category)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategory', [$category]);

        return parent::setCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublishUp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublishUp', []);

        return parent::getPublishUp();
    }

    /**
     * {@inheritDoc}
     */
    public function setPublishUp($publishUp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublishUp', [$publishUp]);

        return parent::setPublishUp($publishUp);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublishDown()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublishDown', []);

        return parent::getPublishDown();
    }

    /**
     * {@inheritDoc}
     */
    public function setPublishDown($publishDown)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublishDown', [$publishDown]);

        return parent::setPublishDown($publishDown);
    }

    /**
     * {@inheritDoc}
     */
    public function getProperties()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProperties', []);

        return parent::getProperties();
    }

    /**
     * {@inheritDoc}
     */
    public function setProperties($properties)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProperties', [$properties]);

        return parent::setProperties($properties);
    }

    /**
     * {@inheritDoc}
     */
    public function getUtmTags()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUtmTags', []);

        return parent::getUtmTags();
    }

    /**
     * {@inheritDoc}
     */
    public function setUtmTags($utmTags)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUtmTags', [$utmTags]);

        return parent::setUtmTags($utmTags);
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getStyle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStyle', []);

        return parent::getStyle();
    }

    /**
     * {@inheritDoc}
     */
    public function setStyle($style)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStyle', [$style]);

        return parent::setStyle($style);
    }

    /**
     * {@inheritDoc}
     */
    public function getWebsite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWebsite', []);

        return parent::getWebsite();
    }

    /**
     * {@inheritDoc}
     */
    public function setWebsite($website)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWebsite', [$website]);

        return parent::setWebsite($website);
    }

    /**
     * {@inheritDoc}
     */
    public function getForm()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getForm', []);

        return parent::getForm();
    }

    /**
     * {@inheritDoc}
     */
    public function setForm($form)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setForm', [$form]);

        return parent::setForm($form);
    }

    /**
     * {@inheritDoc}
     */
    public function getCache()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCache', []);

        return parent::getCache();
    }

    /**
     * {@inheritDoc}
     */
    public function setCache($cache)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCache', [$cache]);

        return parent::setCache($cache);
    }

    /**
     * {@inheritDoc}
     */
    public function isPublished($checkPublishStatus = true, $checkCategoryStatus = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPublished', [$checkPublishStatus, $checkCategoryStatus]);

        return parent::isPublished($checkPublishStatus, $checkCategoryStatus);
    }

    /**
     * {@inheritDoc}
     */
    public function setDateAdded($dateAdded)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateAdded', [$dateAdded]);

        return parent::setDateAdded($dateAdded);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateAdded()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateAdded', []);

        return parent::getDateAdded();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateModified($dateModified)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateModified', [$dateModified]);

        return parent::setDateModified($dateModified);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateModified()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateModified', []);

        return parent::getDateModified();
    }

    /**
     * {@inheritDoc}
     */
    public function setCheckedOut($checkedOut)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCheckedOut', [$checkedOut]);

        return parent::setCheckedOut($checkedOut);
    }

    /**
     * {@inheritDoc}
     */
    public function getCheckedOut()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCheckedOut', []);

        return parent::getCheckedOut();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedBy($createdBy = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedBy', [$createdBy]);

        return parent::setCreatedBy($createdBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedBy', []);

        return parent::getCreatedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setModifiedBy($modifiedBy = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModifiedBy', [$modifiedBy]);

        return parent::setModifiedBy($modifiedBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getModifiedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModifiedBy', []);

        return parent::getModifiedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setCheckedOutBy($checkedOutBy = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCheckedOutBy', [$checkedOutBy]);

        return parent::setCheckedOutBy($checkedOutBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getCheckedOutBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCheckedOutBy', []);

        return parent::getCheckedOutBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsPublished($isPublished)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsPublished', [$isPublished]);

        return parent::setIsPublished($isPublished);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsPublished()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsPublished', []);

        return parent::getIsPublished();
    }

    /**
     * {@inheritDoc}
     */
    public function getPublishStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublishStatus', []);

        return parent::getPublishStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function isNew()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isNew', []);

        return parent::isNew();
    }

    /**
     * {@inheritDoc}
     */
    public function setNew(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNew', []);

        parent::setNew();
    }

    /**
     * {@inheritDoc}
     */
    public function getCheckedOutByUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCheckedOutByUser', []);

        return parent::getCheckedOutByUser();
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedByUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedByUser', []);

        return parent::getCreatedByUser();
    }

    /**
     * {@inheritDoc}
     */
    public function getModifiedByUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModifiedByUser', []);

        return parent::getModifiedByUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedByUser($createdByUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedByUser', [$createdByUser]);

        return parent::setCreatedByUser($createdByUser);
    }

    /**
     * {@inheritDoc}
     */
    public function setModifiedByUser($modifiedByUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModifiedByUser', [$modifiedByUser]);

        return parent::setModifiedByUser($modifiedByUser);
    }

    /**
     * {@inheritDoc}
     */
    public function setCheckedOutByUser($checkedOutByUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCheckedOutByUser', [$checkedOutByUser]);

        return parent::setCheckedOutByUser($checkedOutByUser);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($name, $arguments)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__call', [$name, $arguments]);

        return parent::__call($name, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getChanges($includePast = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChanges', [$includePast]);

        return parent::getChanges($includePast);
    }

    /**
     * {@inheritDoc}
     */
    public function resetChanges(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'resetChanges', []);

        parent::resetChanges();
    }

    /**
     * {@inheritDoc}
     */
    public function setChanges(array $changes): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChanges', [$changes]);

        parent::setChanges($changes);
    }

    /**
     * {@inheritDoc}
     */
    public function getUuid(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUuid', []);

        return parent::getUuid();
    }

    /**
     * {@inheritDoc}
     */
    public function setUuid(?string $uuid): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUuid', [$uuid]);

        parent::setUuid($uuid);
    }

}
