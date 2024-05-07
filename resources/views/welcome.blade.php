@extends('partials.master')
@include('partials.menu')

<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true"
            aria-label="Slide 1">
        </button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active d-item">
            <img src="{{asset('images/carrusel1.jpg')}}" class="d-block w-100 d-img" alt="slider 1">
            <div class="carousel-caption top-0 mt-4">
                <p class="mt-5 fs-3 text-uppercase">Descubre nuestros</p>
                <h1 class="display-1 fw-bolder text-capitalize">deliciosos platillos</h1>
                <button class="btn btn-primary px-4 py-2 fs-5 mt-5">Informacion</button>
            </div>
        </div>
        <div class="carousel-item d-item">
            <img src="{{asset('images/platoma.webp')}}" class="d-block w-100 d-img" alt="slider 2">
            <div class="carousel-caption top-0 mt-4">
                <p class="mt-5 fs-3 text-uppercase">Descubre nuestros</p>
                <h1 class="display-1 fw-bolder text-capitalize">deliciosos platillos</h1>
                <button class="btn btn-primary px-4 py-2 fs-5 mt-5">Informacion</button>
            </div>
        </div>
        <div class="carousel-item d-item">
            <img src="{{asset('images/camarones.jpg')}}" class="d-block w-100 d-img" alt="slider 3">
            <div class="carousel-caption top-0 mt-4">
                <p class="mt-5 fs-3 text-uppercase">Descubre nuestros</p>
                <h1 class="display-1 fw-bolder text-capitalize">deliciosos platillos</h1>
                <button class="btn btn-primary px-4 py-2 fs-5 mt-5">Informacion</button>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="main">
    <div class="top-container">
        <div class="nft-box">
            <img src="{{asset('images/mar.jpg')}}" class="nft-pic">  
        </div>
        <div class="info-box">
            <p class="header">
                ¡DELICIOSOS PLATILLOS DE MARISCOS EN LA PALAPA DE PEPES: UNA EXPERIENCIA IMPERDIBLE!
            </p>
            <p class="info-text">
                ¿Buscas una experiencia gastronómica que te transporte directamente al mar? Entonces no puedes 
                perderte los exquisitos platillos de mariscos en La Palapa de Pepes, donde los sabores del océano 
                se funden con la diversión en cada bocado.
                <br><br>
                Imagina un festín de mariscos frescos y exquisitos, donde cada platillo es una explosión
                de sabor y cada elección está diseñada para deleitar tu paladar.  <br><br>Desde ceviches de 
                camarón con salsa fresca hasta filetes de pescado a la plancha con aguacate, en La Palapa
                de Pepes te espera una experiencia culinaria que te transportará directamente a las
                costas más exóticas.              
                Pero la diversión no termina en la comida, ¡el ambiente vibrante y acogedor de La Palapa de 
                Pepes te invita a relajarte y disfrutar al ritmo de la música en vivo!  ¡No te lo pierdas!
            </p>
            <div class="info-buttons">
                <a href="{{route('menu')}}"><button class="info-btn selected">Explorar</button></a>
            </div>
        </div>
    </div>
    <div class="top-container">
        <div class="info-box1">
            <p class="header">
                ¡DELICIOSOS PLATILLOS DE MARISCOS EN LA PALAPA DE PEPES: UNA EXPERIENCIA IMPERDIBLE!
            </p>
            <p class="info-text">
                ¿Buscas una experiencia gastronómica que te transporte directamente al mar? Entonces no puedes 
                perderte los exquisitos platillos de mariscos en La Palapa de Pepes, donde los sabores del océano 
                se funden con la diversión en cada bocado.
                <br><br>
                Imagina un festín de mariscos frescos y exquisitos, donde cada platillo es una explosión
                de sabor y cada elección está diseñada para deleitar tu paladar.  <br><br>Desde ceviches de 
                camarón con salsa fresca hasta filetes de pescado a la plancha con aguacate, en La Palapa
                de Pepes te espera una experiencia culinaria que te transportará directamente a las
                costas más exóticas.              
                Pero la diversión no termina en la comida, ¡el ambiente vibrante y acogedor de La Palapa de 
                Pepes te invita a relajarte y disfrutar al ritmo de la música en vivo!  ¡No te lo pierdas!
            </p>
            <div class="info-buttons">
                <a href="{{route('menu')}}"><button class="info-btn selected">Explorar</button></a>
            </div>
        </div>
        <div class="nft-box1">
            <img src="{{asset('images/mar.jpg')}}" class="nft-pic">
        </div>
    </div>
    @include('partials.footer')
</div>
</body>
</html>
