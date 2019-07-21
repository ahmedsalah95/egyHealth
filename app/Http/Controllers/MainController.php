<?php

namespace App\Http\Controllers;

use App\Main;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\User;
use Illuminate\Support\Facades\Cookie;
class MainController extends Controller
{

    public function logoUpload(Request $request)
    {
        $request->validate([
            'image'=>'required|image',
            'title' => 'required',
        ]);

        $saveTestimonial = new Main();
        $file = $request->file('image');
        if($file)
        {
            $filename = $file->getClientOriginalName();
            $path = "img/alt_images";
            $file->move($path,$filename);
            $saveTestimonial->image = $filename;
        }
        $saveTestimonial->title= $request['title'];

        $saveTestimonial->save();
        return redirect('main');
    }
    public function getMain()
    {
        $main =Main::latest()->first();
        return view('dashboard.pages.main.imageupload')->with(['main'=>$main]);
    }
    public function getMainApi()
    {
        $main =Main::latest()->first();
        return response()->json(['title'=>$main->title,'image'=>$main->image],200);
    }
}
