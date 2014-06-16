<?php namespace BigName\Workflow;

class DomainEvents extends ImmutableArray
{
    protected function isItemOfValidType($item)
    {
        return $item instanceof DomainEvent;
    }
}