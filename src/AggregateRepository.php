<?php namespace BigName\DomainComponents;

/**
 * Interface AggregateRepository
 * @package BigName\DomainComponents
 */
interface AggregateRepository
{
    /**
     * @param IdentifiesAggregate $id
     * @return AggregateRoot
     */
    public function get(IdentifiesAggregate $id);

    /**
     * @param AggregateRoot $aggregate
     * @return null
     */
    public function add(AggregateRoot $aggregate);
} 
