<?php namespace BigName\DomainComponents;

interface CommandBus
{
    public function execute(CommandRequest $request);
}
