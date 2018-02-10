<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{asset('img/secLogo.png')}}">
    <title>TestYourself</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <a href="/"><img class="logo__item animated fadeInDown" src="{{asset('img/logo.png')}}" alt="">
                        </a>
                    </div>
                    <div class="col-lg-4 ml-auto">
                        <ul class="menu d-flex justify-content-center animated fadeInDown">
                            <li class="menu__item"><a href="/">Sign In</a></li>
                            <li class="menu__item"><a href="#">Sign Up</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
