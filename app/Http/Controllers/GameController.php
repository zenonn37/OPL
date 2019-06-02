<?php

namespace App\Http\Controllers;

use App\Game;
use App\Schedule;
use Illuminate\Http\Request;
use App\Http\Requests\GameCreateRequest;
use App\Http\Resources\Game as GameResource;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$games = Game::where('user_id', auth()->user()->id)->get();


        $games = Game::paginate(1);

        return GameResource::collection($games);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GameCreateRequest $request)
    {
        $game = new Game;
        $game->games = $request->games;
        $game->week = $request->week;
        $game->date = $request->date;
        $game->league_id = $request->league_id;
        $game->user()->associate($request->user());

        // $schedule = new Schedule;
        // $schedule->home = $request->home;
        // $schedule->away = $request->away;
        // $schedule->game = $request->game;
        // $schedule->favorite = $request->favorite;
        // $schedule->spread = $request->spread;
        // $schedule->location = $request->location;
        // $schedule->time = $request->time;


        $game->save();
        // $game->schedules()->save($schedule);

        return new GameResource($game);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
