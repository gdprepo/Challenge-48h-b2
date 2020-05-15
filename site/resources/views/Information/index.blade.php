@extends('layouts.app')

@section('content')



    <div class="Info">
        <div class="articles">
            <img style="width:40%;" src="{{ asset('images/skatepublicite.png') }}"> 
            <div class="textearticles">
                <h2>Pourquoi le skate?</h2>
                <p>
                    Le premier avantage est sans aucun doute lié à la praticité. Si vous utilisez votre planche a roulette électrique<br/>
                    pour vous déplacer au quotidien pour aller au boulot ou en cours, c’est beaucoup moins fatigant qu’avec un skate ordinaire.<br/>
                    Nos planches peuvent aller jusqu'à 45 Km/h<br/>
                    <br/>
                    Et en ce qui concerne les nombreux soi-disant problèmes liés au fait justement que le skate soit électrique,<br/>
                    Nous garantissons que les modèles choisis sont fiable et solide. En effet, les skates électriques que nous possédont<br/>
                    sont maniables et robustes, convenant tout aussi bien aux adultes qu’aux enfants.
                </p>
            </div>
        </div>
        <div class="articles2">
            <div class="textearticles">
                <h2>Fonctionnement</h2>
                <p>
                    Un skateboard electric est un engin de transport personnel basé sur le modèle d’une planche à roulettes.<br/>
                    La vitesse est contrôlée par un accélérateur manuel ou un changement de poids et le sens de déplacement qui<br/>
                    est réglé en inclinant la planche d’un côté ou de l’autre.
                </p>
            </div>
            <img style="width:50%;" src="{{ asset('images/skatepublicité2.jpg') }}"> 
        </div>
        <div class="articles">
            <img style="width:40%;" src="{{ asset('images/manette.jpeg') }}"> 
            <div class="textearticles">
                <h2>Utilisation manette</h2>
                <p>
                    -Pour démarrer ou arrêter le skate faire glisser le bouton 1<br/>
                    -Pour charger la manette brancher son cable sur 2<br/>
                    -Pour accélérer, poussez avec le pouce la gâchette 3 vers l'avant. Pour freiner, tirez vers le bas.<br/>
                    -Les planches possèdent 3 niveaux de vitesse, qui s'active à partir du petit interrupteur 4 situé sur la tranche de la télécommande.<br/>
                    -Le niveau de la batterie du skate 6 et de la manette 7<br/>
                </p>
            </div>
        </div>
        <div class="articles2">
            <div class="textearticles">
                <h2>Nos skates</h2>
                <p>
                    Bien sûr nous choisissons des planches tout d'abords pour une expérience agréable et sans dangers.<br/>
                    Nous avons donc opté pour le skate motorisé modèle urbain pour une meilleure prise en main.<br/>
                    Nos planches électriques peuvent offrir des gammes de vitesses allant de 35 km/h à 45 km/h.<br/>
                    Leur autonomie max est d'en moyenne de 20 à 30 minutes environ.
                </p>
            </div>
            <img style="width:30%;"src="{{ asset('images/skateplanche.jpg') }}"> 
        </div>  
        <div class="articles">
            <img style="width:30%;"src="{{ asset('images/skatefuture.jpg') }}"> 
            <div class="textearticles">
                <h2>Envie d'aventures?</h2>
                <p>Envie de plus de sensation ? Essaye les nouveaux modèles (limitées et plus chères)</p>
            </div>
        </div>  
        <div class="articles2">
            <div class="textearticles">
                <h2>Payements</h2>
                <p>Le déverrouillage de l’appareil coûte 1 euro, plus 10 centimes pour chaque minute de réservation.</p>
            </div>
            <img style="width:40%;" src="{{ asset('images/Payement.jpg') }}"> 
        </div>
    </div>


@stop