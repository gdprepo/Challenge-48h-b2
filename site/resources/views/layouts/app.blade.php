<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

                <div class="pos-f-t fixed-top">
                    <nav class="navbar navbar-light bg-light">
                        <a href="/"><img style="width:30%;" src="{{ asset('images/logo.png') }}"></a>

                        <div class="ensemble">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                    </nav>
                    <div class="collapse" id="navbarToggleExternalContent">
                        <div class="bg-light p-4">
                        <h4 class="text-black">SKAEL</h4>
                        <a class="navbar-brand" href="/">Skate Bordeaux</a>
<<<<<<< HEAD
                        <a class="navbar-brand" href="{{route('acheter.index')}}">Information</a>
                        <a class="navbar-brand" href="/Contact">Contactez-nous</a>

=======
                        <a class="navbar-brand" href="{{route('Information.index')}}">Information</a>
                        <a class="navbar-brand" href="/Contact">Contactez-nous</a>
>>>>>>> 0a35e07332631f2e3f1b48df821452da4b1312aa
                        @auth
                            <a class="navbar-brand" href="/">Nos parkings</a>
                            <a class="navbar-brand" href="/mapskate">Skate pas loin</a>
                        @endauth
                        <div style="float :right" class="top-right links">
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
                </div>
            </div>
        </div>


        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
