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
Route::get('datos/{curp}', 'ControllerHistDatosNew@show');
Route::post('datos/create', 'ControllerHistDatosNew@store' );
Route::delete('datos/delete/{curp}', 'ControllerHistDatosNew@destroy' );
Route::put('datos/update/{curp}', 'ControllerHistDatosNew@update' );


/**
 * 
 */
Route::get('datospen/show', 'ControllerDatosPen@index');
Route::get('datospen/{curp}', 'ControllerDatosPen@show');
Route::post('datospen/create', 'ControllerDatosPen@store' );
Route::delete('datospen/delete/{curp}', 'ControllerDatosPen@destroy' );
Route::put('datospen/update/{curp}', 'ControllerDatosPen@update' );