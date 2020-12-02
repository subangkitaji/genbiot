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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/sreaktor', 'SuhureaktorController@create');
Route::post('/jarak', 'JarakController@create');
Route::post('/susistem', 'SusistemController@create');
Route::post('/bmp', 'BmpController@create');
Route::post('/gas', 'GasController@create');
