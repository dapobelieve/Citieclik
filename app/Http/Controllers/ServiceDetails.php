<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use App\Service;


class ServiceDetails extends Controller
{
    // public function time($time)
    // {
    //     Carbon::diffForHumans($time);
    // }

    // get all services view
    public function indexall()
    {
        $serviceData = Service::take(200)->postOnly()->where('type', 's')->get();

     return view('service.service')->with('sdata', $serviceData)
                                    ->with('type', 's');
    }

    public function getServiceDetails()
    {
        return view('pages.servicedetails');
    }

    public function index($username, $slug)
    {
    	 $user = User::where('username', $username)->first();

        if(!$user)
        {
            abort(404);
        }else{
             $servDet = $user->services->where('slug', $slug)->first();
            if(!$servDet)
            {
                abort(404);
            }else{
                return view('service.servicedetails')
                        ->with('service', $servDet)
                        ->with('user', $user);
            }
        } 
    }
}
