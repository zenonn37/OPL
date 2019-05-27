<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\UserResource;

class AuthenicateController extends Controller
{

    public function register(UserRequest $request)
    {
        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->pasword = Hash::make($request->password);

        $user->save();
        return new UserResource($user);
    }

    public function login()
    { }

    public function logout()
    { }
}
