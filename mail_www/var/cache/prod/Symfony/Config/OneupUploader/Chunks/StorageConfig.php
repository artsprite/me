<?php

namespace Symfony\Config\OneupUploader\Chunks;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class StorageConfig 
{
    private $type;
    private $filesystem;
    private $directory;
    private $streamWrapper;
    private $syncBufferSize;
    private $prefix;
    private $_usedProperties = [];

    /**
     * @default 'filesystem'
     * @param ParamConfigurator|'filesystem'|'gaufrette'|'flysystem' $value
     * @return $this
     */
    public function type($value): static
    {
        $this->_usedProperties['type'] = true;
        $this->type = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function filesystem($value): static
    {
        $this->_usedProperties['filesystem'] = true;
        $this->filesystem = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function directory($value): static
    {
        $this->_usedProperties['directory'] = true;
        $this->directory = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function streamWrapper($value): static
    {
        $this->_usedProperties['streamWrapper'] = true;
        $this->streamWrapper = $value;

        return $this;
    }

    /**
     * @default '100K'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function syncBufferSize($value): static
    {
        $this->_usedProperties['syncBufferSize'] = true;
        $this->syncBufferSize = $value;

        return $this;
    }

    /**
     * @default 'chunks'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function prefix($value): static
    {
        $this->_usedProperties['prefix'] = true;
        $this->prefix = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('type', $value)) {
            $this->_usedProperties['type'] = true;
            $this->type = $value['type'];
            unset($value['type']);
        }

        if (array_key_exists('filesystem', $value)) {
            $this->_usedProperties['filesystem'] = true;
            $this->filesystem = $value['filesystem'];
            unset($value['filesystem']);
        }

        if (array_key_exists('directory', $value)) {
            $this->_usedProperties['directory'] = true;
            $this->directory = $value['directory'];
            unset($value['directory']);
        }

        if (array_key_exists('stream_wrapper', $value)) {
            $this->_usedProperties['streamWrapper'] = true;
            $this->streamWrapper = $value['stream_wrapper'];
            unset($value['stream_wrapper']);
        }

        if (array_key_exists('sync_buffer_size', $value)) {
            $this->_usedProperties['syncBufferSize'] = true;
            $this->syncBufferSize = $value['sync_buffer_size'];
            unset($value['sync_buffer_size']);
        }

        if (array_key_exists('prefix', $value)) {
            $this->_usedProperties['prefix'] = true;
            $this->prefix = $value['prefix'];
            unset($value['prefix']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['type'])) {
            $output['type'] = $this->type;
        }
        if (isset($this->_usedProperties['filesystem'])) {
            $output['filesystem'] = $this->filesystem;
        }
        if (isset($this->_usedProperties['directory'])) {
            $output['directory'] = $this->directory;
        }
        if (isset($this->_usedProperties['streamWrapper'])) {
            $output['stream_wrapper'] = $this->streamWrapper;
        }
        if (isset($this->_usedProperties['syncBufferSize'])) {
            $output['sync_buffer_size'] = $this->syncBufferSize;
        }
        if (isset($this->_usedProperties['prefix'])) {
            $output['prefix'] = $this->prefix;
        }

        return $output;
    }

}
