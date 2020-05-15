<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Map;

class MapskateController extends Controller
{
    function index()
    {
        $maps = Map::all();

        return view('/mapskate/index', ['maps' => $maps]);
    }
}
