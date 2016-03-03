<?php namespace tesis\Http\Controllers;

use tesis\Http\Requests;
use tesis\Http\Controllers\Controller;

use tesis\Tesis;
use Illuminate\Http\Request;

class InvitadoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	
	public function index(Request $request)
	{
		$tesis = Tesis::titulo($request->get('titulo'))
						->Linea($request->get('linea'))
						->where('estado', 'verificado')
						->orderBy('title', 'ASC')
						->paginate(15);
		
		return view('invitado-home', compact('tesis'));
	}

	public function publicar()
	{	
		//echo "esto es una prueba";
		return view('publicar-tesis');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
