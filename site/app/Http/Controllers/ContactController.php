<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function index()
    {
        return view('/Contact/index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            "name" => 'required|min:3',
            "email" => 'required|email',
            "message" => 'required|min:10'
        ]);
    }
}
