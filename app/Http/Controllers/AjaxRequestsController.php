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
    	if($request->ajax()){
            $state = State::find($id);
            $data = $state->locations;
            return $data->toJson();
        }else{
            return redirect()->route('home');
        }
    }

    //get state local govts for ajax request
    public function getSubCat(Request $request, $id)
    {
    	if($request->ajax()){
            $cat = Category::find($id);
            $data = $cat->subCats;

            return response()->json($data, 200);
            return $data->toJson();
        }else{
            return redirect()->route('home');
        }
    }
}
