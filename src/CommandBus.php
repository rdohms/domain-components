<?php namespace BigName\Workflow;

interface CommandBus
{
    public function execute(Request $request);
}