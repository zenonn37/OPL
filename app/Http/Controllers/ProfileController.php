<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Http\Resources\ProfileResource;
use App\Record;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

        $profile = Profile::where('league_id', $id)->get();


        return ProfileResource::collection($profile);
    }





    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        return new ProfileResource($profile);
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

    public function records()
    {
        //get all profiles
        $profiles = Profile::all();



        foreach ($profiles as $profile) {
            $wins = 0;
            $loses = 0;
            $ties = 0;
            $points = 0;
            $user = $profile->user_id;
            //echo $profile->user_id . '<br/>';
            //$profile = Profile::where('user_id', $user)->get();
            $records = Record::where('user_id', $user)->get();
            echo $records . '<br/>';
            foreach ($records as $record) {

                $wins = $wins + $record->wins;
                $loses = $loses + $record->loses;
                $ties = $ties + $record->ties;
                $points = $points + $record->points;

                // echo  $wins . 'Your wins' . '<br/>';
                // echo  $loses . 'Your loses' . '<br/>';
                // echo  $ties . 'Your ties' . '<br/>';
                // echo  $points . 'Your points' . '<br/>';
            }
            // echo $wins . 'Total wins' . '<br/>';;

            // echo  $loses . 'Your loses' . '<br/>';
            // echo  $ties . 'Your ties' . '<br/>';
            // echo  $points . 'Your points' . '<br/>';

            DB::table('profiles')
                ->where('user_id', $user)
                ->update(['wins' => $wins, 'loses' => $loses, 'ties' => $ties, 'points' => $points]);

            // $profile->wins = $wins;
            // $profile->loses = $loses;
            // $profile->ties = $ties;
            // $profile->points = $points;

            // $profile->save();
        }




        //return response($records);
    }
}
