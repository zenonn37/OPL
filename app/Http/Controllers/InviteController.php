<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\InviteMail;

class InviteController extends Controller
{
    public function invite()
    {

        $data = str_random();

        Mail::to('test@test.com')->send(new InviteMail($data));

        return response('sent');
    }

    public function accept($token)
    {

        return response($token);
    }
}
