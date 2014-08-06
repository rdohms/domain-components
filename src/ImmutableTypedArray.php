<?php namespace BigName\Workflow;

use ArrayAccess;
use ArrayIterator;
use Countable;
use IteratorAggregate;

abstract class ImmutableTypedArray implements Countable, ArrayAccess, IteratorAggregate
{
    private $items = [];

    public function __construct(array $items)
    {
        foreach ($items as $item) {
            if ( ! $this->isCorrectType($item)) {
                throw new InvalidTypeException();
            }
            $this->items[] = $item;
        }
    }

    abstract protected function isCorrectType($item);

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
        throw new AttemptToModifyImmutableArray;
    }

    final public function offsetUnset($key)
    {
        throw new AttemptToModifyImmutableArray;
    }

    final public function getIterator()
    {
        return new ArrayIterator($this->items);
    }
}
