<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo', 'mi primer proyecto')</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header>
        {{--Navbar--}}
        @include('layouts.navbar')
        <div class="text-end text-sm text-green-800 mx-4">
            Bienvenido!
        </div>
    </header>
    <main>
        <div class="bg-green-100 my-4 text-center">
            <h1 class="text-lg font-semibold m-4 uppercase">@yield('cabecera')</h1>
        </div>
        @yield('contenido')
    </main>
    <footer class="footer footer-center p-4 bg-base-300 text-base-content">
      <aside>
        <p>Copyright © 2024 - All right reserved by ACME Industries Ltd</p>
      </aside>
    </footer>
</body>
</html>
