<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CustomAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $token = $request->header('api_token');
        if ($token!=null) {
            if(DB::table('users')->where('api_token', $token)->first()!=null){
                return $next($request);
            }
        }
        return response()->json(['status' => 403, 'message' => 'Unauthorized action.']);
    }
}
