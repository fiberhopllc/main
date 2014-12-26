<?php

    class TicketsController extends \BaseController {

        /**
         * Display a listing of the resource.
         * GET /tickets
         *
         * @return Response
         */
        public function index()
        {
            Activity::log('api.v1.tickets.index');

            $tickets = Ticket::all();

            return Response::json($tickets, $status = 200, $headers = [ ], $options = JSON_PRETTY_PRINT);
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
            // Return 201 "Error" code:  'Resource created'
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

            // Extracted withTrash()
            $ticket = Ticket::where('id', $id)->select(array( 'body' ))->get();

            return Response::json($ticket, $status = 200, $headers = [ ], $options = JSON_PRETTY_PRINT);
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

            $ticket = Ticket::withTrashed()->where('id', $id)->select(array( 'body' ))->get();

            return Response::json($ticket, $status = 200, $headers = [ ], $options = JSON_PRETTY_PRINT);
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
        {
            //
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