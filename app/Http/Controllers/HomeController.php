<?php namespace tesis\Http\Controllers;


use tesis\Http\Requests;
use tesis\Http\Controllers\Controller;

use tesis\Tesis;
use Illuminate\Http\Request;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tesis = Tesis::where('estado', 'en_espera')->paginate(10);
		//$tesis = Tesis::paginate(10)->where('estado', 'en_espera');

		return view('home', compact('tesis'));

		//dd($tesis);
	}
}
