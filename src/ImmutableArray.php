<?php namespace BigName\Workflow;

use ArrayAccess;
use Countable;

class ImmutableArray implements Countable, ArrayAccess
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

    public function offsetExists($key)
    {
        return array_key_exists($key, $this->items);
    }

    public function offsetGet($key)
    {
        return $this->items[$key];
    }

    public function offsetSet($key, $value)
    {
        throw new ArrayIsImmutable;
    }

    public function offsetUnset($key)
    {
        throw new ArrayIsImmutable;
    }
}
