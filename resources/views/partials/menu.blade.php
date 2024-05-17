<header class="main">
    <nav class="navbar">
        <a href="#" class="logo">La Palapa de Pepe's</a>
        <div class="nav-links">
            <a href="{{route('index')}}" class="item"><span >Home</span></a>
            <a href="{{route('menu')}}" class="item"> <span id="scroll" class="item">Menu</span></a>
            <a href="{{route('index')}}#conocenos" class="item"> <span id="scroll" class="item">Conocenos</span></a>
        </div>
        <div class="nav-buttons" id="navMenu">
            <a href="{{route('reservation')}}" class="item"> <button class="nav-btn selected">RESERVAR</button></a>
        </div>
        <button class="toggler">
            <i class='bx bx-menu'></i>
        </button>
    </nav>
</header>