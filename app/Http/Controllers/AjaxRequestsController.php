<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\State;
use App\Category;

class AjaxRequestsController extends Controller
{
    //get state local govts for ajax request
    public function getLocation(Request $request, $id)
    {
    	$state = State::find($id);
    	$data = $state->locations;
    	return $data->toJson();
    }

    //get state local govts for ajax request
    public function getSubCat(Request $request, $id)
    {
    	$cat = Category::find($id);
        $data = $cat->subCats;
        return $data->toJson(); 
    }
}
