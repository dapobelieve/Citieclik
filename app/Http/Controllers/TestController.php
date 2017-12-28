<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class TestController extends Controller
{
    public function index()
    {

    	$val = Auth::user()->getActiveSubscription();
        $val = $val->plan_id;
    	dd($val);
    }
