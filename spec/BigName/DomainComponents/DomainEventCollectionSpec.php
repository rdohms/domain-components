<?php

namespace spec\BigName\DomainComponents;

use BigName\DomainComponents\DomainEvent;
use BigName\Immutables\InvalidType;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DomainEventCollectionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beAnInstanceOf('BigName\DomainComponents\DomainEventCollection');
    }

    function it_stores_domain_events(DomainEvent $event)
    {
        $this->beConstructedWith([$event]);
        $this->offsetGet(0)->shouldBe($event);
    }

    function it_throws_a_type_error_for_other_values()
    {
        $this->shouldThrow(new InvalidType)->during('__construct', [['cats', 'dogs']]);
    }
}
