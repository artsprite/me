<?php

namespace Symfony\Config\LightSamlSymfonyBridge\Own;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class CredentialsConfig 
{
    private $certificate;
    private $key;
    private $password;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function certificate($value): static
    {
        $this->_usedProperties['certificate'] = true;
        $this->certificate = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function key($value): static
    {
        $this->_usedProperties['key'] = true;
        $this->key = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function password($value): static
    {
        $this->_usedProperties['password'] = true;
        $this->password = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('certificate', $value)) {
            $this->_usedProperties['certificate'] = true;
            $this->certificate = $value['certificate'];
            unset($value['certificate']);
        }

        if (array_key_exists('key', $value)) {
            $this->_usedProperties['key'] = true;
            $this->key = $value['key'];
            unset($value['key']);
        }

        if (array_key_exists('password', $value)) {
            $this->_usedProperties['password'] = true;
            $this->password = $value['password'];
            unset($value['password']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['certificate'])) {
            $output['certificate'] = $this->certificate;
        }
        if (isset($this->_usedProperties['key'])) {
            $output['key'] = $this->key;
        }
        if (isset($this->_usedProperties['password'])) {
            $output['password'] = $this->password;
        }

        return $output;
    }

}
