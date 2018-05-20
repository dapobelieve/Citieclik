<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Service;
use App\Request as ServiceRequest;
use App\Subscription;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['citi_admin']);
    }


    public function index()
    {
    	$users 		= User::get();
        $services   = Service::get();
    	$requests 	= ServiceRequest::get();
    	$subcribers = Subscription::where('pay_status', '1')->get();
    	$plans 		= Subscription::select('plan_id');
        return view('dashboard.pages.home')
        		->with('users', $users)
                ->with('services', $services)
        		->with('requests', $requests)
        		->with('subcribers', $subcribers)
        		->with('plans', $plans);
    }
}

