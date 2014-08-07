<?php namespace BigName\DomainComponents;

interface RecordsEvents
{
    public function raise(DomainEvent $event);
    public function releaseEvents();
}
