<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\State;
use App\Category;
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
    public function getSubCat(Request $request, $id)
    {
    	if($request->ajax()){
            $cat = Category::find($id);
            $data = $cat->subCats;

            return response()->json($data, 200);
            // return $data->toJson();
        }else{
            return redirect()->route('home');
        }
    }

    //get parent categories
    public function getParent(Request $request, $type)
    {
        if($request->ajax()){
            $cats = Category::where('type', $type)->get();

            return response()->json($cats, 200);

        }else{
            return redirect()->route('home');
        }
    }

    public function getSubCat2(Request $request,SubCategory $id)
    {
        return response()->json($id->subCats2, 200);
    }
}
