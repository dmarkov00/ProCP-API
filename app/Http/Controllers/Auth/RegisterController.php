<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Requests\CreateUser;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  CreateUser $request
     * @return User
     */
    public function register(CreateUser $request)
    {
        return response()->json(User::create([
            'name' => $request->name,
            'email' => $request->email,
            'api_token' => str_random(60),
            'password' => bcrypt($request->password)
        ]), 201);
    }
}
