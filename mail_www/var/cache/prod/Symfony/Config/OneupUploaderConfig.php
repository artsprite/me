<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'OneupUploader'.\DIRECTORY_SEPARATOR.'ChunksConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OneupUploader'.\DIRECTORY_SEPARATOR.'OrphanageConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OneupUploader'.\DIRECTORY_SEPARATOR.'MappingsConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;

/**
 * This class is automatically generated to help in creating a config.
 */
class OneupUploaderConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $chunks;
    private $orphanage;
    private $twig;
    private $mappings;
    private $_usedProperties = [];

    /**
     * @default {"maxage":604800,"storage":{"type":"filesystem","filesystem":null,"directory":null,"stream_wrapper":null,"sync_buffer_size":"100K","prefix":"chunks"},"load_distribution":true}
    */
    public function chunks(array $value = []): \Symfony\Config\OneupUploader\ChunksConfig
    {
        if (null === $this->chunks) {
            $this->_usedProperties['chunks'] = true;
            $this->chunks = new \Symfony\Config\OneupUploader\ChunksConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "chunks()" has already been initialized. You cannot pass values the second time you call chunks().');
        }

        return $this->chunks;
    }

    /**
     * @default {"maxage":604800,"directory":null}
    */
    public function orphanage(array $value = []): \Symfony\Config\OneupUploader\OrphanageConfig
    {
        if (null === $this->orphanage) {
            $this->_usedProperties['orphanage'] = true;
            $this->orphanage = new \Symfony\Config\OneupUploader\OrphanageConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "orphanage()" has already been initialized. You cannot pass values the second time you call orphanage().');
        }

        return $this->orphanage;
    }

    /**
     * @default true
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function twig($value): static
    {
        $this->_usedProperties['twig'] = true;
        $this->twig = $value;

        return $this;
    }

    public function mappings(string $id, array $value = []): \Symfony\Config\OneupUploader\MappingsConfig
    {
        if (!isset($this->mappings[$id])) {
            $this->_usedProperties['mappings'] = true;
            $this->mappings[$id] = new \Symfony\Config\OneupUploader\MappingsConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "mappings()" has already been initialized. You cannot pass values the second time you call mappings().');
        }

        return $this->mappings[$id];
    }

    public function getExtensionAlias(): string
    {
        return 'oneup_uploader';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('chunks', $value)) {
            $this->_usedProperties['chunks'] = true;
            $this->chunks = new \Symfony\Config\OneupUploader\ChunksConfig($value['chunks']);
            unset($value['chunks']);
        }

        if (array_key_exists('orphanage', $value)) {
            $this->_usedProperties['orphanage'] = true;
            $this->orphanage = new \Symfony\Config\OneupUploader\OrphanageConfig($value['orphanage']);
            unset($value['orphanage']);
        }

        if (array_key_exists('twig', $value)) {
            $this->_usedProperties['twig'] = true;
            $this->twig = $value['twig'];
            unset($value['twig']);
        }

        if (array_key_exists('mappings', $value)) {
            $this->_usedProperties['mappings'] = true;
            $this->mappings = array_map(fn ($v) => new \Symfony\Config\OneupUploader\MappingsConfig($v), $value['mappings']);
            unset($value['mappings']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['chunks'])) {
            $output['chunks'] = $this->chunks->toArray();
        }
        if (isset($this->_usedProperties['orphanage'])) {
            $output['orphanage'] = $this->orphanage->toArray();
        }
        if (isset($this->_usedProperties['twig'])) {
            $output['twig'] = $this->twig;
        }
        if (isset($this->_usedProperties['mappings'])) {
            $output['mappings'] = array_map(fn ($v) => $v->toArray(), $this->mappings);
        }

        return $output;
    }

}
