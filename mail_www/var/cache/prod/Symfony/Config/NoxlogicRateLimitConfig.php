<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'NoxlogicRateLimit'.\DIRECTORY_SEPARATOR.'HeadersConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'NoxlogicRateLimit'.\DIRECTORY_SEPARATOR.'PathLimitsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class NoxlogicRateLimitConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $enabled;
    private $storageEngine;
    private $redisClient;
    private $redisService;
    private $phpRedisService;
    private $memcacheClient;
    private $memcacheService;
    private $doctrineProvider;
    private $doctrineService;
    private $simpleCacheService;
    private $cacheService;
    private $rateResponseCode;
    private $rateResponseException;
    private $rateResponseMessage;
    private $displayHeaders;
    private $headers;
    private $pathLimits;
    private $fosOauthKeyListener;
    private $_usedProperties = [];

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): static
    {
        $this->_usedProperties['enabled'] = true;
        $this->enabled = $value;

        return $this;
    }

    /**
     * The storage engine where all the rates will be stored
     * @default 'redis'
     * @param ParamConfigurator|'redis'|'memcache'|'doctrine'|'php_redis'|'php_redis_cluster'|'simple_cache'|'cache' $value
     * @return $this
     */
    public function storageEngine($value): static
    {
        $this->_usedProperties['storageEngine'] = true;
        $this->storageEngine = $value;

        return $this;
    }

    /**
     * The redis client to use for the redis storage engine
     * @default 'default_client'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function redisClient($value): static
    {
        $this->_usedProperties['redisClient'] = true;
        $this->redisClient = $value;

        return $this;
    }

    /**
     * The Redis service to use for the redis storage engine, should be instance of \Predis\Client
     * @example project.predis
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function redisService($value): static
    {
        $this->_usedProperties['redisService'] = true;
        $this->redisService = $value;

        return $this;
    }

    /**
     * Service id of a php redis, should be an instance of \Redis
     * @example project.redis
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function phpRedisService($value): static
    {
        $this->_usedProperties['phpRedisService'] = true;
        $this->phpRedisService = $value;

        return $this;
    }

    /**
     * The memcache client to use for the memcache storage engine
     * @default 'default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function memcacheClient($value): static
    {
        $this->_usedProperties['memcacheClient'] = true;
        $this->memcacheClient = $value;

        return $this;
    }

    /**
     * The Memcached service to use for the memcache storage engine, should be instance of \Memcached
     * @example project.memcached
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function memcacheService($value): static
    {
        $this->_usedProperties['memcacheService'] = true;
        $this->memcacheService = $value;

        return $this;
    }

    /**
     * The Doctrine Cache provider to use for the doctrine storage engine
     * @example my_apc_cache
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function doctrineProvider($value): static
    {
        $this->_usedProperties['doctrineProvider'] = true;
        $this->doctrineProvider = $value;

        return $this;
    }

    /**
     * The Doctrine Cache service to use for the doctrine storage engine
     * @example project.my_apc_cache
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function doctrineService($value): static
    {
        $this->_usedProperties['doctrineService'] = true;
        $this->doctrineService = $value;

        return $this;
    }

    /**
     * Service id of a simple cache, should be an instance of \Psr\SimpleCache\CacheInterface
     * @example project.cache
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function simpleCacheService($value): static
    {
        $this->_usedProperties['simpleCacheService'] = true;
        $this->simpleCacheService = $value;

        return $this;
    }

    /**
     * Service id of a cache, should be an instance of \Psr\Cache\CacheItemPoolInterface
     * @example project.cache
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cacheService($value): static
    {
        $this->_usedProperties['cacheService'] = true;
        $this->cacheService = $value;

        return $this;
    }

    /**
     * The HTTP status code to return when a client hits the rate limit
     * @default 429
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function rateResponseCode($value): static
    {
        $this->_usedProperties['rateResponseCode'] = true;
        $this->rateResponseCode = $value;

        return $this;
    }

    /**
     * Optional exception class that will be returned when a client hits the rate limit
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function rateResponseException($value): static
    {
        $this->_usedProperties['rateResponseException'] = true;
        $this->rateResponseException = $value;

        return $this;
    }

    /**
     * The HTTP message to return when a client hits the rate limit
     * @default 'You exceeded the rate limit'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function rateResponseMessage($value): static
    {
        $this->_usedProperties['rateResponseMessage'] = true;
        $this->rateResponseMessage = $value;

        return $this;
    }

    /**
     * Should the ratelimit headers be automatically added to the response?
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function displayHeaders($value): static
    {
        $this->_usedProperties['displayHeaders'] = true;
        $this->displayHeaders = $value;

        return $this;
    }

    /**
     * What are the different header names to add
     * @default {"limit":"X-RateLimit-Limit","remaining":"X-RateLimit-Remaining","reset":"X-RateLimit-Reset"}
    */
    public function headers(array $value = []): \Symfony\Config\NoxlogicRateLimit\HeadersConfig
    {
        if (null === $this->headers) {
            $this->_usedProperties['headers'] = true;
            $this->headers = new \Symfony\Config\NoxlogicRateLimit\HeadersConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "headers()" has already been initialized. You cannot pass values the second time you call headers().');
        }

        return $this->headers;
    }

    /**
     * Rate limits for paths
    */
    public function pathLimits(array $value = []): \Symfony\Config\NoxlogicRateLimit\PathLimitsConfig
    {
        $this->_usedProperties['pathLimits'] = true;

        return $this->pathLimits[] = new \Symfony\Config\NoxlogicRateLimit\PathLimitsConfig($value);
    }

    /**
     * Enabled the FOS OAuthServerBundle listener
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function fosOauthKeyListener($value): static
    {
        $this->_usedProperties['fosOauthKeyListener'] = true;
        $this->fosOauthKeyListener = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'noxlogic_rate_limit';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('storage_engine', $value)) {
            $this->_usedProperties['storageEngine'] = true;
            $this->storageEngine = $value['storage_engine'];
            unset($value['storage_engine']);
        }

        if (array_key_exists('redis_client', $value)) {
            $this->_usedProperties['redisClient'] = true;
            $this->redisClient = $value['redis_client'];
            unset($value['redis_client']);
        }

        if (array_key_exists('redis_service', $value)) {
            $this->_usedProperties['redisService'] = true;
            $this->redisService = $value['redis_service'];
            unset($value['redis_service']);
        }

        if (array_key_exists('php_redis_service', $value)) {
            $this->_usedProperties['phpRedisService'] = true;
            $this->phpRedisService = $value['php_redis_service'];
            unset($value['php_redis_service']);
        }

        if (array_key_exists('memcache_client', $value)) {
            $this->_usedProperties['memcacheClient'] = true;
            $this->memcacheClient = $value['memcache_client'];
            unset($value['memcache_client']);
        }

        if (array_key_exists('memcache_service', $value)) {
            $this->_usedProperties['memcacheService'] = true;
            $this->memcacheService = $value['memcache_service'];
            unset($value['memcache_service']);
        }

        if (array_key_exists('doctrine_provider', $value)) {
            $this->_usedProperties['doctrineProvider'] = true;
            $this->doctrineProvider = $value['doctrine_provider'];
            unset($value['doctrine_provider']);
        }

        if (array_key_exists('doctrine_service', $value)) {
            $this->_usedProperties['doctrineService'] = true;
            $this->doctrineService = $value['doctrine_service'];
            unset($value['doctrine_service']);
        }

        if (array_key_exists('simple_cache_service', $value)) {
            $this->_usedProperties['simpleCacheService'] = true;
            $this->simpleCacheService = $value['simple_cache_service'];
            unset($value['simple_cache_service']);
        }

        if (array_key_exists('cache_service', $value)) {
            $this->_usedProperties['cacheService'] = true;
            $this->cacheService = $value['cache_service'];
            unset($value['cache_service']);
        }

        if (array_key_exists('rate_response_code', $value)) {
            $this->_usedProperties['rateResponseCode'] = true;
            $this->rateResponseCode = $value['rate_response_code'];
            unset($value['rate_response_code']);
        }

        if (array_key_exists('rate_response_exception', $value)) {
            $this->_usedProperties['rateResponseException'] = true;
            $this->rateResponseException = $value['rate_response_exception'];
            unset($value['rate_response_exception']);
        }

        if (array_key_exists('rate_response_message', $value)) {
            $this->_usedProperties['rateResponseMessage'] = true;
            $this->rateResponseMessage = $value['rate_response_message'];
            unset($value['rate_response_message']);
        }

        if (array_key_exists('display_headers', $value)) {
            $this->_usedProperties['displayHeaders'] = true;
            $this->displayHeaders = $value['display_headers'];
            unset($value['display_headers']);
        }

        if (array_key_exists('headers', $value)) {
            $this->_usedProperties['headers'] = true;
            $this->headers = new \Symfony\Config\NoxlogicRateLimit\HeadersConfig($value['headers']);
            unset($value['headers']);
        }

        if (array_key_exists('path_limits', $value)) {
            $this->_usedProperties['pathLimits'] = true;
            $this->pathLimits = array_map(fn ($v) => new \Symfony\Config\NoxlogicRateLimit\PathLimitsConfig($v), $value['path_limits']);
            unset($value['path_limits']);
        }

        if (array_key_exists('fos_oauth_key_listener', $value)) {
            $this->_usedProperties['fosOauthKeyListener'] = true;
            $this->fosOauthKeyListener = $value['fos_oauth_key_listener'];
            unset($value['fos_oauth_key_listener']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }
        if (isset($this->_usedProperties['storageEngine'])) {
            $output['storage_engine'] = $this->storageEngine;
        }
        if (isset($this->_usedProperties['redisClient'])) {
            $output['redis_client'] = $this->redisClient;
        }
        if (isset($this->_usedProperties['redisService'])) {
            $output['redis_service'] = $this->redisService;
        }
        if (isset($this->_usedProperties['phpRedisService'])) {
            $output['php_redis_service'] = $this->phpRedisService;
        }
        if (isset($this->_usedProperties['memcacheClient'])) {
            $output['memcache_client'] = $this->memcacheClient;
        }
        if (isset($this->_usedProperties['memcacheService'])) {
            $output['memcache_service'] = $this->memcacheService;
        }
        if (isset($this->_usedProperties['doctrineProvider'])) {
            $output['doctrine_provider'] = $this->doctrineProvider;
        }
        if (isset($this->_usedProperties['doctrineService'])) {
            $output['doctrine_service'] = $this->doctrineService;
        }
        if (isset($this->_usedProperties['simpleCacheService'])) {
            $output['simple_cache_service'] = $this->simpleCacheService;
        }
        if (isset($this->_usedProperties['cacheService'])) {
            $output['cache_service'] = $this->cacheService;
        }
        if (isset($this->_usedProperties['rateResponseCode'])) {
            $output['rate_response_code'] = $this->rateResponseCode;
        }
        if (isset($this->_usedProperties['rateResponseException'])) {
            $output['rate_response_exception'] = $this->rateResponseException;
        }
        if (isset($this->_usedProperties['rateResponseMessage'])) {
            $output['rate_response_message'] = $this->rateResponseMessage;
        }
        if (isset($this->_usedProperties['displayHeaders'])) {
            $output['display_headers'] = $this->displayHeaders;
        }
        if (isset($this->_usedProperties['headers'])) {
            $output['headers'] = $this->headers->toArray();
        }
        if (isset($this->_usedProperties['pathLimits'])) {
            $output['path_limits'] = array_map(fn ($v) => $v->toArray(), $this->pathLimits);
        }
        if (isset($this->_usedProperties['fosOauthKeyListener'])) {
            $output['fos_oauth_key_listener'] = $this->fosOauthKeyListener;
        }

        return $output;
    }

}
