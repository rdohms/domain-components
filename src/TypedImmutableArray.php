<?php namespace BigName\Workflow;

abstract class TypedImmutableArray extends ImmutableArray
{
    protected $items = [];

    public function __construct(array $items)
    {
        array_map(function($item) {
            if ( ! $this->isCorrectType($item)) {
                throw new InvalidTypeException();
            }
        }, $items);
        $this->items = $items;
    }

    abstract protected function isCorrectType($item);
}
