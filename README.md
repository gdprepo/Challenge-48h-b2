# Challenge-48h-b2

lien du github : https://github.com/wewlr17/Challenge-48h-b2

## Presentation

* Voici notre site web SKAEL qui presente une collection de skate electrique disponible à la location dans la ville de Bordeaux. Ce qui permet des trajets moins poluant et plus pratique.

## Description

* Le site est structure a partir de la methode MVC. Qui regroupe plusieurs partir : 
    *   Page princale, Information, Contactez-nous, Nos Parkings ainsi que Skate pas loin ( partie utilisateur )
    *   Dashboard : Ajouter des skates et des lieux ( partie admin )

## Installation

> Nous avons besoin de laravel 
>
> git clone le repo

> lancer la commande :
>
> composer install (avoir le vendor)

> 
> Creer un user et password mysql.
>
> Entrer les données dans le fichier .env et database.php
>
> Ensuite lancer le commande :
>
> php artisan migrate:fresh --seed 

> Lancer le serveur avec la commande :
>
> php artisan migrate
