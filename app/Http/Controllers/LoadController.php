<?php

namespace App\Http\Controllers;

use App\Client;
use App\Load;
use Illuminate\Http\Request;
use App\Http\Requests\StoreLoad;

class LoadController extends Controller
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
        return Load::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLoad $request)
    {
        return Load::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Load $load
     * @return \Illuminate\Http\Response
     */
    public function show(Load $load)
    {
        return response()->json($load);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Load $load
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Load $load)
    {
        if($request->has('client_name')&&$request->has('client_name')&&$request->has('client_name')){

        }
        else{
            return response()->json(array(
                'code'      =>  401,
                'message'   =>  "please fill in all the data"
            ), 401);
        }
        $load->fill($request->all());
        $load->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Load $load
     * @return \Illuminate\Http\Response
     */
    public function destroy(Load $load)
    {
        $load->delete();
    }
}
