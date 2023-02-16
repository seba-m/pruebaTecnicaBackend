<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/actual', 'App\Http\Controllers\MonedaController@index'); //mostrar todas las monedas
Route::get('/actual/{nombre}', 'App\Http\Controllers\MonedaController@show'); //mostrar una moneda en especifico

Route::get('/historial', 'App\Http\Controllers\HistorialController@index'); //mostrar todo el historial
Route::get('/historial/{nombre}', 'App\Http\Controllers\HistorialController@show'); //mostrar el historial de una moneda en especifico
