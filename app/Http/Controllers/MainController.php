<?php

namespace App\Http\Controllers;

use App\Main;
use App\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\User;
use Illuminate\Support\Facades\Cookie;
use Mockery\Matcher\Not;

class MainController extends Controller
{

    public function logoUpload(Request $request)
    {
        $request->validate([
            'image' => 'required|image',
            'title' => 'required',
        ]);

        $saveTestimonial = new Main();
        $file = $request->file('image');
        if ($file) {
            $filename = $file->getClientOriginalName();
            $path = "img/alt_images";
            $file->move($path, $filename);
            $saveTestimonial->image = $filename;
        }
        $saveTestimonial->title = $request['title'];

        $saveTestimonial->save();
        return redirect('main');
    }

    public function getMain()
    {
        $main = Main::latest()->first();
        return view('dashboard.pages.main.imageupload')->with(['main' => $main]);
    }

    public function getMainApi()
    {
        $main = Main::latest()->first();
        return response()->json(['title' => $main->title, 'image' => $main->image], 200);
    }

    //notifications


    public function notifications()
    {
        $notifications = Notification::all();
        return view('dashboard.pages.main.notificationIndex')->with(['notifications' => $notifications]);
    }

    public function notificationShow()
    {
        return view('dashboard.pages.main.notificationShow');
    }

    public function notificationStore(Request $request)
    {
        $request->validate([
            'notification_name' => 'required',
            'notification_desc' => 'required'
        ]);
        $notification = new Notification();
        $notification->notification_name = $request->notification_name;
        $notification->notification_desc = $request->notification_desc;
        $notification->save();

        return redirect('notifications');
    }

    public function deleteNotification($id)
    {
        Notification::find($id)->delete();
        return redirect('notifications');
    }

    public function getNotification()
    {
        $notification = Notification::latest()->first();
        return response()->json(['notification' => $notification], 200);
    }

}
