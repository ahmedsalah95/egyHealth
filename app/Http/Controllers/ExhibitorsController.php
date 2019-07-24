<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Exhibitors;
use App\Exhibitor;
use Illuminate\Support\Facades\Mail;


class ExhibitorsController extends Controller
{
    public function index()
    {

        return response()->json(Exhibitor::all());
    }
    public function store(Request $request)
    {
        $request->validate([
            'OragnizationName' => 'required',
            'ChiefExecutiveFirstName'=>'required',
            'ChiefExecutiveDesignation' => 'required',
            'ContactPersonFirstName' => 'required',
            'ContactPersonDesignation' => 'required',
            'ChiefExecutiveTitle' => 'required',
            'ChiefExecutiveSecondName' => 'required',
            'ContactPersonTitle' => 'requried',
            'ContactPersonLastName' => 'required',
            'CorporateAddressLine1' => 'required',
            'CorporateCity' => 'required',
            'CorporateState' => 'required',
           
            'CorporateMobile' => 'required',
            'CorporateAlternateEmail' => 'required|email',
            
            'CorporateZipCode' => 'required',
            'CorporateCountry' => 'required',
            
            'CorporateEmail' => 'required|email',
            
            'CorporateImportExportCode' => 'required',

            'CorrespondenceAddressLine1' => 'required',
            'CorrespondenceCity' => 'required',
            'CorrespondenceState' => 'required',
            
            'CorrespondenceMobile' => 'required',
            
            'CorrespondenceZipCode' => 'required',
            'CorrespondenceCountry' => 'required',
        
            'CorrespondenceEmail' => 'required|email',
            'CorrespondenceCompanyProfile' => 'required',


            'Scheme' => 'required',
            'AreaRequired' => 'required',
        ]);
            
        $exhibitor = new Exhibitor([
            'OragnizationName' => $request->OragnizationName ,
            'ChiefExecutiveFirstName'=>$request->ChiefExecutiveFirstName,
            'ChiefExecutiveDesignation' =>$request->ChiefExecutiveDesignation ,
            'ContactPersonFirstName' =>$request->ContactPersonFirstName ,
            'ContactPersonDesignation' =>$request->ContactPersonDesignation ,
            'ChiefExecutiveTitle' =>$request->ChiefExecutiveTitle ,
            'ChiefExecutiveSecondName' =>$request->ChiefExecutiveSecondName ,
            'ContactPersonTitle' =>$request->ContactPersonTitle ,
            'ContactPersonLastName' => $request->ContactPersonLastName ,
            'CorporateAddressLine1' => $request->CorporateAddressLine1 ,
            'CorporateCity' => $request->CorporateCity ,
            'CorporateState' => $request->CorporateState ,
            'CorporatePhone' => $request->CorporatePhone ,
            'CorporateMobile' => $request->CorporateMobile ,
            'CorporateAlternateEmail' => $request->CorporateAlternateEmail ,
            'CorporateAddressLine2' => $request->CorporateAddressLine2 ,
            'CorporateZipCode' => $request->CorporateZipCode ,
            'CorporateCountry' => $request->CorporateCountry ,
            'CorporateFax' => $request->CorporateFax,
            'CorporateEmail' => $request->CorporateEmail ,
            'CorporateWebsite' => $request->CorporateWebsite ,
            'CorporateImportExportCode' => $request->CorporateImportExportCode ,

            'CorrespondenceAddressLine1' => $request->CorrespondenceAddressLine1 ,
            'CorrespondenceCity' => $request->CorrespondenceCity  ,
            'CorrespondenceState' => $request->CorrespondenceState ,
            'CorrespondencePhone' => $request->CorrespondencePhone ,
            'CorrespondenceMobile' => $request->CorrespondenceMobile  ,
            'CorrespondenceAddressLine2' => $request->CorrespondenceAddressLine2 ,
            'CorrespondenceZipCode' => $request->CorrespondenceZipCode  ,
            'CorrespondenceCountry' => $request->CorrespondenceCountry  ,
            'CorrespondenceFax' => $request->CorrespondenceFax ,
            'CorrespondenceEmail' => $request->CorrespondenceEmail ,
            'CorrespondenceCompanyProfile' => $request->CorrespondenceCompanyProfile  ,


            'Scheme' => $request->Scheme ,
            'AreaRequired' => $request->AreaRequired,
        ]);


        $exhibitor->save();

        Mail::to('registration@egyhealthexpo.com')->send(new Exhibitors($exhibitor));

        return response()->json([
            'message' => 'Successfully created Exhibitor!'
        ], 201);
    }
}
