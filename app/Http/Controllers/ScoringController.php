<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pick;
use App\Answer;
use App\Profile;
use App\Record;
use Illuminate\Support\Facades\DB;

class ScoringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //use where by game date only for both collections
        $picks = Pick::all();
        $answers = Answer::all();



        $count = collect($picks)->count();
        $c = collect($answers)->count();

        //echo $count;

        $wins = 0;
        $loses = 0;
        $spread = 0;
        $records = [];
        //score for each game
        for ($i = 0; $i < $c; $i++) {

            $ans1 = $answers[$i]->team1;
            $ans2 = $answers[$i]->team2;
            $ans3 = $answers[$i]->team3;
            $ans4 = $answers[$i]->team4;
            $ans5 = $answers[$i]->team5;
            $ans6 = $answers[$i]->team6;
            $ans7 = $answers[$i]->team7;
            $ans8 = $answers[$i]->team8;
            $ans9 = $answers[$i]->team9;
            $ans10 = $answers[$i]->team10;
            $ans11 = $answers[$i]->team11;
            $ans12 = $answers[$i]->team12;
            $ans13 = $answers[$i]->team13;
            $ans14 = $answers[$i]->team14;
            $ans15 = $answers[$i]->team15;
            $ans16 = $answers[$i]->team16;

            $ansp1 = $answers[$i]->spread1;
            $ansp2 = $answers[$i]->spread2;
            $ansp3 = $answers[$i]->spread3;
            $ansp4 = $answers[$i]->spread4;
            $ansp5 = $answers[$i]->spread5;
            $ansp6 = $answers[$i]->spread6;
            $ansp7 = $answers[$i]->spread7;
            $ansp8 = $answers[$i]->spread8;
            $ansp9 = $answers[$i]->spread9;
            $ansp10 = $answers[$i]->spread10;
            $ansp11 = $answers[$i]->spread11;
            $ansp12 = $answers[$i]->spread12;
            $ansp13 = $answers[$i]->spread13;
            $ansp14 = $answers[$i]->spread14;
            $ansp15 = $answers[$i]->spread15;
            $ansp16 = $answers[$i]->spread16;
            for ($i = 0; $i < $count; $i++) {

                $wins = 0;
                $loses = 0;
                $spread = 0;




                ($ans1 === $picks[$i]->team1) ? $wins = $wins + 1 : $loses = $loses + 1;
                ($ans2 === $picks[$i]->team2) ? $wins = $wins + 1 : $loses = $loses + 1;
                ($ans3 === $picks[$i]->team3) ? $wins = $wins + 1 : $loses = $loses + 1;
                ($ans4 === $picks[$i]->team4) ? $wins = $wins + 1 : $loses = $loses + 1;
                ($ans5 === $picks[$i]->team5) ? $wins = $wins + 1 : $loses = $loses + 1;
                ($ans6 === $picks[$i]->team6) ? $wins = $wins + 1 : $loses = $loses + 1;
                ($ans7 === $picks[$i]->team7) ? $wins = $wins + 1 : $loses = $loses + 1;
                ($ans8 === $picks[$i]->team8) ? $wins = $wins + 1 : $loses = $loses + 1;
                ($ans9 === $picks[$i]->team9) ? $wins = $wins + 1 : $loses = $loses + 1;
                ($ans10 === $picks[$i]->team10) ? $wins = $wins + 1 : $loses = $loses + 1;
                ($ans11 === $picks[$i]->team11) ? $wins = $wins + 1 : $loses = $loses + 1;
                ($ans12 === $picks[$i]->team12) ? $wins = $wins + 1 : $loses = $loses + 1;
                ($ans13 === $picks[$i]->team13) ? $wins = $wins + 1 : $loses = $loses + 1;
                ($ans14 === $picks[$i]->team14) ? $wins = $wins + 1 : $loses = $loses + 1;
                ($ans15 === $picks[$i]->team15) ? $wins = $wins + 1 : $loses = $loses + 1;
                ($ans16 === $picks[$i]->team16) ? $wins = $wins + 1 : $loses = $loses + 1;

                ($ansp1 === $picks[$i]->spread1) ? $spread = $spread + 5 : '';
                ($ansp2 === $picks[$i]->spread2) ? $spread = $spread + 5 : '';
                ($ansp3 === $picks[$i]->spread3) ? $spread = $spread + 5 : '';
                ($ansp4 === $picks[$i]->spread4) ? $spread = $spread + 5 : '';
                ($ansp5 === $picks[$i]->spread5) ? $spread = $spread + 5 : '';
                ($ansp6 === $picks[$i]->spread6) ? $spread = $spread + 5 : '';
                ($ansp7 === $picks[$i]->spread7) ? $spread = $spread + 5 : '';
                ($ansp8 === $picks[$i]->spread8) ? $spread = $spread + 5 : '';
                ($ansp9 === $picks[$i]->spread9) ? $spread = $spread + 5 : '';
                ($ansp10 === $picks[$i]->spread10) ? $spread = $spread + 5 : '';
                ($ansp11 === $picks[$i]->spread11) ? $spread = $spread + 5 : '';
                ($ansp12 === $picks[$i]->spread12) ? $spread = $spread + 5 : '';
                ($ansp13 === $picks[$i]->spread13) ? $spread = $spread + 5 : '';
                ($ansp14 === $picks[$i]->spread14) ? $spread = $spread + 5 : '';
                ($ansp15 === $picks[$i]->spread15) ? $spread = $spread + 5 : '';
                ($ansp16 === $picks[$i]->spread16) ? $spread = $spread + 5 : '';

                $points =  $this->totalPoints($wins, $spread);

                $this->Record($wins, $loses, $points, $picks[$i]->user_id);



                // for ($x = 0; $x < $count; $x++) {
                //     # code...
                // }





                // DB::table('profiles')
                //     ->where('user_id', $picks[$i]->user_id)
                //     ->update(['wins' => $wins, 'loses' => $loses]);
            }
        }

        $records = Record::all();

        $c = collect($records)->count();

        echo '<br>';
        echo $c;
        echo '<br>';
        echo $records;

        for ($x = 0; $x < $c; $x++) { }
    }



    private function Record($wins, $loses, $points, $user_id)
    {
        DB::table('records')
            ->insert([
                'user_id' => $user_id,
                'wins' => $wins,
                'loses' => $loses,
                'points' => $points,
                'ties' => 0

            ]);
    }

    private function totalPoints($wins, $spread)
    {
        echo  $total = ($wins * 2) + $spread;

        return $total;
    }
}
