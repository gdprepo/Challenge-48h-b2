@extends('layouts.app')

@section('content')

    <div class="container" style="width:100%">
        <div class="row">
        @foreach($products as $product)
        <div class="col-sm">
            <div class="card" style="width: 100%; margin-top: 50px">
                <img style="" src="https://i0.wp.com/www.blablahightech.fr/wp-content/uploads/2016/06/maxresdefault.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">{{$product->title}}</p>
                </div>
            </div>
        </div>
        @endforeach
        </div>
    </div>

@endsection