<?php

namespace spec\BigName\Workflow;

use BigName\Workflow\ArrayIsImmutable;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ImmutableArraySpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith([1,2,3]);
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
        $this[0]->shouldBe(1);
        $this[1]->shouldBe(2);
        $this[2]->shouldBe(3);
    }

    function it_will_throw_when_trying_to_set_items()
    {
        $this->shouldThrow(new ArrayIsImmutable)->duringOffsetSet('key', 'value');
    }

    function it_will_throw_when_trying_to_unset_items()
    {
        $this->shouldThrow(new ArrayIsImmutable)->duringOffsetUnset('key');
    }

    function it_can_join_items_together()
    {
        $this->join(',')->shouldBe('1,2,3');
    }

    function it_can_get_the_last_item()
    {
        $this->last()->shouldBe(3);
    }
}
