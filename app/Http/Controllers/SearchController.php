<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Service;

class SearchController extends Controller
{
    public function getResult(Request $request)
    {
        // dd($request);
    	$queryState = $request->input('search');
    	$queryCategory = $request->input('state');

        $services = Service::where([
                        ['title', 'LIKE', "%{$queryState}%"],
                        ['state_id', $queryCategory]
                    ])->latest()->paginate(10);
    	// dd($services->count());
    	return view('search.searchresults')->with('sdata', $services);
    }

    public function search (Request $request)
    {
        $query = $request->input('query');
        $services = Service::where('description', 'LIKE', "%{$query}%")
                                ->orWhere('title', 'LIKE', "%{$query}%")
                                ->latest()
                                ->paginate(10);
        
        return view('search.searchresults')->with('sdata', $services);
    }
}
