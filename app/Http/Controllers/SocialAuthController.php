<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\SocialAccountService;
use Socialite;


class SocialAuthController extends Controller
{
    public function redirect($provider, Request $request)
    {
    	return Socialite::driver($provider)->redirect();
    }

    public function callback($provider, Request $request)
    { 
        $serviceUser = Socialite::driver($provider)->user();
        dd($serviceUser);
    	// $user = $service->createOrGetUser(Socialite::driver($provider)->user());
    	// // dd($user);
     //    auth()->login($user);
     //    if(empty(Auth::user()->email) || empty(Auth::user()->phone) ){
     //    	return redirect()->view('profile.edit')
     //    		->with('info', 'Hello, we\'re glad you signed up using your '.$provider.' account please update your profile, provide your phone number and choose a password.');
     //    }else {
     //    	return redirect()->route('home');
     //    }
    }
}
