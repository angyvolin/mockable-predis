<?php

namespace spec\RodrigoDiez\MockablePredis;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ClientSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('RodrigoDiez\MockablePredis\Client');
    }

    function it_is_a_predis_client()
    {
        $this->shouldBeAnInstanceOf('Predis\Client');
    }
}
