<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCompany;
use Illuminate\Http\Request;
use App\Company;
use App\Truck;
use App\User;

class CompanyController extends Controller
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
        return Company::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCompany $request)
    {
        return Company::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        return response()->json($company);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateCompany $request, Company $company)
    {
        $company->fill($request->all());
        $company->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();
    }

    public function showCompanyTrucks($id)
    {
        $trucks=Truck::where('id', $id)->get();
        return response()->json($trucks);
    }

    public function assignTruck(Request $request, $id)
    {
        $company=Company::findOrFail($id);
        $truck=Truck::findOrFail($request->truck_id);
        $truck->company_id=$company->id;
        $truck->save();
        return response()->json("success");
    }

    public function assignCompanyToUser(Request $request, $id)
    {
        $company=Company::findOrFail($id)->companyName;
        $user=User::where('api_token', $request->header('api_token'))->first();
        $user->companyName=$company;
        $user->save();
        return response()->json($user);
    }
}
