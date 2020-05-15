<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if ($this->isAdmin()) {
            return view('dashboard.index');
        }
        if (Auth::check()) {
            return view('/welcome');
        }

        return view('home');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }

    public function isAdmin()     
    {         
        $user = Auth::user();          
        return (Auth::check() && $user->role === 'admin');     
    }
}
