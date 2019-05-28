<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pick;
use App\Http\Requests\PickRequest;
use App\Http\Resources\PicksResource;
use App\Http\Requests\PicksUpdateRequest;

class PickController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $picks = Pick::paginate(1);

        return PicksResource::collection($picks);
        //return response($picks, 201);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PickRequest $request)
    {
        $picks = new Pick;

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
        $picks->user()->associate($request->user());

        $picks->save();
        //return response($request, 201);

        return new PicksResource($picks);
        // return response($picks, 201);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PicksUpdateRequest $request, Pick $pick)
    {

        $pick->team1 = $request->get('team1', $pick->team1);
        $pick->team2 = $request->get('team2', $pick->team2);
        $pick->team3 = $request->get('team3', $pick->team3);
        $pick->team4 = $request->get('team4', $pick->team4);
        $pick->team5 = $request->get('team5', $pick->team5);
        $pick->team6 = $request->get('team6', $pick->team6);
        $pick->team7 = $request->get('team7', $pick->team7);
        $pick->team8 = $request->get('team8', $pick->team8);
        $pick->team9 = $request->get('team9', $pick->team9);
        $pick->team10 = $request->get('team10', $pick->team10);
        $pick->team11 = $request->get('team11', $pick->team11);
        $pick->team12 = $request->get('team12', $pick->team12);
        $pick->team13 = $request->get('team13', $pick->team13);
        $pick->team14 = $request->get('team14', $pick->team14);
        $pick->team15 = $request->get('team15', $pick->team15);
        $pick->team16 = $request->get('team16', $pick->team16);

        $pick->spread1 = $request->get('spread1', $pick->spread1);
        $pick->spread2 = $request->get('spread2', $pick->spread2);
        $pick->spread3 = $request->get('spread3', $pick->spread3);
        $pick->spread4 = $request->get('spread4', $pick->spread4);
        $pick->spread5 = $request->get('spread5', $pick->spread5);
        $pick->spread6 = $request->get('spread6', $pick->spread6);
        $pick->spread7 = $request->get('spread7', $pick->spread7);
        $pick->spread8 = $request->get('spread8', $pick->spread8);
        $pick->spread9 = $request->get('spread9', $pick->spread9);
        $pick->spread10 = $request->get('spread10', $pick->spread10);
        $pick->spread11 = $request->get('spread11', $pick->spread11);
        $pick->spread12 = $request->get('spread12', $pick->spread12);
        $pick->spread13 = $request->get('spread13', $pick->spread13);
        $pick->spread14 = $request->get('spread14', $pick->spread14);
        $pick->spread15 = $request->get('spread15', $pick->spread15);
        $pick->spread16 = $request->get('spread16', $pick->spread16);

        $pick->save();
        //return response($request);
        return new PicksResource($pick);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pick $pick)
    {
        $pick->delete();

        return response('Deleted', 201);
    }
}
