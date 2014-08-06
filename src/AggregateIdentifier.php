<?php namespace BigName\Workflow;

interface AggregateIdentifier
{
    public static function fromString();
    public function getId();
    public function equal(AggregateIdentifier $other);
} 
