<?php

namespace App\Http\Controllers;

use App\Sponsor;
use Illuminate\Http\Request;

class SponsorController extends Controller
{
    public function dentalSponsors()
    {
        $sponsors = Sponsor::where('type', '=', 'dental')->get();
        return view('dashboard.pages.sponsors.dentalSponsors')->with(['sponsors' => $sponsors]);
    }

    public function index()
    {
        $sponsors = Sponsor::where('type', '=', 'sponsor')->get();
        return view('dashboard.pages.sponsors.index')->with(['sponsors' => $sponsors]);
    }

    public function addSponsor()
    {
        return view('dashboard.pages.sponsors.create');
    }

    public function storeSponsor(Request $request)
    {


        $request->validate([
            'image' => 'required|image',
            'name' => 'required',
            'description' => 'required',
            'website' => 'required',
            'android' => 'required',
            'ios' => 'required',
            'type' => 'required',

        ]);

        $sponsor = new Sponsor();
        $file = $request->file('image');
        if ($file) {
            $filename = str_random(32) . $file->getClientOriginalName();
            $path = "img/alt_images";
            $file->move($path, $filename);
            $sponsor->logo = $filename;
        }
        $sponsor->name = $request->name;
        $sponsor->description = $request->description;
        $sponsor->website = $request->website;
        $sponsor->android = $request->android;
        $sponsor->ios = $request->ios;
        $sponsor->type = $request->type;

        $sponsor->save();

        return redirect('sponsors');

    }

    public function edit($id)
    {
        $sponsor = Sponsor::find($id);
        return view('dashboard.pages.sponsors.edit')->with(['sponsor' => $sponsor]);

    }

    public function updateSponsor(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'website' => 'required',
            'android' => 'required',
            'ios' => 'required',
            'type' => 'required',

        ]);

        $sponsor = Sponsor::find($id);
        $file = $request->file('image');
        if ($file) {
            $filename = str_random(32) . $file->getClientOriginalName();
            $path = "img/alt_images";
            $file->move($path, $filename);
            $sponsor->logo = $filename;
        }
        $sponsor->name = $request->name;
        $sponsor->description = $request->description;
        $sponsor->website = $request->website;
        $sponsor->android = $request->android;
        $sponsor->ios = $request->ios;
        $sponsor->type = $request->type;

        $sponsor->save();

        return redirect('sponsors');
    }

    public function destroy($id)
    {
        $sponsor = Sponsor::find($id)->delete();

        if ($sponsor) {
            return redirect('sponsors');
        }
    }
}
