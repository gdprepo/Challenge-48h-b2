@extends('layouts.app')
@section('content')
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyDnjddgiIzugWefdxHL4aqds_3SbBb_iz4" type="text/javascript"></script>
<<<<<<< HEAD
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
				"Cite du vin":{"lat": 44.8623715,"lon": -0.5500191},
			}

			var maps = <?php echo json_encode($maps); ?>;
			

			for (const [ville, map] of Object.entries(maps)) {

				let title = map.title

				var obj = {
					[title] : {
						lat : parseFloat(map.lat, 10),
						lon : parseFloat(map.lon, 10),
					},
				}

				var res = $.extend({}, obj)

				Object.assign(villes, res);


			}

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
=======
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
>>>>>>> b2d19038c651a3d51271d23ca277c5a2b63624a2
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
	
	<body class="body2">
		<div class="toutmap">
			<div class="header">
				<h2>Vous voulez utiliser un de nos magnifiques skates electrique ?
					<p>Trouvez-les sur la map !</p>
				</h2>
			</div>
			<div style="margin-left: 5%" id="map">
					<!-- Ici s'affichera la carte -->
			</div>
		</div>
	</body>

@endsection



