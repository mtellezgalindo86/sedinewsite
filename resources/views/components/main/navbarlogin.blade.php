<div class="navbar-area nav-back">
    <div class="main-responsive-nav">
        <div class="container">
            <div class="main-responsive-menu">
                <div class="logo">
                    <a href="{{route("home")}}">
                        <img src="{{'assets/img/sedi.png'}}" alt="image">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="main-navbar">
        <div class="container main-navbar-sedi">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{route("home")}}">
                    <img src="{{'assets/img/sedi.png'}}" alt="image">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        @guest
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link active">
                                Login
                            </a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link">
                                Registro
                            </a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item">
                            <a href="{{route("home")}}" class="nav-link ">
                                Tabla de contactos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route("home")}}" class="nav-link ">
                                Carga de contenido
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('videoteca')}}" class="nav-link active">
                                {{ Auth::user()->name }}
                                <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endguest
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>