<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule; 
use App\Category;
use Auth;
use App\User;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware(['AuthCheck']);
    }

    private function slugIt($slug)
    {
        $lettersNamesSpaces = '/[^\-\s\pN\pL]+/u';
        $spacesHypens = '/[\-\s]+/';

        $slug = preg_replace($lettersNamesSpaces, '', mb_strtolower($slug, 'UTF-8'));

        $slug = preg_replace($spacesHypens, '-', $slug);

        $slug = trim($slug, '-');

        return $slug;
    }

	public function getProfile($slug)
    {
    	$user = User::where('slug', $slug)->first();
        // $userServices = $user->getUserServices();
    	if(!$user){
    		abort(404);
    	}

    	return view('profile.services')
    			->with('user', $user);
    }

     //Get user Services 
    public function getService($slug)
    {
    	$user = User::where('slug', $slug)->first();
    	if(!$user){
    		abort(404);
    	}
    	// $services = $user->services()->get();
    	return view('profile.services')
    			->with('user', $user);
    }

    // View my requests

    public function getEditProfile()
    {
        $user = User::where('id', Auth::user()->id)->first();
        return view('profile.index')->with('user', $user);
    }

    public function postEditProfile(Request $request)
    {
        // validating the data
        $this->validate($request , [
            'fname' => 'required|string',
            
            'email' => [
                            'required',
                             Rule::unique('users')->ignore(Auth::user()->id),
                            'email',
                            'max:255',
                        ],
            'phone' => [
                            'required',
                            Rule::unique('users')->ignore(Auth::user()->id),
                            'digits:11',
                        ],
            'username' => [
                            'required',
                            'string',
                            Rule::unique('users')->ignore(Auth::user()->id),
                          ],
            // 'phone' => 'required|unique:users|digits:11',
            // 'username' => 'unique:users|string',
        ],
        [
            'phone.required'  => 'Phone Number Required',
            'username.unique' => 'Username Already Exists',
            'phone.digits'    => 'Phone Number must be 11 digits',
            'fname.required'  => 'The first name is required',
            'lname.string'    => 'The last name must be a Word',
        ]);
        // $slug = "@".uniqid();

        // submmiting users details to the db
        Auth::user()->update([
            'email'      => $request->input('email'),
            'username'   => $request->input('username'),
            'first_name' => $request->input('fname'),
            'last_name'  => $request->input('lname'),
            'phone'      => $request->input('phone'),
            'slug'       => $this->slugIt($request->input('username')),
        ]);

        return redirect()->back()->with('info', 'Profile Updated.');
    }

    public function updatePic(Request $request)
    {
       //  $data = $request->toJson();
       // return $data; 
        dd($request);
    }

}
