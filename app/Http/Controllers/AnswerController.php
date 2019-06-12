<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\AnswerResource;
use App\Http\Requests\AnswerRequest;
use App\Answer;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $answer = Answer::all();

        return AnswerResource::collection($answer);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnswerRequest $request)
    {

        $answer = new Answer;

        $answer->team1 = $request->team1;
        $answer->team2 = $request->team2;
        $answer->team3 = $request->team3;
        $answer->team4 = $request->team4;
        $answer->team5 = $request->team5;
        $answer->team6 = $request->team6;
        $answer->team7 = $request->team7;
        $answer->team8 = $request->team8;
        $answer->team9 = $request->team9;
        $answer->team10 = $request->team10;
        $answer->team11 = $request->team11;
        $answer->team12 = $request->team12;
        $answer->team13 = $request->team13;
        $answer->team14 = $request->team14;
        $answer->team15 = $request->team15;
        $answer->team16 = $request->team16;

        $answer->spread1 = $request->spread1;
        $answer->spread2 = $request->spread2;
        $answer->spread3 = $request->spread3;
        $answer->spread4 = $request->spread4;
        $answer->spread5 = $request->spread5;
        $answer->spread6 = $request->spread6;
        $answer->spread7 = $request->spread7;
        $answer->spread8 = $request->spread8;
        $answer->spread9 = $request->spread9;
        $answer->spread10 = $request->spread10;
        $answer->spread11 = $request->spread11;
        $answer->spread12 = $request->spread12;
        $answer->spread13 = $request->spread13;
        $answer->spread14 = $request->spread14;
        $answer->spread15 = $request->spread15;
        $answer->spread16 = $request->spread16;
        $answer->user()->associate($request->user());



        $answer->save();

        return new AnswerResource($answer);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Answer $answer)
    {
        return new AnswerResource($answer);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AnswerRequest $request, Answer $answer)
    {
        $answer->team1 = $request->get('team1', $answer->team1);
        $answer->team2 = $request->get('team2', $answer->team2);
        $answer->team3 = $request->get('team3', $answer->team3);
        $answer->team4 = $request->get('team4', $answer->team4);
        $answer->team5 = $request->get('team5', $answer->team5);
        $answer->team6 = $request->get('team6', $answer->team6);
        $answer->team7 = $request->get('team7', $answer->team7);
        $answer->team8 = $request->get('team8', $answer->team8);
        $answer->team9 = $request->get('team9', $answer->team9);
        $answer->team10 = $request->get('team10', $answer->team10);
        $answer->team11 = $request->get('team11', $answer->team11);
        $answer->team12 = $request->get('team12', $answer->team12);
        $answer->team13 = $request->get('team13', $answer->team13);
        $answer->team14 = $request->get('team14', $answer->team14);
        $answer->team15 = $request->get('team15', $answer->team15);
        $answer->team16 = $request->get('team16', $answer->team16);

        $answer->spread1 = $request->get('spread1', $answer->spread1);
        $answer->spread2 = $request->get('spread2', $answer->spread2);
        $answer->spread3 = $request->get('spread3', $answer->spread3);
        $answer->spread4 = $request->get('spread4', $answer->spread4);
        $answer->spread5 = $request->get('spread5', $answer->spread5);
        $answer->spread6 = $request->get('spread6', $answer->spread6);
        $answer->spread7 = $request->get('spread7', $answer->spread7);
        $answer->spread8 = $request->get('spread8', $answer->spread8);
        $answer->spread9 = $request->get('spread9', $answer->spread9);
        $answer->spread10 = $request->get('spread10', $answer->spread10);
        $answer->spread11 = $request->get('spread11', $answer->spread11);
        $answer->spread12 = $request->get('spread12', $answer->spread12);
        $answer->spread13 = $request->get('spread13', $answer->spread13);
        $answer->spread14 = $request->get('spread14', $answer->spread14);
        $answer->spread15 = $request->get('spread15', $answer->spread15);
        $answer->spread16 = $request->get('spread16', $answer->spread16);


        $answer->save();


        return new AnswerResource($answer);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Answer $answer)
    {
        $answer->delete();

        return response('Deleted', 201);
    }
}
