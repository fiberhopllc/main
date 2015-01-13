<?php
    use basicAuth\formValidation\TicketForm as TicketForm;
    use Laracasts\Validation\FormValidationException;

    class TicketsController extends \BaseController {
        protected $ticketForm;

        public function __construct(TicketForm $ticketForm)
        {
            $this->ticketForm = $ticketForm;
        }

        /**
         * Display a listing of the resource.
         * GET /tickets
         *
         * @return Response
         */
        public function index()
        {
            Activity::log('api.v1.tickets.index');

            $json = [
                'error'   => false,
                'code'    => 200,
                'message' => 'Success'
            ];


            $tickets = Ticket::all();

            return Response::json([ $tickets, $json ], $status = 200, $headers = [ ], $options = JSON_PRETTY_PRINT);
        }

        /**
         * Show the form for creating a new resource.
         * GET /tickets/create
         *
         * @return Response
         */
        public function create()
        {
            Activity::log('api.v1.tickets.create');

            $json = [
                'error'   => true,
                'code'    => 405,
                'message' => 'Method Not Allowed'
            ];

            return Response::json($json, $status = 405, $headers = [ ], $options = JSON_PRETTY_PRINT);
        }

        /**
         * Store a newly created resource in storage.
         * POST /tickets
         *
         * @return Response
         */
        public function store()
        {
            $ticket = new Ticket();

            $ticket->customer_id = Auth::user()->id;
            $ticket->subject     = Input::get('subject');
            $ticket->body        = Input::get('body');


            try {
                $this->ticketForm->validate(Input::only('subject', 'body'));
                $ticket->save();
            } catch (FormValidationException $e) {
                return Response::json($e->getErrors(), $status = 403, $headers = [ ], $options = JSON_PRETTY_PRINT);
            }

            Activity::log('api.v1.tickets.store');

            // Return 201 "Error" code:  'Resource created'
            return Response::json(array(
                    'error'   => false,
                    'tickets' => $ticket->toArray() ),
                201
            );
        }

        /**
         * Display the specified resource.
         * GET /tickets/{id}
         *
         * @param  int $id
         * @return Response
         */
        public function show($id)
        {
            Activity::log('api.v1.tickets.show:{' . $id . '}');

            $json     = [ 'error' => false, 'code' => 200, 'message' => 'Success' ];
            $json_204 = [ 'error' => false, 'code' => 204, 'message' => 'No Content' ];

            // Extracted withTrash()
            $ticket = Ticket::where('id', $id)->select(array( 'body' ))->get();

            if ($ticket->count() === 0) {
                return Response::json([ $ticket, $json_204 ], $status = 204, $headers = [ ], $options = JSON_PRETTY_PRINT);
            }

            return Response::json([ $ticket, $json ], $status = 200, $headers = [ ], $options = JSON_PRETTY_PRINT);
        }

        /**
         * Display the specified resource.
         * GET /tickets/{id}/showwithtrashed
         *
         * @param  int $id
         * @return Response
         */
        public function showWithTrashed($id)
        {
            Activity::log('api.v1.tickets.showWithTrashed:{' . $id . '}');

            $json = [
                'error'   => false,
                'code'    => 200,
                'message' => 'Success'
            ];

            $ticket = Ticket::withTrashed()->where('id', $id)->select(array( 'body' ))->get();

            return Response::json([ $ticket, $json ], $status = 200, $headers = [ ], $options = JSON_PRETTY_PRINT);
        }

        /**
         * Show the form for editing the specified resource.
         * GET /tickets/{id}/edit
         *
         * @param  int $id
         * @return Response
         */
        public function edit($id)
        {
            Activity::log('api.v1.tickets.edit:{' . $id . '}');

            $json = [
                'error'   => true,
                'code'    => 405,
                'message' => 'Method Not Allowed'
            ];

            return Response::json($json, $status = 405, $headers = [ ], $options = JSON_PRETTY_PRINT);
        }

        /**
         * Update the specified resource in storage.
         * PUT /tickets/{id}
         *
         * @param  int $id
         * @return Response
         */
        public function update($id)
        { // https://github.com/tj/deploy
            try {
                $ticket = Ticket::where('customer_id', Auth::user()->id)->withTrashed()->find($id);
                $ticket->subject = Input::get('subject');
                $ticket->body = Input::get('body');
                $ticket->deleted_at = null;

                $this->ticketForm->validate(Input::only('subject', 'body'));

                $ticket->save();
            } catch (FormValidationException $e) {
                return Response::json($e->getErrors(), $status = 403, $headers = [ ], $options = JSON_PRETTY_PRINT);
            } catch (Exception $e) {
                return Response::json(['error' => 'Query returned null result.'], $status = 403, $headers = [ ], $options = JSON_PRETTY_PRINT);
            }

            Activity::log('api.v1.tickets.update:{' . $id . '}');

            return Response::json(array(
                    'error'   => false,
                    'message' => 'Ticket #{' . $ticket->id . '} updated' ),
                200
            );
        }

        /**
         * Remove the specified resource from storage.
         * DELETE /tickets/{id}
         *
         * @param  int $id
         * @return Response
         */
        public function destroy($id)
        {
            Ticket::findOrFail($id)->delete();

            Activity::log('api.v1.tickets.destroy:{' . $id . '}');

            $json = [
                'error'   => false,
                'code'    => 204,
                'message' => 'No Content'
            ];

            return Response::json($json, $status = 204, $headers = [ ], $options = JSON_PRETTY_PRINT);
        }
    }
