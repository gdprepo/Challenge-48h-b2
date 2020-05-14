<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class DashboardController extends Controller
{
    function product()
    {
        $products = Product::all();

        return view('dashboard.product', ['products' => $products]);
    }
}
