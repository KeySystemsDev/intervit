<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/cotizacion', 'CotizacionController@Cotizacion');
Route::get('/cuentas-pendientes', 'CuentasPendientesController@CuentasPendientes');
Route::get('/', 'ProductosController@Productos');
Route::get('/producto-detalle', 'ProductoDetalleController@ProductoDetalle');

Route::get('index-admin', 'IndexAdminController@index');

Route::get('home', 'HomeController@index');
Route::get('/registrar', 'RegistrarController@registrar');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
