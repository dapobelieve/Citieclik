<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\State;
use App\Category;
use App\Cat;
use App\Subcategory;

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
    public function getCat(Request $request, $id)
    {
    	if($request->ajax()){
            $cat = Cat::findOrFail($id);
            $data = $cat->categories;

            return response()->json($data, 200);
            // return $data->toJson();
        }else{
            return redirect()->route('home');
        }
    }

    public function getSubCat(Request $request, $id)
    {
        $cat = Category::findOrFail($id);
        $data = $cat->subCats;

        return response()->json($data, 200);
    }

    public function getSubCat2(Request $request, $id)
    {
        $subCat = Subcategory::findOrFail($id);
        $data = $subCat->subCats2;
        return response()->json($data, 200);
    }
}
