<?php namespace BigName\Workflow;

trait EventRecorder
{
    private $recordedEvents = [];

    public function raise(DomainEvent $event)
    {
        $this->recordedEvents[] = $event;
    }

    public function getRecordedEvents()
    {
        return new DomainEvents($this->recordedEvents);
    }

    public function clearRecordedEvents()
    {
        $this->recordedEvents = [];
    }
} 