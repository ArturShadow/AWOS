<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//rutas para los vendedores
Route::get('vendedores', 'App\Http\Controllers\VendedorController@getVendedores'); //cuando se acceda a la ruta vendedores por un metodo GET invoca al metodo getVendedores
Route::get('vendedores/{id}', 'App\Http\Controllers\VendedorController@getVendedorById'); //cuando se acceda a la ruta vendedores/id por un metodo GET invoca al metodo getVendedoreById
Route::post('vendedores', 'App\Http\Controllers\VendedorController@addVendedor'); //cuando se acceda a la ruta vendedores por un metodo POST invoca al metodo addVendedores y en el body de la peticion se mandan los datos
Route::put('vendedores/{id}', 'App\Http\Controllers\VendedorController@updateVendedor'); //cuando se acceda a la ruta vendedores por un metodo PUT invoca al metodo updateVendedores y en el body de la peticion se madan los campos que se cambiaran y el valor
Route::delete('vendedores/{id}', 'App\Http\Controllers\VendedorController@deleteVendedor'); //cuando se acceda a la ruta vendedores/id por un metodo DELETE invoca al metodo deleteVendedores

// Ruta para los clientes
Route::get('clientes', 'App\Http\Controllers\ClienteController@getClientes'); 
Route::get('clientes/{id}', 'App\Http\Controllers\ClienteController@getClienteById');
Route::post('clientes', 'App\Http\Controllers\ClienteController@addCliente');
Route::put('clientes/{id}', 'App\Http\Controllers\ClienteController@updateCliente');
Route::delete('clientes/{id}', 'App\Http\Controllers\ClienteController@deleteCliente');