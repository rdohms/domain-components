<?php

namespace spec\BigName\Workflow;

use BigName\Workflow\DomainEvent;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AggregateRootSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('BigName\Workflow\Stubs\AggregateRootStub');
    }

    function it_can_raise_events(DomainEvent $event)
    {
        $this->raise($event);
        $this->releaseEvents()->shouldHaveCount(1);
        $this->raise($event);
        $this->releaseEvents()->shouldHaveCount(2);
        $this->releaseEvents()->shouldBeAnInstanceOf('BigName\Workflow\DomainEventArray');
    }
}
