<?php namespace BigName\Workflow; 

interface AggregateRepository
{
    public function get(IdentifiesAggregate $id);
    public function add(AggregateRoot $aggregate);
} 
