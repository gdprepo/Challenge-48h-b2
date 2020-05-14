<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MapskateController extends Controller
{
    function index()
    {
        return view('/mapskate/index');
    }
}
