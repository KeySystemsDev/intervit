<?php namespace App\Http\Controllers;

class CotizacionController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Index Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function Cotizacion()
	{
		return view('cliente/cotizacion');
	}

}
