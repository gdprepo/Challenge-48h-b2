@extends('layouts.app')

@section('content')



    <div class="Info">
        <div class="articles">
            <img src="{{ asset('images/skatepublicite.png') }}"> 
            <div>
                <h2>Pourquoi le skate?</h2>
                <p></p>
            </div>
        </div>
        <div class="articles">
            <div>
                <h2>Fonctionnement</h2>
                <p></p>
            </div>
            <img src="{{ asset('images/skatepublicité2.jpg') }}"> 
        </div>
        <div class="articles">
            <img src="{{ asset('images/manette.jpeg') }}"> 
            <div>
                <h2>Utilisation manette</h2>
                <p></p>
            </div>
        </div>
        <div class="articles">
            <div>
                <h2>Envie d'aventures?</h2>
                <p></p>
            </div>
            <img src="{{ asset('images/skatefuture.jpg') }}"> 
        </div>  
        </div>
        <div class="articles">
            <img src="{{ asset('images/Payement.jpg') }}"> 
            <div>
                <h2>Payements</h2>
                <p></p>
            </div>
        </div>
    </div>


@stop