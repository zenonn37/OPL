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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



//auth
Route::post('/register', 'AuthController@register');
Route::post('/login', 'AuthController@login');


//admin only
Route::get('/schedules', 'TeamController@index');

Route::get('/schedules/{schedule}', 'TeamController@show');
Route::post('/schedules', 'TeamController@store');
Route::patch('/schedules', 'TeamController@update');
Route::delete('/schedules', 'TeamController@destroy');


//game user all
Route::get('/game', 'GameController@index');
//admin only
Route::get('/games/{game}', 'GameController@show');
Route::post('/games', 'GameController@store');
Route::patch('/games/{game}', 'GameController@update');
Route::delete('/games/{game}', 'GameController@destroy');



Route::get('/teams', 'TeamController@index');
Route::get('/teams/{team}', 'TeamController@show');
Route::post('/teams', 'TeamController@store');
Route::patch('/teams/{team}', 'TeamController@update');
Route::delete('/teams/{team}', 'TeamController@destroy');
