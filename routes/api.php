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
// tfa nz ko prai :D
//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

//It is only possible to see the drivers.
Route::resource('drivers', 'DriverController', ['except' => ['edit', 'create']]);

Route::resource('companies', 'CompanyController',['except' => ['edit', 'create']]);

Route::resource('clients', 'ClientController',['except' => ['edit', 'create']]);

Route::resource('loads', 'LoadController',['except' => ['edit', 'create']]);

Route::resource('trucks', 'TruckController',['except' => ['edit', 'create']]);
//Route::post('assignTo/load/{id}/client/{id}','LoadController@assignClient');



Route::middleware('custom')->get('/company_trucks/{id}','CompanyController@showCompanyTrucks');
Route::middleware('custom')->post('/companies/{id}/assignTruck','CompanyController@assignTruck');
Route::middleware('custom')->post('/companies/{id}/assignTruckToDriver','CompanyController@assignTruckToDriver');
Route::middleware('custom')->post('/users/{id}/assignCompanyToUser','CompanyController@assignCompanyToUser');


Route::post('login','Auth\LoginController@login');

Route::post('register','Auth\RegisterController@register');


