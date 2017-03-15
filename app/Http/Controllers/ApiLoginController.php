<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class ApiLoginController extends Controller
{
    public function api(Request $request)
    {
        $token = Auth::guard('api')->user()->api_token;
        return response()->json(['token' => $token]);
    }

    public function showToken(Request $request)
    {
        //$token = Auth::guard('api')->user()->api_token;
        if(Auth::check()){
            $user_id = Auth::user()->id;
            $token = User::where('id', $user_id)->get()->first()->api_token;
            session(['api_token' => $token]);
            return response()->json(['token' => $token, 'session_token' => session()->get('api_token')]);
        }
        else{
            //return response()->json(['session_token' => session()->get('api_token')]);
            return view('404');
    }
    }
}
