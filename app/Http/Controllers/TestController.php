<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class TestController extends Controller
{
    public function index()
    {
    	$val = "@".uniqid();
    	dd($val);
    }

    //some code goes here
}
