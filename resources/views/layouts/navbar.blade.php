<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('titulo')  </title>
    <link rel="stylesheet" href="{{asset('css/principal.css')}}">

</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">Colegio</div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="{{route('r.docente')}}">Docente</a></li>
                <li><a href="#services">Gestion</a></li>
                <li><a href="#featured">Materia</a></li>
                <li><a href="#contact">Alumno</a></li>
            </ul>
            <div class="icons">
                <span class="icon" id="login-icon">&#128100;</span>
                <span class="icon" id="search-icon">&#128269;</span>
            </div>
        </nav>
    </header>
    <main>
        <div class="background">
            <h1>@yield('titulo-general')</h1>

            @yield('contenido')

        </div>
    </main>

</body>
</html>
