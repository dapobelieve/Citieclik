<?php

namespace App\Http\Controllers;

use Auth;
use Socialite;
use App\User;
use Illuminate\Http\Request;


class SocialAuthController extends Controller
{
    private function slugIt($slug)
    {
        $lettersNamesSpaces = '/[^\-\s\pN\pL]+/u';
        $spacesHypens = '/[\-\s]+/';

        $slug = preg_replace($lettersNamesSpaces, '', mb_strtolower($slug, 'UTF-8'));

        $slug = preg_replace($spacesHypens, '-', $slug);

        $slug = trim($slug, '-');

        return $slug;
    }


    public function redirect($service, Request $request)
    {
    	return Socialite::driver($service)->redirect();
    }

    public function callback($service, Request $request)
    { 
        $serviceUser = Socialite::driver($service)->user();
        // check if user aleady exists
        $user = $this->getExistingUser($serviceUser, $service);

        if(!$user){
             $slug = "@".uniqid();
            $user = User::create([
                'first_name' => $serviceUser->getName(),
                'email' => $serviceUser->getEmail(),
                'slug'  => $this->slugIt($slug),
                'username' => $this->slugIt($slug)
            ]);
        }

        if($this->needSocial($user, $service)){
            $user->social()->create([
                'social_id' => $serviceUser->getId(),
                'service' => $service 
            ]);
        }

        Auth::login($user, false);

        return redirect()->intended();    


        // dd($serviceUser);
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

     protected function needSocial(User $user, $service)
    {
        return !$user->hasSocialLinked($service);
    }

    protected function getExistingUser($serviceUser, $service)
    {
        return User::where('email', $serviceUser->getEmail())->orWhereHas('social', function($q) use ($serviceUser, $service) {
            $q->where('social_id', $serviceUser->getId())->where('service', $service);
        })->first();
    }
}
