<ul>
    @foreach ($tickets as $ticket)
    <p>
        ticket_id:      {{ $ticket->id }}          <br />
        customer_id:    {{ $ticket->customer_id }} <br />
        category_id:    {{ $ticket->category_id }} <br />
        assigned:       {{ $ticket->assigned    }} <br />
        employee_id:    {{ $ticket->employee_id }} <br />
        subject:        {{ link_to_route('api.v1.tickets.show', $ticket->subject, $ticket->id) }} <br />
        body:           {{ $ticket->body        }} <br />
    </p>
    @endforeach
</ul>