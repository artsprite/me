<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class LightSamlSpConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $usernameMapper;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function usernameMapper(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['usernameMapper'] = true;
        $this->usernameMapper = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'light_saml_sp';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('username_mapper', $value)) {
            $this->_usedProperties['usernameMapper'] = true;
            $this->usernameMapper = $value['username_mapper'];
            unset($value['username_mapper']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['usernameMapper'])) {
            $output['username_mapper'] = $this->usernameMapper;
        }

        return $output;
    }

}
