<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
	// Dashboard Sigin 
	public function dashboardSignin()
	{
		return view('dashboard.signin');
	}

    public function index()
    {
    	return view('dashboard.home');
    }
}
