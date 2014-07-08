<?php

class UserController extends \BaseController {

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	
	public function store()
	{

		$user = new Users;

		$user -> name = Input::get("name");
		$user -> surname = Input::get("surname");
		$user -> email = Input::get("email");
		$user -> password = Input::get("password");


		$user->save();

		return $user;

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = Users::find($id);
		return $user;
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

	$user = Users::find($id);
	$user -> name = Input::get("name");
	$user -> surname = Input::get("surname");
	$user -> email = Input::get("email");
	$user -> password = Input::get("password");


	$user->save();

	return $user;

	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = Users::find($id);

		$user->delete();
	}


}
