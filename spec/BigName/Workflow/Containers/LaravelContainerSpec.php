<?php

namespace spec\BigName\Workflow\Containers;

use BigName\Workflow\Stubs\StubObject;
use Illuminate\Container\Container;
use InvalidArgumentException;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LaravelContainerSpec extends ObjectBehavior
{
    function let(Container $container, StubObject $object)
    {
        $container->make(Argument::type('string'))->willReturn($object);

        $this->beConstructedWith($container);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('BigName\Workflow\Containers\LaravelContainer');
    }

    function it_is_a_container()
    {
        $this->shouldBeAnInstanceOf('BigName\Workflow\Containers\Container');
    }

    function it_makes_an_object()
    {
        $this->make('BigName\Workflow\Stubs\StubObject')->shouldReturnAnInstanceOf('BigName\Workflow\Stubs\StubObject');
    }

    function it_only_accepts_a_string_when_making_an_object()
    {
        $this->shouldThrow(new InvalidArgumentException)->duringMake(123);
    }
}
