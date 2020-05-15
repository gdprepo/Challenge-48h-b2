@extends('layouts.app')

@section('content')

    <div class="container">

        <div style=" margin-top:100px" id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="5000">
                    <img style="height: 600px; margin-top: -200px" src="{{$product->image}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-interval="5000">
                    <img style="height: 600px; margin-top: -200px" src="https://trottineteelectrique.online/wp-content/uploads/acheter-skate-electric-3-1024x576.jpg" class="d-block w-100" alt="...">  
                </div>
                <div class="carousel-item" data-interval="5000">
                    <img style="height: 600px; margin-top: -200px" src="{{ asset('images/imgaléatoire.png') }}" class="d-block w-100" alt="...">  
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="row" style="margin-top: 50px;">

                <div style=" width: 100%"  class="card">
                    <div class="card-header">
                        <p class="card-text">{{$product->title}}</p>
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                        <p>{{$product->description}} lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <ul>
                            <li>Autonomie : {{$product->autonomie}} heures</li>
                            <li>Vitesse : {{$product->vitesse}}  km/h</li>
                            <li>Couleur : {{$product->couleur}} </li>
                            <li>Prix : {{$product->prix}} cts/min</li>
                        </ul>
                        
                        
                        <footer style="" class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                        </blockquote>
                    </div>
                </div>




        </div>
    </div>

@endsection