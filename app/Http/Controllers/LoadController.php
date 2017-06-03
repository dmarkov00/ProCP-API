<?php

namespace App\Http\Controllers;

use App\Client;

use App\Company;

use App\Load;
use App\Location;
use Illuminate\Http\Request;
use App\Http\Requests\StoreLoad;
use App\User;

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
    public function index(Request $request)
    {
        return Load::where('company_id',$request->company_id)->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLoad $request)
    {
        $load = new Load();
        $load->startLocation_id = Location::where('city', $request->start_location)->first()->id;
        $load->endLocation_id = Location::where('city', $request->end_location)->first()->id;
        $load->content = $request->load_content;
        $load->weight = $request->weight;
        $load->deadline = $request->deadline;
        $load->salary = $request->salary;
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
        }
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
    public function  assignClient(Load $load, Client $client){
//        $load

    }

}
