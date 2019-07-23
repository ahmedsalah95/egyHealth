<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Visitor;
class VisitorsController extends Controller
{
    //this for api
    public function index()
    {

        return response()->json(Visitor::all());
    }
    //this for api
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'organizationName'=>'required|string',
            'city' => 'required|string',
            'country' => 'string',
            'website' => 'string',
            'fax' => 'string',
            "designation" => 'required|string',
            'address' => 'string',
            'state' => 'required|string',
            'email' => 'required|string|email',
            'phone' => 'string',
            'mobile' => 'required|string'
        ]);

        $visitor = new Visitor([
            'name' => $request->name,
            'organizationName'=>$request->organizationName,
            'city' => $request->city ,
            'country' => $request->country ,
            'website' => $request->website,
            'fax' => $request->fax ,
            "designation" => $request->designation,
            'address' => $request->address ,
            'state' => $request->state ,
            'email' => $request->email,
            'phone' => $request->phone,
            'mobile' => $request->mobile 
        ]);


        $visitor->save();
        return response()->json([
            'message' => 'Successfully created visitor!'
        ], 201);
    }
}
