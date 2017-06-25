<?php

namespace App\Http\Controllers;

use App\Route;
use Illuminate\Http\Request;

class RoutesController extends Controller
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
        return Route::where('company_id', $request->company_id)->get();

    }

    public function markAsDelivered($id)
    {
        $route=Route::findOrFail($id);
        $route->delivered=1;
        $route->save();
        return response()->json("success");
        //return Route::create($request->all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return response()->json($request);
        $route = new Route();
        $route->truck_id=$request->truck_id;
        $route->company_id=$request->company_id;

        $route->est_time_driving=$request->est_time_driving;
        $route->est_distance=$request->est_distance;
        $route->est_fuelConsumption=$request->est_fuelConsumption;
        $route->est_cost=$request->est_cost;
        $route->act_time_used=$request->act_time_used;
        $route->act_distance=$request->act_distance;
        $route->act_fuelConsumption=$request->act_fuelConsumption;
        $route->act_cost=$request->act_cost;
        $route->sum_salaries=$request->sum_salaries;
        $route->sum_actual_salaries=$request->sum_actual_salaries;
        $route->revenue=$request->revenue;
        $route->start_location_id=$request->start_location_id;
        $route->end_location_id=$request->end_location_id;
        $route->start_time=$request->start_time;
        $route->end_time=$request->end_time;
        //return response()->json($route);
        $route->save();
        return response()->json($route);
        //return Route::create($request->all());

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
