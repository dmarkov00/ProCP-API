<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginUser;
use function MongoDB\BSON\toJSON;

class LoginController extends Controller
{

    public function login(LoginUser $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed...
            return Auth::user();
        }
        else {
            abort(401);
        }
    }
}
