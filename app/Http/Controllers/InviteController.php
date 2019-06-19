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

    public function process($token)
    {
        $in =  Invite::where('token', $token)->get();


        return response($in);
    }
}
