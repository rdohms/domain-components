<?php namespace BigName\Workflow;

class DomainEventArray extends ImmutableTypedArray
{
    protected function isCorrectType($item)
    {
        return $item instanceof DomainEvent;
    }
}
