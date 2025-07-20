<?php

namespace Symfony\Config\LightSamlSymfonyBridge;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Own'.\DIRECTORY_SEPARATOR.'EntityDescriptorProviderConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Own'.\DIRECTORY_SEPARATOR.'CredentialsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class OwnConfig 
{
    private $entityId;
    private $entityDescriptorProvider;
    private $credentials;
    private $_usedProperties = [];

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

    public function entityDescriptorProvider(array $value = []): \Symfony\Config\LightSamlSymfonyBridge\Own\EntityDescriptorProviderConfig
    {
        if (null === $this->entityDescriptorProvider) {
            $this->_usedProperties['entityDescriptorProvider'] = true;
            $this->entityDescriptorProvider = new \Symfony\Config\LightSamlSymfonyBridge\Own\EntityDescriptorProviderConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "entityDescriptorProvider()" has already been initialized. You cannot pass values the second time you call entityDescriptorProvider().');
        }

        return $this->entityDescriptorProvider;
    }

    public function credentials(array $value = []): \Symfony\Config\LightSamlSymfonyBridge\Own\CredentialsConfig
    {
        $this->_usedProperties['credentials'] = true;

        return $this->credentials[] = new \Symfony\Config\LightSamlSymfonyBridge\Own\CredentialsConfig($value);
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('entity_id', $value)) {
            $this->_usedProperties['entityId'] = true;
            $this->entityId = $value['entity_id'];
            unset($value['entity_id']);
        }

        if (array_key_exists('entity_descriptor_provider', $value)) {
            $this->_usedProperties['entityDescriptorProvider'] = true;
            $this->entityDescriptorProvider = new \Symfony\Config\LightSamlSymfonyBridge\Own\EntityDescriptorProviderConfig($value['entity_descriptor_provider']);
            unset($value['entity_descriptor_provider']);
        }

        if (array_key_exists('credentials', $value)) {
            $this->_usedProperties['credentials'] = true;
            $this->credentials = array_map(fn ($v) => new \Symfony\Config\LightSamlSymfonyBridge\Own\CredentialsConfig($v), $value['credentials']);
            unset($value['credentials']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['entityId'])) {
            $output['entity_id'] = $this->entityId;
        }
        if (isset($this->_usedProperties['entityDescriptorProvider'])) {
            $output['entity_descriptor_provider'] = $this->entityDescriptorProvider->toArray();
        }
        if (isset($this->_usedProperties['credentials'])) {
            $output['credentials'] = array_map(fn ($v) => $v->toArray(), $this->credentials);
        }

        return $output;
    }

}
