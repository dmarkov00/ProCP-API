<?php

namespace App\Http\Controllers;

use App\Load;
use Illuminate\Http\Request;

class LoadsController extends Controller
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
        return Load::where('company_id',$request->company_id)->get();
    }

    public function updateLoad(Request $request, $id)
    {
        $load=Load::findOrFail($id);
        $load->driver_id=$request->driver_id;
        $load->route_id=$request->route_id;
        $load->truck_id=$request->truck_id;
        $load->loadstatus=$request->loadstatus;
        $load->save();
        return response()->json("success");
    }

    public function finalizeLoad(Request $request, $id)
    {
        $load=Load::findOrFail($id);
        $load->arrivaldate=$request->arrivaldate;
        $load->finalsalary=$request->finalsalary;
        $load->loadstatus=3;
        $load->save();
        return response()->json("success");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $load = new Load();

        $load->startLocation_id = $request->startLocation_id;
        $load->endLocation_id = $request->endLocation_id;
        $load->content = $request->load_content;
        $load->weight = $request->weight;
        $load->deadline = $request->deadline;
        $load->fullsalary = $request->fullsalary;
        $load->delayfeePercHour = $request->delayfeePercHour;
        $load->client_id = $request->client_id;
        $load->save();
        return response()->json($load);
        /*
        if($request->has('truckId')){
            $load->truck_id=$request->truckId;
        }
        if(Client::where('name', $request->client)->first()!=null){
            $load->client_id = Client::where('name', $request->client)->first()->id;
            $load->save();
            return response()->json($load);
        }
        elseif($request->has('name')&&$request->has('phone')&&$request->has('email')
            &&$request->has('address')){
            if(User::where('api_token', $request->header('api_token'))->first()->companyName!=null){
                $company = User::where('api_token', $request->header('api_token'))->first()->companyName;
                $company_id=Company::where('companyName', $company)->first()->id;
                $client = new Client();
                $client->company_id = $company_id;
                $client->name=$request->name;
                $client->phone=$request->phone;
                $client->email=$request->email;
                $client->address=$request->address;
                $client->save();
                $load->client_id=Client::where('company_id', $company_id)->where('name', $request->name)
                    ->first()->id;
                $load->save();
                return response()->json($load);
            }
            else{
                return response()->json(['status' => 403, 'message' => 'You have no company o.O.']);
            }
        }
        else{
            return response()->json(['status' => 403, 'message' => 'Unauthorized action2.']);
        }*/
        return response()->json("success");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Load $load)
    {
        return response()->json($load);
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
    public function update(Request $request, Load $load)
    {
        $load->fill($request->all());
        $load->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Load $load)
    {
        $load->delete();
    }
}
