<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\InviteMail;
use App\Http\Requests\InviteRequest;
use App\Http\Resources\InviteResource;
use App\League;
use App\Invite;
use App\User;
use App\Profile;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\UserResource;
use App\Http\Requests\ProcessRequest;

class InviteController extends Controller
{
    public function invite(InviteRequest $request)
    {
        $invite = new Invite;
        $token = str_random();
        $league = League::find($request->league_id);
        $user = User::find($league->user_id);

        $invite->name = $request->name;
        $invite->league = $league->name;
        $invite->email = $request->email;
        $invite->league_id = $request->league_id;
        $invite->owner = $user->name;
        $invite->token = $token;

        $invite->save();

        Mail::to('opl@invite.com')->send(new InviteMail($invite));








        return new InviteResource($invite);





        // return response('sent');
    }

    public function accept($token)
    {
        if (!Invite::where('token', $token)->first()) {
            return response('token invalid');
        } else {

            return redirect('accept/' . $token);
            //return response('token accepted');
        }
    }

    public function process(Request $request)
    {
        $user =  Invite::where('token', $request->token)->get();
        $register = new User;
        $profile = new Profile;

        $name = "";
        $email = "";
        foreach ($user as $users) {

            $name = $users->name;
            $email = $users->email;
            $league_id = $users->league_id;
            echo $users->name;
            // $name = $users->name;
            // $email = $users->email;
            $register->name = $name;
            $register->email = $email;
            $register->password =  Hash::make($request->password);

            $register->save();

            $profile->user_id = $register->id;
            $profile->team = $request->team;
            $profile->league_id = $league_id;
            $profile->name = $name;
            $profile->wins = 0;
            $profile->loses = 0;
            $profile->ties = 0;
            $profile->points = 0;
            $profile->rank = 0;

            $profile->save();
        }



        $profile->team = $register->user_id;
        $profile->team = $request->team;
        $profile->league_id = $user[0]->league_id;
        $profile->name = $user[0]->name;
        $profile->wins = 0;
        $profile->loses = 0;
        $profile->ties = 0;
        $profile->points = 0;
        $profile->rank = 0;

        $profile->save();

        // return response($user);


        return new UserResource($register);
    }
}
