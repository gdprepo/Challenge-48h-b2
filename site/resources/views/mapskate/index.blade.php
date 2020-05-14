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

    <script src="https://maps.google.com/maps/api/js?key=AIzaSyDnjddgiIzugWefdxHL4aqds_3SbBb_iz4" type="text/javascript"></script>
		<script async type="text/javascript">
			// On initialise la latitude et la longitude de Bordeux (centre de la carte)
			var lat = 44.841225;
			var lon = -0.5800364;
			var map = null;
			// Fonction d'initialisation de la carte
			function initMap() {
				// Créer l'objet "map" et l'insèrer dans l'élément HTML qui a l'ID "map"
				map = new google.maps.Map(document.getElementById("map"), {
					// Nous plaçons le centre de la carte avec les coordonnées ci-dessus
					center: new google.maps.LatLng(lat, lon), 
					// Nous définissons le zoom par défaut
					zoom: 11, 
					// Nous définissons le type de carte (ici carte routière)
					mapTypeId: google.maps.MapTypeId.ROADMAP, 
					// Nous activons les options de contrôle de la carte (plan, satellite...)
					mapTypeControl: true,
					// Nous désactivons la roulette de souris
					scrollwheel: false, 
					mapTypeControlOptions: {
						// Cette option sert à définir comment les options se placent
						style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR 
					},
					// Activation des options de navigation dans la carte (zoom...)
					navigationControl: true, 
					navigationControlOptions: {
						// Comment ces options doivent-elles s'afficher
						style: google.maps.NavigationControlStyle.ZOOM_PAN 
					}
				});
			}
			window.onload = function(){
				// Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
				initMap(); 
			};
            var villes = {
	"Paris":{"lat": 44.8623715,"lon": -0.5500191},
	"Brest":{"lat": 44.845317649260124,"lon": -0.5730832184174939},
	"Quimper":{"lat": 44.82567078039429,"lon": -0.5556991433816871},
	"Bayonne":{"lat": 44.8310139,"lon": -0.5726503}
};
function initMap() {
	map = new google.maps.Map(document.getElementById("map"), {
		center: new google.maps.LatLng(lat, lon),
		zoom: 12,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		mapTypeControl: true,
		scrollwheel: false,
		mapTypeControlOptions: {
			style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR
		},
		navigationControl: true,
		navigationControlOptions: {
			style: google.maps.NavigationControlStyle.ZOOM_PAN
		}
	});
	// Nous parcourons la liste des villes
	for(ville in villes){
		var marker = new google.maps.Marker({
			// A chaque boucle, la latitude et la longitude sont lues dans le tableau
			position: {lat: villes[ville].lat, lng: villes[ville].lon},
			// On en profite pour ajouter une info-bulle contenant le nom de la ville
			title: ville,
			map: map
		});	
	}
}
		</script>
		<style type="text/css">
			#map{ /* la carte DOIT avoir une hauteur sinon elle n'apparaît pas */
				height:550px;
                width:1280px;
			}
            .header {
                padding-top:170px;
                text-align:center;
            }
		</style>
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
                        <a class="navbar-brand" href="{{route('acheter.index')}}">Information</a>
                        <a class="navbar-brand" href="/">Contactez-nous</a>
                        @auth
                            <a class="navbar-brand" href="/">Nos parkings</a>
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
    <div class="header">
    <h2>Vous voulez utiliser un de nos magnifiques skates electrique ?
    <p>Trouvez-les sur la map !</p>
    </h2>
    </div>
    <div id="map">
			<!-- Ici s'affichera la carte -->
		</div>
  </body>
</html>
