<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class RequestDetails extends Controller
{

    public function index()
    {
    	return view('pages.requestdetail');
    }
}
