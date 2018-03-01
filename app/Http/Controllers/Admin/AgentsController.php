<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

class AgentsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['citi_admin']);
    }


    public function index()
    {
        //select all users that have an agent record
        $agents = User::has('agent')->get();


        return view('dashboard.pages.agents')->with('agents',$agents);
    }
}
