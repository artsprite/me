<?php

namespace Symfony\Config\LightSamlSymfonyBridge;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Party'.\DIRECTORY_SEPARATOR.'IdpConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class PartyConfig 
{
    private $idp;
    private $_usedProperties = [];

    public function idp(array $value = []): \Symfony\Config\LightSamlSymfonyBridge\Party\IdpConfig
    {
        if (null === $this->idp) {
            $this->_usedProperties['idp'] = true;
            $this->idp = new \Symfony\Config\LightSamlSymfonyBridge\Party\IdpConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "idp()" has already been initialized. You cannot pass values the second time you call idp().');
        }

        return $this->idp;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('idp', $value)) {
            $this->_usedProperties['idp'] = true;
            $this->idp = new \Symfony\Config\LightSamlSymfonyBridge\Party\IdpConfig($value['idp']);
            unset($value['idp']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['idp'])) {
            $output['idp'] = $this->idp->toArray();
        }

        return $output;
    }

}
