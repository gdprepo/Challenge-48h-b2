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
                    List 
                    <div class="top-right links" style="float: right">
                        <a href="{{route('product.add')}}">Ajouter</a>
                    </div>
                
                </div>

                <div class="card-body">
                        
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Titre</th>
                        <th scope="col">Image</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action(s)</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td scope="row">{{$product->title}}</td>
                        <td><img class="imgProduct" src="{{$product->image}}"></img></td>
                        <td scope="row">{{$product->description}}</td>
                        
                        <td scope="row">
                            <form action="{{route('product.delete', $product->id)}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary">Supprimer </button>
                            </form>
                        </td>    
                    
                    
                    
                    </tr>

                    @endforeach

                    </tbody>
                </table>


                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
