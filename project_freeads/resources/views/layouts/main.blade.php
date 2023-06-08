<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/pages.css" rel="stylesheet">
    <link rel="shortcut icon" href="/assets/logo.png" type="image/x-icon">
    <title>TripAds | @yield ('title')</title>
</head>

<body>

    <header>
        <div class="container-nav">
            <nav class="navbar">
               
                @if (Route::has('login'))
                <div class="line"> 
                    <!-- <img src="/assets/logo.png" alt="logo" class="logo" height="40px" width="40px"> -->
                    @auth
                    <a href="{{ url('/dashboard') }}" class="">Mon tableau de bord</a>
                    @else
                    <a href="{{ route('login') }}" class="">Se connecter</a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="">S'inscrire</a>

                    @endif
                    @endauth
                    
                </div>
                @endif
            </nav>
        </div>
    </header>

    @yield('content')

</body>

</html>