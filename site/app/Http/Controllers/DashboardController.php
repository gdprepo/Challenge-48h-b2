<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Map;

class DashboardController extends Controller
{
    function product()
    {
        $products = Product::all();

        return view('dashboard.product', ['products' => $products]);
    }

    function productDelete($id)
    {
        $product = Product::find($id);
        $product->delete();

        return back()->withInfo('Delete product');
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
        $product->autonomie = $request->input('autonomie');
        $product->vitesse = $request->input('vitesse');
        $product->couleur = $request->input('couleur');
        $product->prix = $request->input('prix');
        
        $product->save();

        return back()->withInfo('Product create');

    }

    function mapskate()
    {
        $maps = Map::all();

        return view('dashboard.mapskate', ['maps' => $maps]);
    }

    function mapDelete($id)
    {
        $map = Map::find($id);
        $map->delete();

        return back()->withInfo('Delete');

    }
}
