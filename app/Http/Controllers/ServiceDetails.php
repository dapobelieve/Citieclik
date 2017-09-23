<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;




class ServiceDetails extends Controller
{
    public function index($username, $slug)
    {
    	return view('pages.servicedetails');
    }
}
