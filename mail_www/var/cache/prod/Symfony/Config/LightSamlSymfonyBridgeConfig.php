<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'LightSamlSymfonyBridge'.\DIRECTORY_SEPARATOR.'OwnConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'LightSamlSymfonyBridge'.\DIRECTORY_SEPARATOR.'SystemConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'LightSamlSymfonyBridge'.\DIRECTORY_SEPARATOR.'StoreConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'LightSamlSymfonyBridge'.\DIRECTORY_SEPARATOR.'PartyConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class LightSamlSymfonyBridgeConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $own;
    private $system;
    private $store;
    private $party;
    private $_usedProperties = [];

    public function own(array $value = []): \Symfony\Config\LightSamlSymfonyBridge\OwnConfig
    {
        if (null === $this->own) {
            $this->_usedProperties['own'] = true;
            $this->own = new \Symfony\Config\LightSamlSymfonyBridge\OwnConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "own()" has already been initialized. You cannot pass values the second time you call own().');
        }

        return $this->own;
    }

    public function system(array $value = []): \Symfony\Config\LightSamlSymfonyBridge\SystemConfig
    {
        if (null === $this->system) {
            $this->_usedProperties['system'] = true;
            $this->system = new \Symfony\Config\LightSamlSymfonyBridge\SystemConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "system()" has already been initialized. You cannot pass values the second time you call system().');
        }

        return $this->system;
    }

    public function store(array $value = []): \Symfony\Config\LightSamlSymfonyBridge\StoreConfig
    {
        if (null === $this->store) {
            $this->_usedProperties['store'] = true;
            $this->store = new \Symfony\Config\LightSamlSymfonyBridge\StoreConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "store()" has already been initialized. You cannot pass values the second time you call store().');
        }

        return $this->store;
    }

    public function party(array $value = []): \Symfony\Config\LightSamlSymfonyBridge\PartyConfig
    {
        if (null === $this->party) {
            $this->_usedProperties['party'] = true;
            $this->party = new \Symfony\Config\LightSamlSymfonyBridge\PartyConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "party()" has already been initialized. You cannot pass values the second time you call party().');
        }

        return $this->party;
    }

    public function getExtensionAlias(): string
    {
        return 'light_saml_symfony_bridge';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('own', $value)) {
            $this->_usedProperties['own'] = true;
            $this->own = new \Symfony\Config\LightSamlSymfonyBridge\OwnConfig($value['own']);
            unset($value['own']);
        }

        if (array_key_exists('system', $value)) {
            $this->_usedProperties['system'] = true;
            $this->system = new \Symfony\Config\LightSamlSymfonyBridge\SystemConfig($value['system']);
            unset($value['system']);
        }

        if (array_key_exists('store', $value)) {
            $this->_usedProperties['store'] = true;
            $this->store = new \Symfony\Config\LightSamlSymfonyBridge\StoreConfig($value['store']);
            unset($value['store']);
        }

        if (array_key_exists('party', $value)) {
            $this->_usedProperties['party'] = true;
            $this->party = new \Symfony\Config\LightSamlSymfonyBridge\PartyConfig($value['party']);
            unset($value['party']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['own'])) {
            $output['own'] = $this->own->toArray();
        }
        if (isset($this->_usedProperties['system'])) {
            $output['system'] = $this->system->toArray();
        }
        if (isset($this->_usedProperties['store'])) {
            $output['store'] = $this->store->toArray();
        }
        if (isset($this->_usedProperties['party'])) {
            $output['party'] = $this->party->toArray();
        }

        return $output;
    }

}
