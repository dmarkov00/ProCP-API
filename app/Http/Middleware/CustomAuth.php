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
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */

    public function handle($request, Closure $next)
    {

        $token = $request->header('api_token');
        if ($token != null) {

            $user = DB::table('users')->where('api_token', $token)->first();
            if ($user != null) {

                $companyName = $user->companyName;

                // Getting the company
                $company = DB::table('companies')->where('companyName', $companyName)->first();

                // Retrieving company id
                $company_id = $company->id;

                // Adding it to the request object runtime, for later use
               $request->company_id = $company_id;


                return $next($request);
            }
        }
        return response('Unauthorized', 401);
    }
}
