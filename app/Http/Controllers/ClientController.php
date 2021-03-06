<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use App\Http\Requests\StoreClient;

class ClientController extends Controller
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

        return Client::where('company_id',$request->company_id)->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function store(StoreClient $request)
    {
        return response()->json("vleze");
    }
    /*
    public function store(StoreClient $request)
    {
        return response()->json("vleze");
        $client = new Client();
        $client->company_id = $request->company_id;
        $client->name = $request->name;
        $client->phone = $request->phone;
        $client->address = $request->address;
        $client->email = $request->email;
        //$driver->company_id = $company_id;

        $client->save();
        return response()->json($client, 201);
    }
*/
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {

        return response()->json($client);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Client $client)
    {
        $client->fill($request->all());
        $client->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
    }
}
