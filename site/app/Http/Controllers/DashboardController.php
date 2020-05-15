<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Map;

class DashboardController extends Controller
{
    function product()
    {
        if (!$this->isAdmin()) {
            return redirect('/');
        }

        $products = Product::all();

        return view('dashboard.product', ['products' => $products]);
    }

    function productDelete($id)
    {
        if (!$this->isAdmin()) {
            return redirect('/');
        }

        $product = Product::find($id);
        $product->delete();

        return back()->withInfo('Delete product');
    }

    function productAdd()
    {
        if (!$this->isAdmin()) {
            return redirect('/');
        }

        return view('dashboard.addProduct');
    }

    function productCreate(Request $request)
    {
        if (!$this->isAdmin()) {
            return redirect('/');
        }

        $request->validate([
            'title' => ['required'],
            'description' => ['required'],
            'image' => ['required'],
        ]);

        $product = new Product;

        $product->title = $request->input('title');
        $product->description = $request->input('description');
        $product->image = $request->input('image');
        $product->autonomie = $request->input('autonomie');
        $product->vitesse = $request->input('vitesse');
        $product->couleur = $request->input('couleur');
        $product->prix = $request->input('prix');
        
        $product->save();

        return back()->withInfo('Product create');

    }

    function mapskate()
    {
        if (!$this->isAdmin()) {
            return redirect('/');
        }

        $maps = Map::all();

        return view('dashboard.mapskate', ['maps' => $maps]);
    }

    function mapDelete($id)
    {
        if (!$this->isAdmin()) {
            return redirect('/');
        }

        $map = Map::find($id);
        $map->delete();

        return back()->withInfo('Delete');

    }

    function mapAdd()
    {
        if (!$this->isAdmin()) {
            return redirect('/');
        }

        return view('dashboard.addMap');
    }

    function mapCreate(Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'lat' => ['required'],
            'lon' => ['required'],
        ]);

        $map = new Map;

        $map->title = $request->input('title');
        $map->lat = $request->input('lat');
        $map->lon = $request->input('lon');        
        $map->save();

        return back()->withInfo('Map create');

    }

    public function isAdmin()     
    {         
        $user = Auth::user(); 
        
        return (Auth::check() && $user->role === 'admin');     
    }
}
