<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon;


class ServiceDetails extends Controller
{
    // public function time($time)
    // {
    //     Carbon::diffForHumans($time);
    // }

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
