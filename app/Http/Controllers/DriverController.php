<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDriver;
use App\Driver;

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
    public function index()
    {
        return Driver::all();
    }


    public function store(StoreDriver $request)
    {
        return response()->json(Driver::create($request->all()), 201);
//        return   Driver::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Driver $driver
     * @return \Illuminate\Http\Response
     */
    public
    function show(Driver $driver)
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
    public
    function update(StoreDriver $request, Driver $driver)
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
    public
    function destroy(Driver $driver)
    {
        $driver->delete();
    }
}
