<?php

namespace App\Http\Controllers;

use App\Route;
use Illuminate\Http\Request;

class RouteController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Route::create($request->all());

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Route $route
     * @return \Illuminate\Http\Response
     */
    public function show(Route $route)
    {
        return response()->json($route);

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Route $route
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Route $route)
    {
        $route->fill($request->all());
        $route->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Route $route
     * @return \Illuminate\Http\Response
     */
    public function destroy(Route $route)
    {
        $route->delete();
    }
}
