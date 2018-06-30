<?php

namespace App\Http\Controllers\Actions\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Service;

class ProductController extends Controller
{
    // get all services view
    public function index()
    {
        $serviceData = Service::latest()->where('type', 'p')->paginate(30);

        // dd($serviceData->count());

        return view('service.product')->with('sdata', $serviceData)
                                    ->with('type', 'p');
    }

}
