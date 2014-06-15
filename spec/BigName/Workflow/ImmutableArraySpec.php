<?php

namespace spec\BigName\Workflow;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ImmutableArraySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BigName\Workflow\ImmutableArray');
    }
}
