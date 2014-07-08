<?php

class BookingController extends \BaseController {


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('booking/form');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
		$booking = new Booking;

		$booking -> id_user = Input::get('id_user');
		$booking -> id_room = Input::get('id_room');
		$booking -> date_start = Input::get('date_start');
		$booking -> date_end = Input::get('date_end');

		$booking->save();
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

		$booking = Booking::find($id);
		return $booking;

	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$booking = Booking::find($id);
		$booking -> id_user = Input::get('id_user');
		$booking -> id_room = Input::get('id_room');
		$booking -> date_start = Input::get('date_start');
		$booking -> date_end = Input::get('date_end');

		$booking->save();
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$booking = Booking::find($id);

		$booking->delete();
	}


}
