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
    	$users 		= User::get();
        return view('dashboard.pages.users')->with('users', $users);
    }
}
