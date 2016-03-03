<?php namespace tesis\Http\Controllers;

use tesis\Http\Requests;
use tesis\Http\Controllers\Controller;

use tesis\Tesis;
use Illuminate\Http\Request;

class TesisController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
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
	public function store(Request $request)
	{	

		//obtenemos el campo file definido en el formulario
		$file = $request->file('file');
		$nombre = $file->getClientOriginalName();
		//indicamos que queremos guardar un nuevo archivo en el disco local
		\Storage::disk('local')->put($nombre,  \File::get($file));

		$tesis = new Tesis($request->all());
		//$tesis->dir = '/colection/'.$file->getClientOriginalName();
		$tesis->dir = '/colection/'.$nombre;
		$tesis->estado = 'en_espera';
		$tesis->save();

		//dd($request->all());

		return redirect()->route('invitado.index');
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
		//dd("tesis que se va aprobar: ". $id);

		$tesis = Tesis::findOrFail($id);
		$tesis->estado = 'verificado';
		$tesis->save();

		return redirect()->route('home.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//dd("eliminado: ". $id);

		Tesis::destroy($id);
		return redirect()->route('home.index');
	}

}
