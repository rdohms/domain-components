<?php namespace BigName\Workflow\Stubs; 

use BigName\Workflow\DomainEvent;
use BigName\Workflow\TypedImmutableArray;

final class DomainEventImmutableArray extends TypedImmutableArray
{
    protected function isCorrectType($item)
    {
        return $item instanceof DomainEvent;
    }
}
