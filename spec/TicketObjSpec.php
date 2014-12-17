<?php

namespace spec;

use TicketObj;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TicketObjSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldBeAnInstanceOf('TicketObj');
    }

    function it_can_be_read()
    {
        $this->setRead(true);

        $this->isRead()->shouldBe(true);
    }

    function it_can_be_unread()
    {
        $this->setUnread();

        $this->isRead()->shouldBe(false);
    }

    function it_can_be_marked_as_read()
    {
        $this->read();

        $this->shouldBeRead();
    }
}
