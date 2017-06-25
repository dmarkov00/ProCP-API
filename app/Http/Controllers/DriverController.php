<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDriver;
use App\Driver;
use App\User;
use App\Company;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function __construct()
    {
        $this->middleware('custom');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return Driver::where('company_id',$request->company_id)->get();

    }

    public function setTaken($id)
    {
        $driver=Driver::findOrFail($id);
        $driver->taken=1;
        $driver->save();
    }

    public function unsetTaken($id)
    {
        $driver=Driver::findOrFail($id);
        $driver->taken=0;
        $driver->save();
    }


    public function store(StoreDriver $request)
    {
        // First we retrieve the company id
        //$user = User::where('api_token', $request->header('api_token'))->first();
        //$companyName = $user->companyName;
        //$company_id = Company::findOrFail($companyName)->company_id;

        $driver = new Driver();
        $driver->company_id = $request->company_id;
        $driver->fName = $request->fName;
        $driver->lName = $request->lName;
        $driver->phoneNbr = $request->phoneNbr;
        $driver->email = $request->email;
        //$driver->company_id = $company_id;

        $driver->save();
        return response()->json($driver, 201);

        //return response()->json(Driver::create($request->all()), 201);
        //return   Driver::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Driver $driver
     * @return \Illuminate\Http\Response
     */

    public function show(Driver $driver)
    {
        return response()->json($driver);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Driver $driver
     * @return \Illuminate\Http\Response
     */

    public function update(StoreDriver $request, Driver $driver)
    {
        $driver->fill($request->all());
        $driver->save();
        return response()->json($driver, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Driver $driver
     * @return \Illuminate\Http\Response
     */

    public function destroy(Driver $driver)
    {
        $driver->delete();
    }
}
