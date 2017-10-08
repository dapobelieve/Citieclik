<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\SocialAccountService;
use Socialite;

// http://localhost:8000/callback?code=AQDpJ-w9KZIEDeh1U_73J_1F0zS7UK7D7AOGp2D5AMD1CxIZyr9MHx-1fwan7-F5z4ZItn8fTYOI1qg5xZ9M2bSBSsQTXnJsn0dJFbnJjsAlyognrDMVbHc-mb3s6ZQlfgdY0Tp4JLU1qVNLDfVmJmhFb6H3Ln8M64aYfI4u3H0Ofk6lXut0JBK6dHzkGblSHvVOMjOrgd2Vl6CW2WaV850T3KXI1x3logvRoTIoCigDn3hzvCXWXfmf46v35qGqMU-S0b-rMyzZzTqyVKvNDCSAUh7C1gnGNh5ZuZrhB0ILPyLuepAmKRj3BWUR_InO7f6Mc5nFnntlQ6T54YkxXeO0&state=BbULqWFDmz8RZnNYvV79MBZlFfXNM28LOz2fTtpQ#_=_

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
        if(empty(Auth::user()->email) || empty(Auth::user()->phone) ){
        	return redirect()->view('profile.edit')
        		->with('info', 'Hello, we\'re glad you signed up using your '.$provider.' account please update your profile, provide your phone number and choose a password.');
        }else {
        	return redirect()->route('home');
        }
    }
}
