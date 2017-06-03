<?php

namespace App\Http\Controllers;

use App\Client;

use App\Company;

use App\Http\Requests\StoreTruck;
use App\Load;
use App\Location;
use App\Truck;
use Illuminate\Http\Request;
use App\Http\Requests\StoreLoad;
use App\User;

class TruckController extends Controller
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
        return Truck::where('company_id',$request->company_id)->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTruck $request)
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
        return response()->json($truck, 201);
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
    public function update(StoreTruck $request, Truck $truck)
    {
        $truck->fill($request->all());
        $truck->save();
        return response()->json($truck, 200);

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
