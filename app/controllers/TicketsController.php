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
		$tickets = Ticket::all();

        return Response::json($tickets, $status=200, $headers=[], $options=JSON_PRETTY_PRINT);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /tickets/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /tickets
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /tickets/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $ticket = Ticket::withTrashed()->where('id', $id)->get();

        return Response::json($ticket, $status=200, $headers=[], $options=JSON_PRETTY_PRINT);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /tickets/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /tickets/{id}
	 *
	 * @param  int  $id
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
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $ticket = Ticket::find($id);

        $ticket->delete();
	}

}