<?php

namespace Symfony\Config\OneupUploader;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class OrphanageConfig 
{
    private $maxage;
    private $directory;
    private $_usedProperties = [];

    /**
     * @default 604800
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function maxage($value): static
    {
        $this->_usedProperties['maxage'] = true;
        $this->maxage = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function directory($value): static
    {
        $this->_usedProperties['directory'] = true;
        $this->directory = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('maxage', $value)) {
            $this->_usedProperties['maxage'] = true;
            $this->maxage = $value['maxage'];
            unset($value['maxage']);
        }

        if (array_key_exists('directory', $value)) {
            $this->_usedProperties['directory'] = true;
            $this->directory = $value['directory'];
            unset($value['directory']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['maxage'])) {
            $output['maxage'] = $this->maxage;
        }
        if (isset($this->_usedProperties['directory'])) {
            $output['directory'] = $this->directory;
        }

        return $output;
    }

}
