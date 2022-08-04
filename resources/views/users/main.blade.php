@extends('layouts.main')
@section('content')

<section class="main-view"></section>

<section class="demo-content">
    <div class="oferta">
        Sprawdź nasze ostatnie modele
    </div>

</section>

    {{-- <header class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.html">
                <span>Cars</span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav  mx-auto ">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="menu.html">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="book.html">Book Table</a>
                    </li>
                </ul>
                <div class="user_option">
                    <a class="btn btn-dark" href="{{ route('dodaj-ogloszenie.create') }}" role="button">Sprzedaj Samochód</a>
                </div>
            </div>
            </nav>
        </div>
    </header> --}}

@endsection
