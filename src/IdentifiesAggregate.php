<?php namespace BigName\DomainComponents;

interface IdentifiesAggregate
{
    public static function fromString($id);
    public function getId();
    public function equal(IdentifiesAggregate $other);
} 
