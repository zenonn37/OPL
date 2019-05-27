<?php

namespace App\Http\Controllers;

use App\Schedule;

use Illuminate\Http\Request;
use App\Http\Resources\Schedule as ScheduleResource;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $schedule = Schedule::all();

        return ScheduleResource::collection($schedule);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $schedule = new Schedule;
        $schedule->game_id = $request->game_id;
        $schedule->home = $request->home;
        $schedule->away = $request->away;
        $schedule->game = $request->game;
        $schedule->favorite = $request->favorite;
        $schedule->spread = $request->spread;
        $schedule->location = $request->location;
        $schedule->time = $request->time;

        $schedule->save();
        return new ScheduleResource($schedule);
    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schedule $schedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {
        //
    }
}
