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

// chart api
Route::get('chart', 'ChartsApiController@index')->name('api.chart');
Route::get('cjarak', 'ChartsApiController@cjarak')->name('api.cjarak');
Route::get('csusistem', 'ChartsApiController@csusistem')->name('api.csusistem');
Route::get('cbmp', 'ChartsApiController@cbmp')->name('api.cbmp');
Route::get('cgas', 'ChartsApiController@cgas')->name('api.cgas');
