<?php

class TicketCollection implements Countable
{

    protected $collection;

    public function add($ticket)
    {
        if (is_array($ticket))
        {
            return array_map([$this, 'add'], $ticket);
        }
        $this->collection[] = $ticket;
    }

    public function count()
    {
        return count($this->collection);
    }

    public function markAsRead($ticket)
    {
        $ticket->read();
    }
}
