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
    }
}
