@extends('layouts.app')

@section('content')



            <!-- @if (Route::has('login'))
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

            @endif -->
            <div class="background">
                <div style=" margin-left:5%; margin-top:30%">
                    <h1>Bienvenue sur SKAEL</h1>
                    <p>Nous proposons des Skate electrique <br/>partout dans bordeaux</p>
                    <a style="color = black;" href="/Information">En savoir plus</a>
                </div>
            </div>
            <div style=" margin-top:1%" id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="5000">
                        <img style="height: 600px; margin-top: -200px" src="https://i2.wp.com/monskateelectrique.fr/wp-content/uploads/2017/12/skate-electrique-photo1.jpg?resize=1280%2C720&ssl=1" class="d-block w-100" alt="...">
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
            <div class="background2">
                <div style=" margin-left:5%">

                </div>
            </div>

            <div class="container">

                <div class="card" style="margin-left: 10%; width: 80%; margin-top: 50px">
                    <img style="height: 400px" src="{{ asset('images/skateur.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2>Des parking réguliers</h2>
                        <p>SKAEL vous permet d'aller partout rapidement</p>
                        <a href="/">En savoir plus</a>
                    </div>
                </div>
            </div>

@endsection