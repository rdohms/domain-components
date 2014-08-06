<?php namespace BigName\Workflow;

interface RecordsEvents
{
    public function raise(DomainEvent $event);
    public function releaseEvents();
}
