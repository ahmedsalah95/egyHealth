<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        /*$request->validate([
            'OragnizationName' => 'required|string',
            'ChiefExecutiveFirstName'=>'required|string',
            'ChiefExecutiveDesignation' => 'required|string',
            'ContactPersonFirstName' => 'required|string',
            'ContactPersonDesignation' => 'required|string',
            'ChiefExecutiveTitle' => 'required|string',
            'ChiefExecutiveSecondName' => 'required|string',
            'ContactPersonTitle' => 'requried|string',
            'ContactPersonLastName' => 'required|string',
            'CorporateAddressLine1' => 'required|string',
            'CorporateCity' => 'string|required',
            'CorporateState' => 'required|string',
            'CorporatePhone' => 'string',
            'CorporateMobile' => 'string|required',
            'CorporateAlternateEmail' => 'required|email',
            'CorporateAddressLine2' => 'string',
            'CorporateZipCode' => 'string|required',
            'CorporateCountry' => 'string|required',
            'CorporateFax' => 'string',
            'CorporateEmail' => 'required|email',
            'CorporateWebsite' => 'string',
            'CorporateImportExportCode' => 'string|required',

            'CorrespondenceAddressLine1' => 'required|string',
            'CorrespondenceCity' => 'string|required',
            'CorrespondenceState' => 'required|string',
            'CorrespondencePhone' => 'string',
            'CorrespondenceMobile' => 'string|required',
            'CorrespondenceAddressLine2' => 'string',
            'CorrespondenceZipCode' => 'string|required',
            'CorrespondenceCountry' => 'string|required',
            'CorrespondenceFax' => 'string',
            'CorrespondenceEmail' => 'required|email',
            'CorrespondenceCompanyProfile' => 'string|required',


            'Scheme' => 'string|required',
            'AreaRequired' => 'string|required',
        ]);
            */
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
