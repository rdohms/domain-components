<?php namespace BigName\Workflow;

abstract class AggregateRoot
{
    private $raisedEvents = [];

    public function raise(DomainEvent $event)
    {
        $this->raisedEvents[] = $event;
    }

    public function releaseEvents()
    {
        return new DomainEventArray($this->raisedEvents);
    }
}
