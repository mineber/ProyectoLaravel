<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/styleJuegos.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/boxicons@2.1.1/dist/boxicons.js"></script>
    <link href='iconos\boxicons-2.1.1\css\boxicons.min.css' rel='stylesheet'>
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
        
        <div class="banner-right">
            <a href="{{route('login')}}" class="caja IS">Inicia sesión</a>
            <a href="#" class="caja CC">Crear cuenta</a>            
        </div>
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