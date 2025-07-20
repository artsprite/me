<?php

namespace Symfony\Config\LightSamlSymfonyBridge\Party;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class IdpConfig 
{
    private $files;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function files(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['files'] = true;
        $this->files = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('files', $value)) {
            $this->_usedProperties['files'] = true;
            $this->files = $value['files'];
            unset($value['files']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['files'])) {
            $output['files'] = $this->files;
        }

        return $output;
    }

}
