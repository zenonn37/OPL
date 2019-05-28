<?php

namespace App\Http\Controllers;

use App\Schedule;

use Illuminate\Http\Request;
use App\Http\Resources\Schedule as ScheduleResource;
use App\Http\Requests\ScheduleRequest;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $schedule = Schedule::paginate(5);

        return ScheduleResource::collection($schedule);
    }

    public function show(Schedule $schedule)
    {

        return new ScheduleResource($schedule);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ScheduleRequest $request)
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
    public function update(ScheduleRequest $request, Schedule $schedule)
    {

        $schedule->home = $request->get('home', $schedule->home);
        $schedule->away = $request->get('away', $schedule->away);
        $schedule->game = $request->get('game', $schedule->game);
        $schedule->favorite = $request->get('favorite', $schedule->favorite);
        $schedule->spread = $request->get('spread', $schedule->spread);
        $schedule->location = $request->get('location', $schedule->location);
        $schedule->time = $request->get('time', $schedule->time);


        $schedule->save();
        return new ScheduleResource($schedule);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {
        $schedule->delete();
        return response('Deleted', 201);
    }
}
