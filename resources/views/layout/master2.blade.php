<!DOCTYPE html>
<html lang="en" class="m2">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'MyCompany') | IKEAH</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="text-center m2">

    <div>
        {{-- <main role="main" class="inner cover mainsec"> @yield('content') </main> --}}
        <header>
            <div class="introM">
                <div class="mask">
                    <div class="cover-container d-flex p-3 mx-auto flex-column m2nav">
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
                    </div>
                    <div class="container d-flex align-items-left justify-content-left text-left">
                        <div class="text-white">
                            <br><br><br><br>


                            @yield('contentTop')

                            {{-- <h3>
                                The only limit is your imagination!
                            </h3>
                            <br><br>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h1>
                                            I'm Programmer<br>Kevin Wijaya
                                        </h1><br>
                                        <h6>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu libero a
                                            turpis fermentum lobortis sit amet at nulla. Sed vehicula sem placerat tortor
                                            tincidunt cursus. Nullam commodo pretium malesuada. Fusce ultricies pulvinar
                                            lectus in varius. Suspendisse bibendum eget ipsum at interdum.
                                        </h6>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="/assets/img/prog.png" alt="programming" style="width: 100%;">
                                    </div>
                                </div>
                            </div>
                            <a class="btn btn-primary mx-2" href="#creations"
                                role="button" rel="nofollow">See My Creations</a>
                            <a class="btn btn-secondary mx-2" href="#contact"
                                role="button" rel="nofollow">Hire Me</a>
                            <a class="btn btn-success mx-2" href="/"
                                role="button" rel="nofollow">My CV</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main class="mainSec" id="about">
            <div class="container">
                <br>
                <hr class="my-5" />
                <section>

                    @yield('contentBottom')


                </section>
            </div>
            <div class="cover-container d-flex p-3 mx-auto flex-column m2nav">
                <footer class="mastfoot mt-auto">
                    <div class="inner">
                        <p> ©{{ date('Y') }} <a href="{{ route('home') }}">IKEAH | By Kevin Wijaya - 2020130013</a> </p>
                    </div>
                </footer>
            </div>
        </main>

    </div>


    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        $('a[href^="#"]').on('click', function(event) {

            var target = $(this.getAttribute('href'));

            if (target.length) {
                event.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: target.offset().top
                }, 1000);
            }
        });
    </script>
</body>

</html>
