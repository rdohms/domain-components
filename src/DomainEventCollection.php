<?php namespace BigName\Workflow;

class DomainEventCollection extends TypedImmutableArray
{
    protected function isCorrectType($item)
    {
        return $item instanceof DomainEvent;
    }
}
