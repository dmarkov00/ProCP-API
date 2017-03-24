<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//It is only possible to see the drivers.
Route::resource('drivers', 'DriverController', ['except' => ['update', 'store']]);

//Auth::routes(['except' => ['showResetForm', 'showRegistrationForm']]);

Route::post('login','Auth\LoginController@login');

Route::post('register','Auth\RegisterController@register');


