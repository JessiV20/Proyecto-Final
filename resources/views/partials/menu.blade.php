<header class="main">
    <nav class="navbar">
        <a href="#" class="logo">La Palapa de Pepe's</a>
        <div class="nav-links">
            <a href="{{route('index')}}" class="item"><span >Home</span></a>
            <a href="{{route('menu')}}" class="item"> <span id="scroll" class="item">Menu</span></a>
            <a href="{{route('index')}}#conocenos" class="item"> <span id="scroll" class="item">Conocenos</span></a>
            <a href="/crus" class="item"> <span id="scroll" class="item">Agregar</span></a>
        </div>
        <div class="nav-buttons" id="navMenu">
            <a href="{{route('reservation')}}" class="item"> <button class="nav-btn selected">RESERVAR</button></a>
        </div>

        <div class="nav-links">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                    @else
                        <a href="/google-auth/redirect" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">login with Google</a>
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <button class="toggler">
            <i class='bx bx-menu'></i>
        </button>
    </nav>
</header>