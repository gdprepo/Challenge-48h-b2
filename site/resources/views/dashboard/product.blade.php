@extends('layouts.app')
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="{{ url('/') }}">Skate Bordeaux</a>
  <div class="top-right links">
    @auth
        <a href="{{ url('/home') }}">Home</a>
        <a href="{{ route('logout') }}">Disconnect</a>
    @else
        <a href="{{ route('login') }}">Login</a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
        @endif
    @endauth
  </div>
</nav>
@section('content')
<div class="container">
    <div style="margin-top: 100px" class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List</div>

                <div class="card-body">
                        product
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
