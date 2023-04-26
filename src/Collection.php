<?php

declare(strict_types=1);

namespace BombenProdukt\Basket;

use ArrayIterator;
use Closure;
use Countable;
use IteratorAggregate;
use Traversable;

final class Collection implements Countable, IteratorAggregate
{
    /**
     * @var array
     */
    private $items;

    /**
     * Collection constructor.
     */
    public function __construct(array $items = [])
    {
        $this->items = $items;
    }

    public function add($key, $value): void
    {
        $this->items[$key] = $value;
    }

    /**
     * @return array
     */
    public function all()
    {
        return $this->items;
    }

    /**
     * @param  mixed $value
     * @return bool
     */
    public function contains($value)
    {
        return \in_array($value, $this->items, true);
    }

    /**
     * @param  mixed $value
     * @return bool
     */
    public function containsKey($value)
    {
        return \array_key_exists($value, $this->items);
    }

    public function count(): int
    {
        return \count($this->items);
    }

    public function each(Closure $callback): void
    {
        \array_map($callback, $this->items);
    }

    /**
     * @return bool
     */
    public function isEmpty()
    {
        return empty($this->items);
    }

    /**
     * @return Collection
     */
    public function filter(Closure $callback)
    {
        return new self(\array_filter($this->items, $callback));
    }

    /**
     * Determine if an item exists in the collection by key.
     *
     * @param  mixed $key
     * @return bool
     */
    public function has($key)
    {
        return $this->offsetExists($key);
    }

    /**
     * Determine if an item exists at an offset.
     *
     * @param  mixed $key
     * @return bool
     */
    public function offsetExists($key)
    {
        return \array_key_exists($key, $this->items);
    }

    /**
     * @return mixed
     */
    public function first()
    {
        return \reset($this->items);
    }

    /**
     * @return array
     */
    public function keys()
    {
        return \array_keys($this->items);
    }

    /**
     * @param  mixed $key
     * @return mixed
     */
    public function get($key)
    {
        return $this->items[$key];
    }

    /**
     * @return mixed
     */
    public function last()
    {
        return \end($this->items);
    }

    /**
     * @return Collection
     */
    public function map(Closure $callback)
    {
        return new self(\array_map($callback, $this->items, \array_keys($this->items)));
    }

    /**
     * @return mixed
     */
    public function pop()
    {
        return \array_pop($this->items);
    }

    public function prepend($value): void
    {
        \array_unshift($this->items, $value);
    }

    public function push($value): void
    {
        $this->items[] = $value;
    }

    public function remove($key): void
    {
        unset($this->items[$key]);
    }

    /**
     * @param  mixed $value
     * @return mixed
     */
    public function search($value)
    {
        return \array_search($value, $this->items, true);
    }

    /**
     * @return mixed
     */
    public function shift()
    {
        return \array_shift($this->items);
    }

    public function sort(Closure $callback): void
    {
        \uasort($this->items, $callback);
    }

    public function values(): void
    {
        $this->items = \array_values($this->items);
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return $this->items;
    }

    /**
     * @return ArrayIterator
     */
    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->items);
    }
}
