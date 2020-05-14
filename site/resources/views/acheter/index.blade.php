@extends('layouts.app')

@section('content')

    <div class="container">
        @foreach($products as $product)
        <div class="card" style="margin-left: 10%; width: 80%; margin-top: 50px">
            <img style="height: 400px" src="https://i0.wp.com/www.blablahightech.fr/wp-content/uploads/2016/06/maxresdefault.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">{{$product->title}}</p>
            </div>
        </div>
        @endforeach
    </div>

@endsection