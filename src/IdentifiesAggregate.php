<?php namespace BigName\DomainComponents;

interface IdentifiesAggregate
{
    public static function fromString($id);
    public function __toString();
    public function equal(IdentifiesAggregate $other);
} 
