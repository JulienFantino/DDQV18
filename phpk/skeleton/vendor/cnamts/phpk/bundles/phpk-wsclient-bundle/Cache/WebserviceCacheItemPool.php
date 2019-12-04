<?php

namespace CNAMTS\PHPK\WSClientBundle\Cache;

use CNAMTS\PHPK\WSClientBundle\Exception\PHPKWSClientException;
use Psr\Cache\CacheItemInterface;
use Psr\Cache\CacheItemPoolInterface;
use Psr\Cache\InvalidArgumentException;
use Symfony\Component\Filesystem\Exception\IOException;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Finder\Finder;

class WebserviceCacheItemPool implements CacheItemPoolInterface
{
    private $cacheDirectory;
    private $saveDeferred;
    private $fs;

    const CACHE_EXTENSION = "cache";

    public function __construct($directory = null)
    {
        $this->saveDeferred = array();
        $this->fs = new Filesystem();

        if (is_null($directory)) {
            return;
        }

        $this->cacheDirectory = $directory;

        /*
         * On crée le répertoire de cache si il n'existe pas
         */
        try {
            $this->fs->mkdir($this->cacheDirectory);
        } catch (IOException $e) {
            throw new PHPKWSClientException("Impossible de créer le répertoire de cache");
        }
    }

    protected function getCacheFile($key)
    {
        if (is_null($this->cacheDirectory)) {
            return false;
        } else {
            return $this->cacheDirectory . DIRECTORY_SEPARATOR . $key . '.' . self::CACHE_EXTENSION;
        }
    }

    /**
     * Returns a Cache Item representing the specified key.
     *
     * This method must always return a CacheItemInterface object, even in case of
     * a cache miss. It MUST NOT return null.
     *
     * @param string $key
     *   The key for which to return the corresponding Cache Item.
     *
     * @throws InvalidArgumentException
     *   If the $key string is not a legal value a \Psr\Cache\InvalidArgumentException
     *   MUST be thrown.
     *
     * @return CacheItemInterface
     *   The corresponding Cache Item.
     */
    public function getItem($key)
    {
        $cacheFile = $this->getCacheFile($key);
        if ($cacheFile === false) {
            return new WebserviceCacheItem($key);
        }

        if ($this->hasItem($key)) {
            $item = unserialize(file_get_contents($cacheFile));
        } else {
            $item = new WebserviceCacheItem($key);
        }
        return $item;
    }
    /**
     * Returns a traversable set of cache items.
     *
     * @param string[] $keys
     *   An indexed array of keys of items to retrieve.
     *
     * @throws InvalidArgumentException
     *   If any of the keys in $keys are not a legal value a \Psr\Cache\InvalidArgumentException
     *   MUST be thrown.
     *
     * @return array|\Traversable
     *   A traversable collection of Cache Items keyed by the cache keys of
     *   each item. A Cache item will be returned for each key, even if that
     *   key is not found. However, if no keys are specified then an empty
     *   traversable MUST be returned instead.
     */
    public function getItems(array $keys = array())
    {
        $items = array();
        if (count($keys) > 0) {
            foreach ($keys as $key) {
                $items[] = $this->getItem($key);
            }
        }
        return $items;
    }

    /**
     * Confirms if the cache contains specified cache item.
     *
     * Note: This method MAY avoid retrieving the cached value for performance reasons.
     * This could result in a race condition with CacheItemInterface::get(). To avoid
     * such situation use CacheItemInterface::isHit() instead.
     *
     * @param string $key
     *   The key for which to check existence.
     *
     * @throws InvalidArgumentException
     *   If the $key string is not a legal value a \Psr\Cache\InvalidArgumentException
     *   MUST be thrown.
     *
     * @return bool
     *   True if item exists in the cache, false otherwise.
     */
    public function hasItem($key)
    {
        $cacheFile = $this->getCacheFile($key);

        if ($cacheFile === false) {
            return false;
        }

        if ($this->fs->exists($cacheFile)) {
            try {
                $item = unserialize(file_get_contents($cacheFile));
            } catch (\Exception $e) {
                return false;
            }

            // Si il ne s'agit pas d'un objet au format CacheItemInterface alors on le supprime
            if (!$item instanceof \Psr\Cache\CacheItemInterface) {
                $this->deleteItem($key);
                return false;
            }
            // Si le fichier est expiré alors on le supprime
            if (!is_null($item->getExpiration()) && (new \DateTime() > $item->getExpiration())) {
                $this->deleteItem($key);
                return false;
            }
            return true;
        } else {
            return false;
        }
    }
    /**
     * Deletes all items in the pool.
     *
     * @return bool
     *   True if the pool was successfully cleared. False if there was an error.
     */
    public function clear()
    {
        $finder = new Finder();
        $finder->files()->name('*.' . self::CACHE_EXTENSION)->in($this->cacheDirectory);
        foreach ($finder as $file) {
            $explode = explode(".", $file->getRelativePathname());
            $key = $explode[0];
            if (! $this->deleteItem($key)) {
                return false;
            }
        }
        return true;
    }
    /**
     * Removes the item from the pool.
     *
     * @param string $key
     *   The key to delete.
     *
     * @throws InvalidArgumentException
     *   If the $key string is not a legal value a \Psr\Cache\InvalidArgumentException
     *   MUST be thrown.
     *
     * @return bool
     *   True if the item was successfully removed. False if there was an error.
     */
    public function deleteItem($key)
    {
        $cacheFile = $this->getCacheFile($key);
        if ($cacheFile === false) {
            return false;
        }

        try {
            //$this->fs->remove();
            $this->fs->remove($cacheFile);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
    /**
     * Removes multiple items from the pool.
     *
     * @param string[] $keys
     *   An array of keys that should be removed from the pool.
     *
     * @throws InvalidArgumentException
     *   If any of the keys in $keys are not a legal value a \Psr\Cache\InvalidArgumentException
     *   MUST be thrown.
     *
     * @return bool
     *   True if the items were successfully removed. False if there was an error.
     */
    public function deleteItems(array $keys)
    {
        if (count($keys) > 0) {
            foreach ($keys as $key) {
                if (!$this->deleteItem($key)) {
                    return false;
                }
            }
        }
        return true;
    }
    /**
     * Persists a cache item immediately.
     *
     * @param CacheItemInterface $item
     *   The cache item to save.
     *
     * @return bool
     *   True if the item was successfully persisted. False if there was an error.
     */
    public function save(\Psr\Cache\CacheItemInterface $item)
    {
        $cacheFile = $this->getCacheFile($item->getKey());

        if ($cacheFile === false) {
            return false;
        }

        if (!$this->fs->exists($cacheFile)) {
            $this->fs->touch($cacheFile);
        }

        try {
            $this->fs->dumpFile($cacheFile, serialize($item));
        } catch (\Exception $e) {
            return false;
        }

        return true;
    }
    /**
     * Sets a cache item to be persisted later.
     *
     * @param CacheItemInterface $item
     *   The cache item to save.
     *
     * @return bool
     *   False if the item could not be queued or if a commit was attempted and failed. True otherwise.
     */
    public function saveDeferred(\Psr\Cache\CacheItemInterface $item)
    {
        $this->saveDeferred[] = $item;
    }

    /**
     * Persists any deferred cache items.
     *
     * @return bool
     *   True if all not-yet-saved items were successfully saved or there were none. False otherwise.
     */
    public function commit()
    {
        if (count($this->saveDeferred) > 0) {
            foreach ($this->saveDeferred as $toSave) {
                if (!$this->save($toSave)) {
                    return false;
                }
            }
        }
        return true;
    }
}
