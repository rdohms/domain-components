<?php namespace BigName\DomainComponents;

interface CommandHandler
{
    public function handle(CommandRequest $request);
} 
