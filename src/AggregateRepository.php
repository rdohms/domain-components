<?php namespace BigName\DomainComponents;

interface AggregateRepository
{
    public function get(IdentifiesAggregate $id);
    public function add(AggregateRoot $aggregate);
} 
