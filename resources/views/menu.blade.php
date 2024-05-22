@extends('partials.master')
@include('partials.menu')
<section class="container top-categories1" id="inicio1">
    <h1 class="heading-1">Bienvenido</h1>
    <div class="container-categories1">
        <div class="card-category1 category-paquetes">
            <p>¡Paquetes y Promos!</p>
            <a href="{{ route('detailpromo') }}"> <span>Ver más</span></a>
        </div>
    </div>
</section>
<section class="container top-categories" id="inicio">

    <div class="container-categories">
        <div class="card-category category-postres">
            <p>Postres</p>
            <a href="{{route('detail',3)}}" > <span>Ver más</span></a>
        </div>
        <div class="card-category category-cocteleria">
            <p>Coctelería</p>
            <a href="{{route('detail',2)}}" ><span>Ver más</span></a>
        </div>
        <div class="card-category category-bebidas">
            <p>Bebidas</p>
            <a href="{{route('detail',1)}}" ><span>Ver más</span></a>
        </div>
        <div class="card-category category-niños">
            <p>Para Niños</p>
            <a href="{{route('detail',4)}}" ><span>Ver más</span></a>
        </div>
        <div class="card-category category-caldos">
            <p>Sopas/Caldos</p>
            <a href="{{route('detail',5)}}" ><span>Ver más</span></a>
        </div>
        <div class="card-category category-entremeses">
            <p>Entremeses</p>
            <a href="{{route('detail',6)}}" > <span>Ver más</span></a>
        </div>
        <div class="card-category category-pulpo">
            <p>Pulpo al gusto</p>
            <a href="{{route('detail',7)}}" > <span>Ver más</span></a>
        </div>
        <div class="card-category category-cocteles">
            <p>Cocteles</p>
            <a href="{{route('detail',8)}}" > <span>Ver más</span></a>
        </div>
        <div class="card-category category-pescado">
            <p>Pescado Frito</p>
            <a href="{{route('detail',9)}}" > <span>Ver más</span></a>
        </div>
        <div class="card-category category-especialidades">
            <p>Especialidades</p>
            <a href="{{route('detail',10)}}" > <span>Ver más</span></a>
        </div>
        <div class="card-category category-filetes">
            <p>Filetes</p>
            <a href="{{route('detail',11)}}" > <span>Ver más</span></a>
        </div>
        <div class="card-category category-brochetas">
            <p>Brochetas</p>
            <a href="{{route('detail',12)}}" > <span>Ver más</span></a>
        </div>
        <div class="card-category category-carnes">
            <p>Carnes/Cortes</p>
            <a href="{{route('detail',13)}}" > <span>Ver más</span></a>
        </div>
        <div class="card-category category-snacks">
            <p>Snacks</p>
            <a href="{{route('detail',14)}}" > <span>Ver más</span></a>
        </div>
        <div class="card-category category-parrillada">
            <p>Parrillada</p>
            <a href="{{route('detail',15)}}" > <span>Ver más</span></a>
        </div>
        <div class="card-category category-ensaladas">
            <p>Ensaladas</p>
            <a href="{{route('detail',16)}}" > <span>Ver más</span></a>
        </div>
    </div>
</section>