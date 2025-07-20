<?php

namespace Symfony\Config\LightSamlSymfonyBridge;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class StoreConfig 
{
    private $request;
    private $idState;
    private $ssoState;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function request($value): static
    {
        $this->_usedProperties['request'] = true;
        $this->request = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function idState($value): static
    {
        $this->_usedProperties['idState'] = true;
        $this->idState = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function ssoState($value): static
    {
        $this->_usedProperties['ssoState'] = true;
        $this->ssoState = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('request', $value)) {
            $this->_usedProperties['request'] = true;
            $this->request = $value['request'];
            unset($value['request']);
        }

        if (array_key_exists('id_state', $value)) {
            $this->_usedProperties['idState'] = true;
            $this->idState = $value['id_state'];
            unset($value['id_state']);
        }

        if (array_key_exists('sso_state', $value)) {
            $this->_usedProperties['ssoState'] = true;
            $this->ssoState = $value['sso_state'];
            unset($value['sso_state']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['request'])) {
            $output['request'] = $this->request;
        }
        if (isset($this->_usedProperties['idState'])) {
            $output['id_state'] = $this->idState;
        }
        if (isset($this->_usedProperties['ssoState'])) {
            $output['sso_state'] = $this->ssoState;
        }

        return $output;
    }

}
