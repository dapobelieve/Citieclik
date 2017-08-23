<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use App\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
     //slug method cool huh ;)
    private function slugIt($slug)
    {
        $lettersNamesSpaces = '/[^\-\s\pN\pL]+/u';
        $spacesHypens = '/[\-\s]+/';

        $slug = preg_replace($lettersNamesSpaces, '', mb_strtolower($slug, 'UTF-8'));

        $slug = preg_replace($spacesHypens, '-', $slug);

        $slug = trim($slug, '-');

        return $slug;
    }



    public function getSignup()
    {
    	return view('auth.auth');
    }

    //validate and register user
    public function postSignup(Request $request)
    {
    	// validating the data
    	$this->validate($request , [
            'fname' => 'required|string',
            'lname' => 'string',
    		'email' => 'required|unique:users|email|max:255',
    		'phone' => 'required|unique:users|digits:11',
    		'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password'
    	],
        [
            'phone.required' => 'Phone Number Required',
            'phone.digits' => 'Phone Number must be 11 digits',
        ]);

        $fname = $this->slugIt($request->input('fname'));

    	// submmiting users details to the db
    	User::create([
            'email' => $request->input('email'),
            'first_name' => $fname,
    		'last_name' => $request->input('lname'),
    		'phone' => $request->input('phone'),
    		'password' => Hash::make($request->input('password'))
    	]);

        //automatically logging
    	if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
            return redirect()->route('home')
                     ->with('info', 'You account has been created successfully!');
        } 
    }


    public function postSignin(Request $request)
    {
    	$this->validate($request,[
    		'phone1' => 'required|numeric',
    		'password1' => 'required',
    	]);
  	
    	if(!Auth::attempt($request->only(['email','password']), $request->has('remember'))){
    		
    		return redirect()->back()->with('info','Could not sign you in. Invalid Details');
    	}

    	return redirect()->route('home')->with('info','You are now signed in');
    } 

    public function getSignout()
    {
        Auth::logout();
         return redirect()->route('home');
    }



}
