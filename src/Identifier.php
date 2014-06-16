<?php namespace BigName\Workflow;

interface Identifier
{
    public function getId();
    public function equal(Identifier $other);
} 