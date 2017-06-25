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

//It is only possible to see the drivers.
Route::resource('drivers', 'DriverController', ['except' => ['edit', 'create']]);

Route::resource('companies', 'CompanyController',['except' => ['edit', 'create']]);

Route::resource('clients', 'ClientsController',['except' => ['edit', 'create']]);

Route::resource('loads', 'LoadsController',['except' => ['edit', 'create']]);

Route::resource('trucks', 'TruckController',['except' => ['edit', 'create']]);

Route::resource('routes', 'RoutesController',['except' => ['edit', 'create']]);

Route::resource('users', 'UserController',['except' => ['edit', 'create']]);

//Route::post('assignTo/load/{id}/client/{id}','LoadController@assignClient');
//make truck and driver taken
Route::middleware('custom')->get('/drivers/taken/{id}','DriverController@setTaken');
Route::middleware('custom')->get('/drivers/untaken/{id}','DriverController@unsetTaken');
//make truck and driver not taken
Route::middleware('custom')->get('/routes/delivered/{id}','RoutesController@markAsDelivered');
Route::middleware('custom')->get('/routes/delivered/{id}','RoutesController@markAsDelivered');

//Route::post('/clients/add/','ClientController@store');
Route::middleware('custom')->get('/routes/delivered/{id}','RoutesController@markAsDelivered');
Route::middleware('custom')->post('/routes/delivered/{id}','RoutesController@markAsDelivered');
Route::middleware('custom')->post('/users/update/{id}','UserController@updateUser');

Route::middleware('custom')->get('/company_trucks/{id}','CompanyController@showCompanyTrucks');
Route::middleware('custom')->post('/companies/{id}/assignTruck','CompanyController@assignTruck');
Route::middleware('custom')->post('/loads/{id}','LoadController@updateLoad');
Route::middleware('custom')->post('/trucks/setLocation/{id}/{locationId}','TruckController@setLocation');
Route::middleware('custom')->post('/companies/{id}/assignTruckToDriver','CompanyController@assignTruckToDriver');
Route::middleware('custom')->post('/users/{id}/assignCompanyToUser','CompanyController@assignCompanyToUser');


Route::post('login','Auth\LoginController@login');

Route::post('register','Auth\RegisterController@register');


