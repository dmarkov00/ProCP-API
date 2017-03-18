<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Driver;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Driver::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\StoreDriver $request)
    {
//        $driver = Driver:crea

        $driver = new Driver;
        $driver->fName = $request->fName;
        $driver->lName = $request->lName;
        $driver->phoneNbr = $request->phoneNbr;
        $driver->email = $request->email;
        $driver->save();
//       return response($driver, 201);
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
    public function update(Requests\UpdateDriver $request, Driver $driver)
    {
        $driver->fill($request->all());

        $driver->save();
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
