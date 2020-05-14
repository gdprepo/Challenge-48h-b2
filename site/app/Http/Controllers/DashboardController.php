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

    function productDelete($id)
    {
        $products = Product::find($id);
        $product->delete();

        return view('dashboard.product');
    }

    function productAdd()
    {
        return view('dashboard.addProduct');
    }

    function productCreate(Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'description' => ['required'],
            'image' => ['required'],
        ]);

        $product = new Product;

        $product->title = $request->input('title');
        $product->description = $request->input('description');
        $product->image = $request->input('image');
        $product->save();

        return back()->withInfo('Product create');

    }
}
