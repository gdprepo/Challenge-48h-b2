@extends('layouts.app')

@section('content')

    <div class="container" style="width:100%;">
        <div class="row">
        @foreach($products as $product)
        <div class="col-sm" style="margin-top: 100px">
            <div class="card" style="width: 100%; margin-top: 50px">
                <img style="height: 250px" src="{{$product->image}}" class="card-img-top img-thumbnail" alt="...">
                <a href="{{route('acheter.show', $product->id)}}">
                    <div class="card-body">
                        <p class="card-text">{{$product->title}}</p>
                        <p>{{$product->description}}</p>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
        </div>
    </div>

@endsection