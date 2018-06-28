<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Controllers\Sms\SmsController;

use App\User;
use Hash;

class PopulateController extends Controller
{
    public function index (Request $request) {
        
        return view('auth.populate');
    }


    /**
     * store new sign up
     * @param  Request $request [description]
     * @return view           [return to the profile page]
     */
    public function store (Request $request) {
        // dd($request->all());
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required|unique:users|digits:11',
            'password' => 'required|min:6'
        ],[
            'name.required'  => 'Enter a name or username',
            'phone.required' => 'Phone number is required',
            'phone.digits' => 'Phone Number must be 11 digits',
            'phone.unique'   => 'Phone number is already registered on our servers',
            'password.required'       => 'A password is required'
        ]);

        $user = User::create([
            'username' => "@".$request->name,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'slug'    => str_slug($request->name),
            'verify'   => 1,
        ]);

        // send sms here!
        $sms = new SmsController;
        $sms->smsNewUser($user->phone);



        return redirect()->route('home')
                    ->with('title', 'Congratulations')
                     ->with('success', 'Account has been created.');
    }
}
