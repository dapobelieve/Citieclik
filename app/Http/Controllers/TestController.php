<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Plan;
use App\Cat;
use App\Category;
use App\Service;
use App\Subcategory;
use Carbon\Carbon;
use App\Subscription;

use App\Http\Controller\Funcs\Slug;
/**
* A contorller to test
* some logics before 
* using them in my app 
*/

class TestController extends Controller
{

    public function index()
    {
        $veh = [
            'Earphones',
            'Chargers',
            'Screen Guards',
            'Power Bank',
        ];

        $cats = Cat::with('services')->first();

        dd($cats);
        

        // dd($data->count());
        // foreach ($veh as $key => $value) {
        //     Category::create([
        //         'cat_id' => 3,
        //         'category' => $value,
        //         'slug'     => str_slug($value)
        //     ]);
        // }
        
    }
}