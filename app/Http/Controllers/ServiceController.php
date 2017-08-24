<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
    	return view('services');
    }

    //Add services
    public function getAddService()
    {
    	return view('pages.addservice');
    }
}
