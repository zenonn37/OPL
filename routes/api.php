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
Route::get('/schedules', 'ScheduleController@index');

Route::get('/schedules/{schedule}', 'ScheduleController@show');
Route::post('/schedules', 'ScheduleController@store');
Route::patch('/schedules/{schedule}', 'ScheduleController@update');
Route::delete('/schedules/{schedule}', 'ScheduleController@destroy');


//game user all
Route::get('/games', 'GameController@index');
//admin only
Route::get('/games/{game}', 'GameController@show');
Route::post('/games', 'GameController@store');
Route::patch('/games/{game}', 'GameController@update');
Route::delete('/games/{game}', 'GameController@destroy');



//picks all
Route::get('/picks', 'PickController@index');
Route::get('/picks/{pick}', 'PickController@show');
Route::post('/picks', 'PickController@store');
Route::patch('/picks/{pick}', 'PickController@update');
Route::delete('/picks/{pick}', 'PickController@destroy');



Route::get('/teams', 'TeamController@index');
Route::get('/teams/{team}', 'TeamController@show');
Route::post('/teams', 'TeamController@store');
Route::patch('/teams/{team}', 'TeamController@update');
Route::delete('/teams/{team}', 'TeamController@destroy');
