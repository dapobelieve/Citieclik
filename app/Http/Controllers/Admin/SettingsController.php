<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController
{
    public function site()
    {
        return view('dashboard.settings.site');
    } 
    
}