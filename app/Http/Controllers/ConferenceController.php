<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Conference;
use App\Mail\ConferenceMail;
use Illuminate\Support\Facades\Mail;

class ConferenceController extends Controller
{
    public function index()
    {
        return response()->json(Conference::all());
    }
    public function store(Request $request)
    {
        $request->validate([
            'organizationName'=>'required|string',
            'title' => 'string|required',
            "designation" => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'country' => 'string',
            'phone' => 'string',
            'email' => 'required|string|email',
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'addressLine1' => 'required|string',
            'addressLine2' => 'string',
            'fax' => 'string',
            'mobile' => 'required|string',
            'website' => 'string',
            'alternateEmail' => 'string|email',
            'conferenceTitle' => 'string',
            
            
        ]);

        $conference = new Conference([
            'organizationName'=>$request->organizationName,
            'title' => $request->title ,
            'designation' => $request->designation ,
            'city' => $request->city,
            'state' => $request->state ,
            "country" => $request->country,
            'phone' => $request->phone ,
            'email' => $request->email ,
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'addressLine1' => $request->addressLine1,
            'addressLine2' => $request->addressLine2,
            'fax' => $request->fax,
            'mobile' => $request->mobile,
            'website' => $request->website,
            'alternateEmail' => $request->alternateEmail,
            'conferenceTitle' => $request->conferenceTitle,


        ]);


        $conference->save();
        Mail::to('registration@egyhealthexpo.com')->send(new ConferenceMail($conference));
        return response()->json([
            'message' => 'Successfully created conference!'
        ], 201);
    }
}
