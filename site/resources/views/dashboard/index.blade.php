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
                <div class="card-header">Admin</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!


                    <ul style="margin-left: 10%; margin-top: 50px; margin-bottom: 50px;" class="list-group list-group-horizontal">
                        <a href="{{route('home')}}"><li class="list-group-item">Skate Bordeaux</li></a>
                        <a href="{{route('home')}}"><li class="list-group-item">Information</li></a>
                        <a href="{{route('home')}}"><li class="list-group-item">Nos magasins</li></a>
                        <a href="{{route('home')}}"><li class="list-group-item">Contact</li></a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
