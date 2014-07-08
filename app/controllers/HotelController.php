<?php

class HotelController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$hotels=Hotel::all();
		return View::make('hotels/listhotel')->with("hotels",$hotels);
	}



	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$hotel= new Hotel;

		$hotel->name = Input::get('name');
		$hotel->description = Input::get('description');
		$hotel->location = Input::get('location');
		$hotel->capacity = Input::get('capacity');

		$hotel->save();

		return $hotel;
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

		$hotel=Hotel::find($id);
		return View::make('hotels/hotel')->with("hotel",$hotel);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{


		$hotel= Hotel::find($id);

		$hotel->name = Input::get('name');
		$hotel->description = Input::get('description');
		$hotel->location = Input::get('location');
		$hotel->capacity = Input::get('capacity');

		$hotel->save();

		return $hotel;		
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$hotel= Hotel::find($id);

		$hotel->delete();

	}

	/**
	 * Upload specified resource to storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function upload() {
        $target_path = "images/".$_FILES['file']['name'];

        if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
        	return Response::make(("Archivo ". $target_path . " subido correctamente"),200);	
        } else{
			return Response::make('Error al subir el archivo',400);	
        }
}


}
