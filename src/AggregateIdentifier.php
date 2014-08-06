<?php namespace BigName\Workflow;

interface AggregateIdentifier
{
    public static function fromString($id);
    public function getId();
    public function equal(AggregateIdentifier $other);
} 
