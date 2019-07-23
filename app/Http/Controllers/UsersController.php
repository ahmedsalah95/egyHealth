<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function __construct()
    {
        
    }
    public function index()
    {
        $users = User::all();
        return view('dashboard.pages.users.index')->with(['users'=>$users]);
    }

    public function deleteUser($id)
    {
        $user = User::find($id)->delete();

        if($user)
        {
            return redirect('users');
        }


    }
}
