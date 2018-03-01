<?php

namespace App\Http\Controllers\Agent;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Controllers\Funcs\Slug;
use App\Events\UserRegistered;
use App\Agent;
use App\User;
use Auth;
use Hash;

class AgentController extends Controller
{
    //

    public function index(Agent $agent)
    {
        if($agent->status != 1){
            return redirect()->route('home')->with('authMsg', 'Inactive Link');
        }
        return view('agent.index')->with('agentToken', $agent);
    }

    public function getPage()
    {
        return view('agent.register');
    }

    public function store(Request $request)
    {  
        //1. check if that link exists
        $agentToken = Agent::where('code', $request->token)->first();

        if(!$agentToken){
            return redirect()->route('home');
        }

        // dd($agentToken->user());

        //2. check if the status of the link is active 0 || 1
        if($agentToken->status != 1){
            return redirect()->route('home')->with('authMsg', 'Inactive Link');
        }
        

        // validate the data and store
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
            'fname.required' => 'The first name is required',
            'lname.required' => 'The last name is required',
            'lname.string' => 'The last name must be a Word',
        ]);

        $slug = Slug::slugIt("@".uniqid());

        // submmiting users details to the db
        $user = User::create([
            'email'      => $request->input('email'),
            'username'   => $slug,
            'first_name' => $request->input('fname'),
            'last_name'  => $request->input('lname'),
            'phone'      => $request->input('phone'),
            'password'   => Hash::make($request->input('password')),
            'slug'       => $slug,
            'ag_id'      => $agentToken->user_id,
        ]);

        //create a token for the user for email confirmation
        $user->token()->create([
            'token' => str_random(100), 
        ]);

        // email user for verification
        // event(new UserRegistered($user));

        //automatically log in user
        if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
            return redirect()->route('home')
                     ->with('success', 'You account has been created.  Check your mail to complete your registration.');
        } 
    }

    public function profile(User $user)
    { 
        if(!$user->isAgent()){
           return redirect()->route('home');
        }
        
        return view('agent.profile')->with('user', $user);
    }
}
