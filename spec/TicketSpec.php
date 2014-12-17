<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TicketSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldBeAnInstanceOf('Ticket');
    }

    function it_can_be_read()
    {
        $this->setRead(true);

        $this->isRead()->shouldBe(true);
    }

    function it_can_be_unread()
    {
        $this->setRead(false);

        $this->isRead()->shouldBe(false);
    }
}
