<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginUser;
use function MongoDB\BSON\toJSON;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function login(LoginUser $request)
    {
        /*
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return response()->json('yes');
            // Authentication passed...
            return Auth::user();
        }
        */
        $user = User::where('email', $request->email)->first();
        if ($user!=null) {
            if(Hash::check($request->password, $user->password)){
                return $user;
            }
            else{
                return response()->json(['status' => 403, 'message' => 'Incorrect password']);
            }
        }
        else {
            abort(401);
        }
    }
}
