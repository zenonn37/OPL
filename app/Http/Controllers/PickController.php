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

        $picks->spread1 = $request->spread1;
        $picks->spread2 = $request->spread2;
        $picks->spread3 = $request->spread3;
        $picks->spread4 = $request->spread4;

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
