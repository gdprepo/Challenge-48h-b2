<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    function index()
    {
        $products = Product::all();

        return view('acheter.index', ['products' => $products]);
    }

    function show($id)
    {
        $product = Product::find($id);

        return view('acheter.show', ['product' => $product]);
    }
    
}
