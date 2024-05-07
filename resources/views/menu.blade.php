@extends('partials.master')
@include('partials.menu')

<section class="container top-categories" id="inicio">
    <h1 class="heading-1">Bienvenido</h1>
    <div class="container-categories">
        <div class="card-category category-moca">
            <p>Platillos</p>
            <a href="{{route('detail',10)}}" target="_blank"><span>Ver más</span></a>
        </div>
        <div class="card-category category-expreso">
            <p>Bebidas</p>
            <a href="{{route('detail',1)}}" target="_blank"><span>Ver más</span></a>
        </div>
        <div class="card-category category-capuchino">
            <p>Postres</p>
            <a href="{{route('detail',3)}}" target="_blank"> <span>Ver más</span></a>
        </div>
    </div>
</section>