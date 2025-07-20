<?php

namespace Symfony\Config\NoxlogicRateLimit;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class HeadersConfig 
{
    private $limit;
    private $remaining;
    private $reset;
    private $_usedProperties = [];

    /**
     * @default 'X-RateLimit-Limit'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function limit($value): static
    {
        $this->_usedProperties['limit'] = true;
        $this->limit = $value;

        return $this;
    }

    /**
     * @default 'X-RateLimit-Remaining'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function remaining($value): static
    {
        $this->_usedProperties['remaining'] = true;
        $this->remaining = $value;

        return $this;
    }

    /**
     * @default 'X-RateLimit-Reset'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function reset($value): static
    {
        $this->_usedProperties['reset'] = true;
        $this->reset = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('limit', $value)) {
            $this->_usedProperties['limit'] = true;
            $this->limit = $value['limit'];
            unset($value['limit']);
        }

        if (array_key_exists('remaining', $value)) {
            $this->_usedProperties['remaining'] = true;
            $this->remaining = $value['remaining'];
            unset($value['remaining']);
        }

        if (array_key_exists('reset', $value)) {
            $this->_usedProperties['reset'] = true;
            $this->reset = $value['reset'];
            unset($value['reset']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['limit'])) {
            $output['limit'] = $this->limit;
        }
        if (isset($this->_usedProperties['remaining'])) {
            $output['remaining'] = $this->remaining;
        }
        if (isset($this->_usedProperties['reset'])) {
            $output['reset'] = $this->reset;
        }

        return $output;
    }

}
