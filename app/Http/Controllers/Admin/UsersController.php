<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware(['citi_admin']);
    }


    public function index()
    {
        return view('dashboard.pages.users');
    }

    public function getUsers(Request $request)
    {
        if($request->ajax()){
            $users = User::get();
            return $users->toJson();
        }
            
    }
}
