<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Service;

class SearchController extends Controller
{
    public function getResult(Request $request)
    {
    	$queryState = $request->input('state');
    	$queryCategory = $request->input('category');

        $services = Service::where([
                    ['state_id', $queryState],
                    ['category_id', $queryCategory]
                    ])->get();
    	// dd($request);
    	return view('search.searchresults')->with('sdata', $services);
    }
}
