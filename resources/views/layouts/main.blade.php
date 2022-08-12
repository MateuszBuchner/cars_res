<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- nice select  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
    <!-- font awesome style -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/styl1.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!-- Navbar -->
<header>
    <div class="container-sm">
        <div class="row main-row">
            <div class="col coll2">
                <div class="zobatera">
                    <a href="/"><img id="logo" src="{{ asset('images/logo.png') }}"></a>
                </div>
            </div>
            <div class="col-6 texto">
                <a href="#section2" class="links" style="color: white; text-decoration: none;">Znajdź samochód</a>
                <a href="{{ route('cars') }}" style="color: white; text-decoration: none;" class="links">Oferta</a>
                <x-nav-link :href="route('dodaj-ogloszenie.create')" style="color: white; text-decoration: none;" class="links" :active="request()->routeIs('index')">
                    {{ __('Wystaw auto') }}
                </x-nav-link>
            </div>
            <div class="col coll2">

                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/profile') }}" class="btn btn-outline-light">Mój profil</a>
                                @can('isAdmin')
                                <div class="btn btn-outline-light">
                                    <x-nav-link :href="route('index')" style="color: rgb(168, 168, 168); text-decoration: none;" :active="request()->routeIs('index')">
                                        {{ __('Admin') }}
                                    </x-nav-link>
                                </div>
                            @endcan
                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline-light" >Zaloguj się</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-outline-light">Rejestracja</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </div>
</header>
    @yield('content')
</body>
</html>

