<?php

namespace Symfony\Config\LightSamlSymfonyBridge;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SystemConfig 
{
    private $eventDispatcher;
    private $logger;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function eventDispatcher($value): static
    {
        $this->_usedProperties['eventDispatcher'] = true;
        $this->eventDispatcher = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function logger($value): static
    {
        $this->_usedProperties['logger'] = true;
        $this->logger = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('event_dispatcher', $value)) {
            $this->_usedProperties['eventDispatcher'] = true;
            $this->eventDispatcher = $value['event_dispatcher'];
            unset($value['event_dispatcher']);
        }

        if (array_key_exists('logger', $value)) {
            $this->_usedProperties['logger'] = true;
            $this->logger = $value['logger'];
            unset($value['logger']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['eventDispatcher'])) {
            $output['event_dispatcher'] = $this->eventDispatcher;
        }
        if (isset($this->_usedProperties['logger'])) {
            $output['logger'] = $this->logger;
        }

        return $output;
    }

}
