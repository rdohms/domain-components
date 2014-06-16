<?php

namespace spec\BigName\Workflow;

use BigName\Workflow\ArrayIsImmutable;
use BigName\Workflow\DomainEvent;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ImmutableArraySpec extends ObjectBehavior
{
    function let(DomainEvent $event)
    {
        $this->beAnInstanceOf('BigName\Workflow\DomainEvents');
        $this->beConstructedWith([$event, $event, $event]);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('BigName\Workflow\ImmutableArray');
    }

    function it_can_count_the_items()
    {
        $this->count()->shouldBe(3);
    }

    function it_can_get_items()
    {
        $this->offsetGet(0)->shouldBeAnInstanceOf('BigName\Workflow\DomainEvent');
        $this->offsetGet(1)->shouldBeAnInstanceOf('BigName\Workflow\DomainEvent');
        $this->offsetGet(2)->shouldBeAnInstanceOf('BigName\Workflow\DomainEvent');
    }

    function it_will_throw_when_trying_to_set_items()
    {
        $this->shouldThrow(new ArrayIsImmutable)->duringOffsetSet('key', 'value');
    }

    function it_will_throw_when_trying_to_unset_items()
    {
        $this->shouldThrow(new ArrayIsImmutable)->duringOffsetUnset('key');
    }
}
