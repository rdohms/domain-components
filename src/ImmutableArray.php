<?php namespace BigName\Workflow;

use ArrayAccess;
use ArrayIterator;
use Countable;
use IteratorAggregate;

class ImmutableArray implements Countable, ArrayAccess, IteratorAggregate
{
    private $items = [];

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    final public function count()
    {
        return count($this->items);
    }

    final public function offsetExists($key)
    {
        return array_key_exists($key, $this->items);
    }

    final public function offsetGet($key)
    {
        return $this->items[$key];
    }

    final public function offsetSet($key, $value)
    {
        throw new ArrayIsImmutable;
    }

    final public function offsetUnset($key)
    {
        throw new ArrayIsImmutable;
    }

    final public function getIterator()
    {
        return new ArrayIterator($this->items);
    }

    public function join($glue)
    {
        return implode($glue, $this->items);
    }
}
