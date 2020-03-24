<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


/**
 * Rutas para tabla de Directo
 */
Route::get('directo/show', 'ControllerDirecto@index');
Route::get('directo/{curp}', 'ControllerDirecto@show');
Route::post('directo/create', 'ControllerDirecto@store' );
Route::delete('directo/delete/{curp}', 'ControllerDirecto@destroy' );
Route::put('directo/update/{curp}', 'ControllerDirecto@update' );

/**
 * Rutas para HistDatosNew
 */
Route::get('datos/show', 'ControllerHistDatosNew@index');
Route::get('datos/{num_pen}', 'ControllerHistDatosNew@show');
Route::post('datos/create', 'ControllerHistDatosNew@store' );
Route::delete('datos/delete/{num_pen}', 'ControllerHistDatosNew@destroy' );
Route::put('datos/update/{num_pen }', 'ControllerHistDatosNew@update' );


/**
 * 
 */
Route::get('datospen/show', 'ControllerDatosPen@index');
Route::get('datospen/{num_pen}', 'ControllerDatosPen@show');
Route::post('datospen/create', 'ControllerDatosPen@store' );
Route::delete('datospen/delete/{num_pen}', 'ControllerDatosPen@destroy' );
Route::put('datospen/update/{num_pen}', 'ControllerDatosPen@update' );