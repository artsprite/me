<?php

namespace Symfony\Config\OneupUploader;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Chunks'.\DIRECTORY_SEPARATOR.'StorageConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ChunksConfig 
{
    private $maxage;
    private $storage;
    private $loadDistribution;
    private $_usedProperties = [];

    /**
     * @default 604800
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function maxage($value): static
    {
        $this->_usedProperties['maxage'] = true;
        $this->maxage = $value;

        return $this;
    }

    /**
     * @default {"type":"filesystem","filesystem":null,"directory":null,"stream_wrapper":null,"sync_buffer_size":"100K","prefix":"chunks"}
    */
    public function storage(array $value = []): \Symfony\Config\OneupUploader\Chunks\StorageConfig
    {
        if (null === $this->storage) {
            $this->_usedProperties['storage'] = true;
            $this->storage = new \Symfony\Config\OneupUploader\Chunks\StorageConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "storage()" has already been initialized. You cannot pass values the second time you call storage().');
        }

        return $this->storage;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function loadDistribution($value): static
    {
        $this->_usedProperties['loadDistribution'] = true;
        $this->loadDistribution = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('maxage', $value)) {
            $this->_usedProperties['maxage'] = true;
            $this->maxage = $value['maxage'];
            unset($value['maxage']);
        }

        if (array_key_exists('storage', $value)) {
            $this->_usedProperties['storage'] = true;
            $this->storage = new \Symfony\Config\OneupUploader\Chunks\StorageConfig($value['storage']);
            unset($value['storage']);
        }

        if (array_key_exists('load_distribution', $value)) {
            $this->_usedProperties['loadDistribution'] = true;
            $this->loadDistribution = $value['load_distribution'];
            unset($value['load_distribution']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['maxage'])) {
            $output['maxage'] = $this->maxage;
        }
        if (isset($this->_usedProperties['storage'])) {
            $output['storage'] = $this->storage->toArray();
        }
        if (isset($this->_usedProperties['loadDistribution'])) {
            $output['load_distribution'] = $this->loadDistribution;
        }

        return $output;
    }

}
