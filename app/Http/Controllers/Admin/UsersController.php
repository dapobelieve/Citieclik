<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Subscription;
// use App\User;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware(['citi_admin']);
    }


    public function index()
    {
    	$users = User::latest()->get();
        return view('dashboard.pages.users')->with('users', $users);
    }

    public function getUsers(Request $request)
    {
        if($request->ajax()){
            $users = User::get();
            return $users->toJson();
        }else{
            return view('dashboard.pages.home');
        }
    }

    public function show(User $slug)
    {
        $user = $slug->with('services','requests')->first();
        // dd($user);
        return view('dashboard.pages.userprofile')->with('user', $user);
    }


    public function getSubscribedUsers()
    {

        $activeUsers = collect(Subscription::with('user')->where('status', true)->get());


        dd($activeUsers->toArray());
        $data = user()->getSubuser('user_id');
        dd($data);

        return view('dashboard.pages.subusers')
            ->with('datas', $data);
    }

}
