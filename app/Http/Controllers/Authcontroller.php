<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Authcontroller extends Controller
{


    public function register(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8']
        ]);


        $reg  = new User();

        $reg->name = $request->name;
        $reg->email = $request->email;
        $reg->password = Hash::make($request->password);

        $reg->save();

        return response($reg, 201);
    }
}
