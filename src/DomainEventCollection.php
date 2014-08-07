<?php namespace BigName\DomainComponents;

use BigName\Immutables\InvalidType;
use BigName\Immutables\TypedImmutableArray;

/**
 * Class DomainEventCollection
 * @package BigName\DomainComponents
 */
class DomainEventCollection extends TypedImmutableArray
{
    /**
     * @param $item
     * @throws \BigName\Immutables\InvalidType
     */
    protected function typeGuard($item)
    {
        if ( ! $item instanceof DomainEvent)
            throw new InvalidType;
    }
}
