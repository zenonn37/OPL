<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Picks;
use App\Http\Requests\PickRequest;

class PickController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $picks = Picks::all();

        return response($picks, 201);
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
    public function store(PickRequest $request)
    {
        $picks = new Picks;

        $picks->team1 = $request->team1;
        $picks->team2 = $request->team2;
        $picks->team3 = $request->team3;
        $picks->team4 = $request->team4;
        $picks->team5 = $request->team5;
        $picks->team6 = $request->team6;
        $picks->team7 = $request->team7;
        $picks->team8 = $request->team8;
        $picks->team9 = $request->team9;
        $picks->team10 = $request->team10;
        $picks->team11 = $request->team11;
        $picks->team12 = $request->team12;
        $picks->team13 = $request->team13;
        $picks->team14 = $request->team14;
        $picks->team15 = $request->team15;
        $picks->team16 = $request->team16;

        $picks->spread1 = $request->spread1;
        $picks->spread2 = $request->spread2;
        $picks->spread3 = $request->spread3;
        $picks->spread4 = $request->spread4;
        $picks->spread5 = $request->spread5;
        $picks->spread6 = $request->spread6;
        $picks->spread7 = $request->spread7;
        $picks->spread8 = $request->spread8;
        $picks->spread9 = $request->spread9;
        $picks->spread10 = $request->spread10;
        $picks->spread11 = $request->spread11;
        $picks->spread12 = $request->spread12;
        $picks->spread13 = $request->spread13;
        $picks->spread14 = $request->spread14;
        $picks->spread15 = $request->spread15;
        $picks->spread16 = $request->spread16;

        $picks->save();

        return response($picks, 201);
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
