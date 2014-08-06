<?php

namespace spec\BigName\Workflow;

use BigName\Workflow\DomainEvent;
use BigName\Workflow\InvalidTypeException;
use BigName\Workflow\Stubs\RecordsEventsStub;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TypedImmutableArraySpec extends ObjectBehavior
{
    function let(DomainEvent $root)
    {
        $this->beAnInstanceOf('BigName\Workflow\Stubs\DomainEventImmutableArray');
        $this->beConstructedWith([$root, $root, $root]);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('BigName\Workflow\Stubs\DomainEventImmutableArray');
    }

    function it_throws_an_exception_when_attempting_to_contain_an_invalid_type()
    {
        $this->shouldThrow(new InvalidTypeException)->during('__construct', [['foo']]);
    }
}
