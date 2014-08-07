<?php namespace BigName\DomainComponents;

use BigName\Immutables\InvalidType;
use BigName\Immutables\TypedImmutableArray;

class DomainEventCollection extends TypedImmutableArray
{
    protected function typeGuard($item)
    {
        if ( ! $item instanceof DomainEvent)
            throw new InvalidType;
    }
}
