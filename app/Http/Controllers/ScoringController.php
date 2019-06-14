<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pick;
use App\Answer;
use App\Profile;
use Illuminate\Support\Facades\DB;

class ScoringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Profile $profile)
    {
        //use where by game date only for both collections
        $picks = Pick::all();
        $answers = Answer::all();



        $count = collect($picks)->count();
        $c = collect($answers)->count();

        //echo $count;

        $wins = 0;
        $loses = 0;
        $records = [];
        //score for each game
        for ($i = 0; $i < $c; $i++) {
            echo $answers[$i]->team1 . '<br>';
            echo $answers[$i]->team2 . '<br>';
            echo $answers[$i]->team3 . '<br>';
            echo $answers[$i]->team4 . '<br>';
            echo $answers[$i]->team5 . '<br>';
            echo '<br/>';
            $ans1 = $answers[$i]->team1;
            $ans2 = $answers[$i]->team2;
            $ans3 = $answers[$i]->team3;
            $ans4 = $answers[$i]->team4;
            $ans5 = $answers[$i]->team5;
            for ($i = 0; $i < $count; $i++) {

                $wins = 0;
                $loses = 0;

                echo  $picks[$i]->team1 . '<br>';
                echo  $picks[$i]->team2 . '<br>';
                echo  $picks[$i]->team3 . '<br>';
                echo  $picks[$i]->team4 . '<br>';
                echo  $picks[$i]->team5 . '<br>';
                echo '<br/>';
                ($ans1 === $picks[$i]->team1) ? $wins = $wins + 1 : $loses = $loses + 1;
                ($ans2 === $picks[$i]->team2) ? $wins = $wins + 1 : $loses = $loses + 1;
                ($ans3 === $picks[$i]->team3) ? $wins = $wins + 1 : $loses = $loses + 1;
                ($ans4 === $picks[$i]->team4) ? $wins = $wins + 1 : $loses = $loses + 1;
                ($ans5 === $picks[$i]->team5) ? $wins = $wins + 1 : $loses = $loses + 1;

                $result = $wins . '-' . $loses;

                DB::table('profiles')
                    ->where('user_id', $picks[$i]->user_id)
                    ->update(['wins' => $wins, 'loses' => $loses]);

                DB::table('records')
                    ->insert([
                        'user_id' => $picks[$i]->user_id,
                        'wins' => $wins,
                        'loses' => $loses,
                        'points' => 0,
                        'ties' => 0

                    ]);




                // $profile->wins = $wins;
                // $profile->loses = $loses;


                array_push($records, $picks[$i]->user_id, $result);



                echo $wins . '-' . $loses;
                echo '<br/>';
            }
        }

        dd($records);
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
    public function store(Request $request)
    {
        //
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
