<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\LeagueResource;
use App\Http\Requests\LeagueRequest;
use App\League;
use App\Schedule;

class LeagueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $league = League::where('user_id', auth()->user()->id)->get();

        return LeagueResource::collection($league);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LeagueRequest $request)
    {
        $league = new League;
        $league->user()->associate($request->user());
        $league->name = $request->name;
        $league->sport = $request->sport;

        $league->save();
        return new LeagueResource($league);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(League $league)
    {
        return new LeagueResource($league);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LeagueRequest $request, League $league)
    {

        $league->name = $request->get('name', $league->name);
        $league->sport = $request->get('sport', $league->sport);

        $league->save();

        return new LeagueResource($league);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(League $league)
    {
        $league->delete();

        return response($league, 201);
    }
}
