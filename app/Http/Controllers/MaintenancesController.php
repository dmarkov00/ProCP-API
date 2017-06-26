<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TruckMaintenance;
use Illuminate\Support\Facades\DB;

class MaintenancesController extends Controller
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
        return TruckMaintenance::all();
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('truckmaintenances')->insert(
            array(
                'truck_id'     =>   $request->truck_id,
                'driver_id'   =>   $request->driver_id,
                'actionPerformed'     =>   $request->actionPerformed,
                'actionDate'     =>   $request->actionDate,
                'actionCost'     =>   $request->actionCost
            )
        );
        return response()->json("success");
        /*
        $maintenance = new TruckMaintenance();

        $maintenance->truck_id = $request->truck_id;
        $maintenance->driver_id = $request->driver_id;
        $maintenance->actionPerformed = $request->actionPerformed;
        $maintenance->actionDate = $request->actionDate;
        $maintenance->actionCost = $request->actionCost;
        //return response()->json($maintenance, 201);
        $maintenance->save();
        return response()->json($maintenance, 201);*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $main = TruckMaintenance::findOrFail($id);
        return response()->json($main, 201);
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
        $sth = TruckMaintenance::findOrFail($id);
        //return response()->json($maintenance, 201);
        //$maintenance->truck_id = $request->truck_id;
        //$maintenance->driver_id = $request->driver_id;
        //$maintenance->actionPerformed = $request->actionPerformed;
        //
        //$maintenance->actionDate = $request->actionDate;
        //$maintenance->actionCost = $request->actionCost;
        //return response()->json($maintenance, 201);
        $sth->truck_id=2;
        $sth->save();
        return response()->json($sth, 201);
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
