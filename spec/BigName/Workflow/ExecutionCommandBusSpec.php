<?php

namespace spec\BigName\Workflow;

use BigName\Workflow\Containers\Container;
use BigName\Workflow\Mapper;
use BigName\Workflow\Request;
use BigName\Workflow\Stubs\StubResponse;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ExecutionCommandBusSpec extends ObjectBehavior
{
    function let(Container $container, Mapper $mapper)
    {
        $this->beConstructedWith($container, $mapper);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('BigName\Workflow\ExecutionCommandBus');
    }

    function it_is_a_command_bus()
    {
        $this->shouldBeAnInstanceOf('BigName\Workflow\CommandBus');
    }

//    function it_returns_a_response_when_executing_a_request(Request $request)
//    {
//        $this->execute($request)->shouldReturnAnInstanceOf('BigName\Workflow\Response');
//    }
}
