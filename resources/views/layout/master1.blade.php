<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'MyCompany') | IKEAH</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="text-center">
    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
            <div class="inner">
                <h3 class="masthead-brand">
                    <img src="{{asset('assets/img/logo.png')}}" width="80px" height="auto">
                    IKEAH
                </h3>
                <nav class="nav nav-masthead justify-content-center">
                    <a class="nav-link {{ Route::is('home') ? 'active' : '' }}" href="{{route('home')}}">Home</a>
                    <a class="nav-link {{ Route::is('product') ? 'active' : '' }}" href="{{route('product')}}">Products</a>
                    <a class="nav-link {{ Route::is('testimony') ? 'active' : '' }}" href="{{route('testimony')}}">Testimonies</a>
                    <a class="nav-link {{ Route::is('about') ? 'active' : '' }}" href="{{route('about')}}">About</a>
                </nav>
            </div>
        </header>
        <main role="main" class="inner cover"> @yield('content') </main>
        <footer class="mastfoot mt-auto">
            <div class="inner">
                <p> ©{{ date('Y') }} <a href="{{ route('home') }}">IKEAH | By Kevin Wijaya - 2020130013</a> </p>
            </div>
        </footer>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
