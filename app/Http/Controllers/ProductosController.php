<?php namespace App\Http\Controllers;

class ProductosController extends Controller {

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
	public function Productos()
	{

		$proyectos = \DB::select('CALL RQSP_COONSULTA_ART_COSTOS()');
		dd($proyectos);
		return view('cliente/productos');
	}

}
