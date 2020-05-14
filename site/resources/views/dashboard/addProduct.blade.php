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
            
                <div class="card-header">
                    Add Product 
                    <div class="top-right links" style="float: right">
                        <a href="{{route('dashboard.product')}}">Retour</a>
                    </div>

                </div>

                <div class="card-body">
                        
                    <form method="post" action="{{route('product.create')}}">
                    @csrf
                        <div class="form-group">
                            <label>Titre </label>
                            <input class="form-control" type="text" name="title" id="title" placeholder="Entrer un titre">
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <input class="form-control" type="text" name="description" id="description" placeholder="Entrer une description">
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input class="form-control" type="text" name="image" id="image" placeholder="Entrer une image">
                        </div>

                        <div class="form-group">
                            <label>Autonomie</label>
                            <input class="form-control" type="text" name="image" id="image" placeholder="Entrer une image">
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input class="form-control" type="text" name="image" id="image" placeholder="Entrer une image">
                        </div>

                        <button class="form-control" type="submit" class="btn btn-primary">Enregistrer</button>

                    </form>


                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
