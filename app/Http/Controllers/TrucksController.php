<?php

namespace App\Http\Controllers;

use App\Client;

use App\Company;

use App\Load;
use App\Location;
use App\Truck;
use Illuminate\Http\Request;
use App\Http\Requests\StoreLoad;
use App\User;

class TrucksController extends Controller
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
        return Truck::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $truck = new Truck();
        $truck->licensePlate = $request->licensePlate;
        $truck->location_id = $request->location_id;
        $truck->company_id = User::where('api_token', $request->header('api_token'))->first()->id;
        $truck->payLoadCapacity = $request->payLoadCapacity;
        $truck->weight = $request->weight;
        $truck->height = $request->height;
        $truck->width = $request->width;
        $truck->length = $request->length;
        $truck->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Load $load
     * @return \Illuminate\Http\Response
     */
    public function show(Truck $truck)
    {
        return response()->json($truck);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Load $load
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Truck $truck)
    {
        $truck->fill($request->all());
        $truck->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Load $load
     * @return \Illuminate\Http\Response
     */
    public function destroy(Truck $truck)
    {
        $truck->delete();
    }

}
