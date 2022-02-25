<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/styleJuegos.css')}}">
    <script src="https://unpkg.com/boxicons@2.1.1/dist/boxicons.js"></script>
    <link href="{{asset('icons/boxicons-2.1.1/css/boxicons.min.css')}}" rel='stylesheet'>
    <title>@yield('title')</title>
</head>

<body>
    <header>
    <div class="banner-left">
            <a href="{{route('inicio')}}" class="caja">Página de inicio</a>
            {{-- <a href="#" class="caja">Videojuegos</a>
            <a href="#" class="caja">Plataformas</a> --}}
            <a href="{{route('plataforma','Nintendo')}}" class="caja">Nintendo</a>
            <a href="{{route('plataforma','XBOX')}}" class="caja">XBOX</a>
            <a href="{{route('plataforma','Playstation')}}" class="caja">Playstation</a>
            <a href="{{route('plataforma','pc')}}" class="caja">PC</a>
        </div>
        @if (isset($_SESSION['usuario']))
        <div class="banner-right">
            <a href="{{route('login')}}" class="caja IS">{{$_SESSION['usuario']}}</a>
            <a href="{{route('cs')}}" class="caja IS">Cerrar Sesión</a>
            <a href="#" class="caja CC">Carro</a>            
        </div>
            @else
        <div class="banner-right">
            <a href="{{route('login')}}" class="caja IS">Inicia sesión</a>
            <a href="#" class="caja CC">Crear cuenta</a>            
        </div>
            @endif
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <div class="footer-left">
            <a href="index.php" class="caja">Copyright</a>
            <a href="index.php" class="caja">Propietarios</a>
        </div>
        
        <div class="footer-right">
            <i class='caja bx bxl-facebook-square'></i>
            <i class='caja bx bxl-instagram'></i>
            <i class='caja bx bxl-linkedin-square'></i>
            <i class='caja bx bxl-twitter'></i>
        </div>

    </footer>
</body>

</html>