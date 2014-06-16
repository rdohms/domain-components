<?php namespace BigName\Workflow;

class DomainEvents extends ImmutableArray
{
    protected function isItemOfCorrectType($item)
    {
        return $item instanceof DomainEvent;
    }
}