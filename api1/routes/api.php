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

Route::get('empleados','App\Http\Controllers\EmpleadoController@getEmpleados');

Route::get('empleados/{id}','App\Http\Controllers\EmpleadoController@getEmpleadoById');

Route::post('empleados','App\Http\Controllers\EmpleadoController@addEmpleados');

Route::put('empleados/{id}', 'App\Http\Controllers\EmpleadoController@updateEmpleados');