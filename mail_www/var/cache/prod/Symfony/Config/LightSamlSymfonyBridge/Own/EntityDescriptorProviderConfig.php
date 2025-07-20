<?php

namespace Symfony\Config\LightSamlSymfonyBridge\Own;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class EntityDescriptorProviderConfig 
{
    private $id;
    private $filename;
    private $entityId;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function id($value): static
    {
        $this->_usedProperties['id'] = true;
        $this->id = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function filename($value): static
    {
        $this->_usedProperties['filename'] = true;
        $this->filename = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function entityId($value): static
    {
        $this->_usedProperties['entityId'] = true;
        $this->entityId = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('id', $value)) {
            $this->_usedProperties['id'] = true;
            $this->id = $value['id'];
            unset($value['id']);
        }

        if (array_key_exists('filename', $value)) {
            $this->_usedProperties['filename'] = true;
            $this->filename = $value['filename'];
            unset($value['filename']);
        }

        if (array_key_exists('entity_id', $value)) {
            $this->_usedProperties['entityId'] = true;
            $this->entityId = $value['entity_id'];
            unset($value['entity_id']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['id'])) {
            $output['id'] = $this->id;
        }
        if (isset($this->_usedProperties['filename'])) {
            $output['filename'] = $this->filename;
        }
        if (isset($this->_usedProperties['entityId'])) {
            $output['entity_id'] = $this->entityId;
        }

        return $output;
    }

}
