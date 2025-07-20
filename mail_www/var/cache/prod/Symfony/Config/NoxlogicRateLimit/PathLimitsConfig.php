<?php

namespace Symfony\Config\NoxlogicRateLimit;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class PathLimitsConfig 
{
    private $path;
    private $methods;
    private $limit;
    private $period;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function path($value): static
    {
        $this->_usedProperties['path'] = true;
        $this->path = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function methods(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['methods'] = true;
        $this->methods = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function limit($value): static
    {
        $this->_usedProperties['limit'] = true;
        $this->limit = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function period($value): static
    {
        $this->_usedProperties['period'] = true;
        $this->period = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('path', $value)) {
            $this->_usedProperties['path'] = true;
            $this->path = $value['path'];
            unset($value['path']);
        }

        if (array_key_exists('methods', $value)) {
            $this->_usedProperties['methods'] = true;
            $this->methods = $value['methods'];
            unset($value['methods']);
        }

        if (array_key_exists('limit', $value)) {
            $this->_usedProperties['limit'] = true;
            $this->limit = $value['limit'];
            unset($value['limit']);
        }

        if (array_key_exists('period', $value)) {
            $this->_usedProperties['period'] = true;
            $this->period = $value['period'];
            unset($value['period']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['path'])) {
            $output['path'] = $this->path;
        }
        if (isset($this->_usedProperties['methods'])) {
            $output['methods'] = $this->methods;
        }
        if (isset($this->_usedProperties['limit'])) {
            $output['limit'] = $this->limit;
        }
        if (isset($this->_usedProperties['period'])) {
            $output['period'] = $this->period;
        }

        return $output;
    }

}
