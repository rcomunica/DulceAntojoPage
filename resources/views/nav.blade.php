<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container px-5">
                <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('assets/favicon.ico') }}" width="125px" alt="" style="position: absolute; top: 10%; left: 10%;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link disabled" href=""><i class="fa-solid fa-shop"></i> Tienda</a></li>
                        <li class="nav-item"><a class="nav-link disabled" href="#"><i class="fa-solid fa-user-plus"></i> Registro!</a></li>
                        @auth
                        <li class="nav-item"><a class="nav-link" href="{{ route('panel')}}"><i class="fa-solid fa-gauge"></i> Panel</a></li>
                        
                        <form method="POST" action="{{ route('logout.auth') }}" >
                            @csrf
                            <li class="nav-item"><button class="btn btn-primary nav-link" type="submit"><i class="fa-solid fa-right-from-bracket"></i> cerrar seccion</button></li>
                        </form>

                        @else
                        <li class="nav-item"><a class="nav-link" href="{{ route('login')}}"><i class="fa-solid fa-right-to-bracket"></i> Entrar</a></li>
                        @endauth
                        
                    </ul>
                </div>
            </div>
            
</nav>