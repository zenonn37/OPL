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



Route::middleware('auth:api')->group(function () {



    Route::post('/logout', 'AuthenicateController@logout');



    //picks all

    Route::get('/league', 'LeagueController@index');
    Route::get('/league/{league}', 'LeagueController@show');
    Route::post('/league', 'LeagueController@store');
    Route::patch('/league/{league}', 'LeagueController@update');
    Route::delete('/league/{league}', 'LeagueController@destroy');


    Route::get('/games', 'GameController@index');
    //admin only
    Route::get('/games/{game}', 'GameController@show');
    Route::post('/games', 'GameController@store');
    Route::patch('/games/{game}', 'GameController@update');
    Route::delete('/games/{game}', 'GameController@destroy');
});

Route::get('/user', 'AuthenicateController@user')->middleware('auth:api');


Route::get('/picks', 'PickController@index')->middleware('auth:api');

//auth
Route::post('/register', 'AuthenicateController@register');
Route::post('/login', 'AuthenicateController@login');


//admin only
Route::get('/schedules', 'ScheduleController@index')->middleware('auth:api');

Route::get('/schedules/{schedule}', 'ScheduleController@show')->middleware('auth:api');
Route::post('/schedules', 'ScheduleController@store')->middleware('auth:api');
Route::patch('/schedules/{schedule}', 'ScheduleController@update')->middleware('auth:api');
Route::delete('/schedules/{schedule}', 'ScheduleController@destroy')->middleware('auth:api');






//picks all

Route::get('/picks/{pick}', 'PickController@show')->middleware('auth:api');

Route::post('/picks', 'PickController@store')->middleware('auth:api');

Route::patch('/picks/{pick}', 'PickController@update')->middleware('auth:api');

Route::delete('/picks/{pick}', 'PickController@destroy')->middleware('auth:api');




Route::get('/teams', 'TeamController@index');
Route::get('/teams/{team}', 'TeamController@show');
Route::post('/teams', 'TeamController@store');
Route::patch('/teams/{team}', 'TeamController@update');
Route::delete('/teams/{team}', 'TeamController@destroy');
