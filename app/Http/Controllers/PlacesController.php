<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Place;
use App\Sponsor;

class PlacesController extends Controller
{
    public function index()
    {
        $sponsors = Sponsor::all();
        $RestSponsor = [];
        foreach($sponsors as $sponsor)
        {            
            if(Sponsor::find($sponsor->id)->place != null)
            {
              $RestSponsor[] = array($sponsor);
            }
               
        }
        
        return view('dashboard.pages.places.index')->with('sponsors',$RestSponsor);
    }
    public function create()
    {
        $sponsors = Sponsor::all();
        $places = Place::where('sponsor_id','=', NULL)->get();
        $RestSponsor = [];
        foreach($sponsors as $sponsor)
        {            
            if(Sponsor::find($sponsor->id)->place == null)
            {
              $RestSponsor[] = array($sponsor);
            }
               
        }
        return view('dashboard.pages.places.create')->with('sponsors',$RestSponsor)
                                                  ->with('places',$places);
    }

    public function storePlace(Request $request)
    {
         $place = Place::find($request->place);

         $place->update([
             'sponsor_id' => $request->sponsor
         ]);
         return redirect('/places');

    }


    public function deleteSponsorPlace($id)
    {
        $place =Place::where('sponsor_id','=',$id);
        $place->update([
            'sponsor_id' => NULL
        ]);
        return redirect()->back();
    }

   
}
