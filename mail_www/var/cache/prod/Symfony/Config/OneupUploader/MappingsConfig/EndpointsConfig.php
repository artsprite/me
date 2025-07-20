<?php

namespace Symfony\Config\OneupUploader\MappingsConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class EndpointsConfig 
{
    private $upload;
    private $progress;
    private $cancel;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function upload($value): static
    {
        $this->_usedProperties['upload'] = true;
        $this->upload = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function progress($value): static
    {
        $this->_usedProperties['progress'] = true;
        $this->progress = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cancel($value): static
    {
        $this->_usedProperties['cancel'] = true;
        $this->cancel = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('upload', $value)) {
            $this->_usedProperties['upload'] = true;
            $this->upload = $value['upload'];
            unset($value['upload']);
        }

        if (array_key_exists('progress', $value)) {
            $this->_usedProperties['progress'] = true;
            $this->progress = $value['progress'];
            unset($value['progress']);
        }

        if (array_key_exists('cancel', $value)) {
            $this->_usedProperties['cancel'] = true;
            $this->cancel = $value['cancel'];
            unset($value['cancel']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['upload'])) {
            $output['upload'] = $this->upload;
        }
        if (isset($this->_usedProperties['progress'])) {
            $output['progress'] = $this->progress;
        }
        if (isset($this->_usedProperties['cancel'])) {
            $output['cancel'] = $this->cancel;
        }

        return $output;
    }

}
