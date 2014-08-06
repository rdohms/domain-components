<?php

namespace spec\BigName\Workflow;

use BigName\Workflow\CannotModifyImmutableArrayException;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ImmutableArraySpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(['foo', 'bar', 'baz']);
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
        $this->offsetGet(0)->shouldBe('foo');
        $this->offsetGet(1)->shouldBe('bar');
        $this->offsetGet(2)->shouldBe('baz');
    }

    function it_will_disallow_offset_assignment()
    {
        $this->shouldThrow(new CannotModifyImmutableArrayException())->duringOffsetSet('key', 'value');
    }

    function it_will_disallow_offset_unset()
    {
        $this->shouldThrow(new CannotModifyImmutableArrayException())->duringOffsetUnset('key');
    }
}
