<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CharsController extends Controller
{
    public function googleLineChart()
    {
        $employees = User::all();

        return view('donald', compact('employees'));
    }

    public function barchart(Request $request)
    {
    	$fruit = Product::where('product_type','fruit')->get();
    	$veg = Product::where('product_type','vegitable')->get();
    	$grains = Product::where('product_type','grains')->get();
    	$fruit_count = count($fruit);
    	$veg_count = count($veg);
    	$grains_count = count($grains);

    	return view('barchart',compact('fruit_count','veg_count','grains_count'));
    }
}
