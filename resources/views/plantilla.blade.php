<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Registro de películas o series observadas en el año.">
        <meta name="keywords" content="Películas, Series, Novelas, Registro y Entretenimiento.">
        <meta name="author" content="Roger Avilés">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Diario de Películas</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        
    </head>
    <body>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container-fluid">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/logo.png') }} " alt="Logo" class="img-fluid" width="200">
                </a>
                <div class="d-flex" id="navbarText">
                    <ul class="nav navbar-nav me-auto mb-2 mb-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('home') ? 'active' : '' }} " aria-current="page" href="{{ route('home') }}">Inicio</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link {{ Route::is('registro') ? 'active' : '' }}" href="{{ route('registro') }}">Registro</a>
                        </li>
                    </ul>


                </div>
            </div>
        </nav>

        <section class="container-fluid main">
            @yield('seccion')
        </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
</body>
</html>
