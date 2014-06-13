<?php

namespace spec\BigName\Workflow;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ExecutionCommandBusSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BigName\Workflow\ExecutionCommandBus');
    }

    function it_is_a_command_bus()
    {
        $this->shouldBeAnInstanceOf('BigName\Workflow\CommandBus');
    }
}
