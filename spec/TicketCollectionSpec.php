<?php

namespace spec;

use TicketObj;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TicketCollectionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('TicketCollection');
    }

    function it_stores_a_collection_of_tickets(TicketObj $ticket)
    {
        $this->add($ticket);

        $this->shouldHaveCount(1);
    }

    function it_can_accept_multiple_tickets_to_add_at_once(TicketObj $ticket1, TicketObj $ticket2)
    {
        $this->add([$ticket1, $ticket2]);

        $this->shouldHaveCount(2);
    }

    function it_can_be_marked_as_read(TicketObj $ticket)
    {
        $ticket->read()->shouldBeCalled();

        $this->add($ticket);

        $this->markAsRead($ticket);
    }
}
