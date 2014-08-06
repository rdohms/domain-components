<?php namespace BigName\Workflow;

interface IdentifiesAggregate
{
    public static function fromString($id);
    public function getId();
    public function equal(IdentifiesAggregate $other);
} 
