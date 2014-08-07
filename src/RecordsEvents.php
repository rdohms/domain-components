<?php namespace BigName\DomainComponents;

/**
 * Interface RecordsEvents
 * @package BigName\DomainComponents
 */
interface RecordsEvents
{
    /**
     * @param DomainEvent $event
     * @return null
     */
    public function raise(DomainEvent $event);

    /**
     * @return DomainEventCollection
     */
    public function releaseEvents();
}
