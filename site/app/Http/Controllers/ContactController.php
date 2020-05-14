<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    function index()
    {
        return view('/Contact/index');
    }

    public function store(ContactRequest $request)
    {
        
    }
}
