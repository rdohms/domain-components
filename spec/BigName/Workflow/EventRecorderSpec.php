<?php

namespace spec\BigName\Workflow;

use BigName\Workflow\DomainEvent;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class EventRecorderSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('BigName\Workflow\Stubs\EventRecorderStub');
    }

    function it_can_raise_events(DomainEvent $event)
    {
        $this->raise($event);
        $this->getRecordedEvents()->shouldHaveCount(1);
        $this->raise($event);
        $this->getRecordedEvents()->shouldHaveCount(2);
        $this->getRecordedEvents()->shouldBeAnInstanceOf('BigName\Workflow\DomainEvents');
    }

    function it_can_clear_events(DomainEvent $event)
    {
        $this->raise($event);
        $this->clearRecordedEvents();
        $this->getRecordedEvents()->shouldHaveCount(0);
    }
}
