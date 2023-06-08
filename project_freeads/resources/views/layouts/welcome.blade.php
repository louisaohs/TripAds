<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="/assets/logo.png" type="image/x-icon">
    <title>TripAds | @yield ('title')</title>
</head>

<body>

    <header>
        <nav>
            <div class="container-nav">
                @if (Route::has('login'))
                <div class="navbar">
                    <div class="line">
                        <img src="/assets/logo.png" alt="logo" class="logo" height="40px" width="40px">
                    </div>
                    @auth
                    <div class="line">
                        <a href="{{ url('/dashboard') }}" class="">Mon tableau de bord</a>
                    </div>
                    @else
                    <div class="line">
                        <a href="{{ route('login') }}" class="">Se connecter</a>
                    </div>
                    @if (Route::has('register'))
                    <div class="line">
                        <a href="{{ route('register') }}" class="">S'inscrire</a>
                    </div>
                    @endif
                    @endauth
                </div>
                @endif
            </div>
        </nav>
    </header>

    @yield('content')

</body>

</html>