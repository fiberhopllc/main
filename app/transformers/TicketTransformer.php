<?php
    namespace transformers;

    use Ticket;
    use League\Fractal;

    class TicketTransformer extends Fractal\TransformerAbstract {
        public function transform(Ticket $ticket)
        {
            /*
            +-------------+------------------+------+-----+---------------------+-------+
            | Field       | Type             | Null | Key | Default             | Extra |
            +-------------+------------------+------+-----+---------------------+-------+
            | id          | int(10) unsigned | NO   | PRI | NULL                |       |
            | customer_id | int(11)          | NO   |     | NULL                |       |
            | category_id | int(11)          | NO   |     | NULL                |       |
            | assigned    | blob             | NO   |     | NULL                |       |
            | employee_id | int(11)          | NO   |     | NULL                |       |
            | subject     | varchar(255)     | NO   |     | NULL                |       |
            | body        | text             | NO   |     | NULL                |       |
            | created_at  | timestamp        | NO   |     | 0000-00-00 00:00:00 |       |
            | updated_at  | timestamp        | NO   |     | 0000-00-00 00:00:00 |       |
            | deleted_at  | timestamp        | YES  |     | NULL                |       |
            +-------------+------------------+------+-----+---------------------+-------+
            */
            return [
                'id'          => (int) $ticket->id,
                'customer_id' => (int) $ticket->customer_id,
                'category_id' => (int) $ticket->category_id,
                'assigned'    => (bool) $ticket->assigned,
                'employee_id' => (int) $ticket->employee_id,
                'subject'     => (string) $ticket->subject,
                'body'        => (string) $ticket->body,
                'created_at'  => (string) $ticket->created_at,
                'updated_at'  => (string) $ticket->updated_at,
                'deleted_at'  => (string) $ticket->deleted_at
            ];
        }
    }