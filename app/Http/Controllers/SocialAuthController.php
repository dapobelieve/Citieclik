<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\SocialAccountService;
use Socialite;

class SocialAuthController extends Controller
{
    public function redirect($provider)
    {
    	return Socialite::driver($provider)->redirect();
    }

    public function callback(SocialAccountService $service, $provider)
    {
    	$user = $service->createOrGetUser(Socialite::driver($provider));
    	// dd($user);
        auth()->login($user);
        if(empty(Auth::user()->email) || Auth::user()->userCatsCount() == 0 ){
        	return redirect()->route('profile.update')
        		->with('info', 'Hello, we\'re glad you signed up using your '.$provider.' account please update your profile and select categories you\'re interested in.');
        }else {
        	return redirect()->route('home');
        }
    }
}
