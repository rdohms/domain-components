<?php

namespace spec\BigName\Workflow;

use BigName\Workflow\AttemptToModifyImmutableArray;
use BigName\Workflow\DomainEvent;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ImmutableTypedArraySpec extends ObjectBehavior
{
        function let(DomainEvent $event)
        {
            $this->beAnInstanceOf('BigName\Workflow\DomainEventArray');
            $this->beConstructedWith([$event, $event, $event]);
        }

    function it_is_initializable()
    {
        $this->shouldHaveType('BigName\Workflow\ImmutableTypedArray');
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

    function it_will_disallow_offset_assignment()
    {
        $this->shouldThrow(new AttemptToModifyImmutableArray())->duringOffsetSet('key', 'value');
    }

    function it_will_disallow_offset_unset()
    {
        $this->shouldThrow(new AttemptToModifyImmutableArray())->duringOffsetUnset('key');
    }
}
