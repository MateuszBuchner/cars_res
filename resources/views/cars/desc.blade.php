@extends('layouts.pages')
@section('content')

<div class="containerek containerek3 ">
    <div class="row g-0 text-center blok shadow-lg p-3 mb-5 bg-body rounded">
        <div class="col-sm-6 col-md-8 blok tescik">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner ">
                    <div class="carousel-item active ">
                        @foreach ($images as $image )
                                <img src="/product_images/{{ $image->image }}" class="d-block w-100 image-conf" alt="...">
                            </div>
                            <div class="carousel-item">
                        @endforeach
                    </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon ext-butt" aria-hidden="true"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon ext-butt" aria-hidden="true"></span>
                        </button>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 blok">
            <div class="car-desc-conter">
                <div class="car-descrip">
                    <h4 class="">{{ $usercars->make }} {{ $usercars->model }}</h4>
                </div>
                <div class="car-descrip">
                    <h6 class="tekst-desc-car">{{ $usercars->first_registration }} - {{ $usercars->body_type }} - {{ $usercars->mileage }}</h6>
                </div>
                <div class="car-descrip">
                    <h4 class="tekst-desc-car-2">{{ $usercars->price }}PLN</h4>
                </div>
                <div class="car-descrip">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <p class="card-text">Dane Sprzedawającego:</p>
                            <h5 class="card-title">{{ $usercars->user->first_name }}</h5>
                            <h5 class="card-title">{{ $usercars->user->email }}</h5>
                            <h5 class="card-title">Tel: {{ $usercars->user->phone_number }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="containerek containerek3 ">
    <div class="row g-0 text-center blok shadow-lg p-3 mb-5 bg-body rounded">
        <div class="col-sm-6 col-md-8 blok tescik">
            <table class="table-light" id="table-widt">
                <tbody>
                <tr>
                    <td><h6>Typ nadwozia:</h6></td>
                    <td><h6>{{ $usercars->body_type }}</h6></td>
                </tr>
                <tr>
                    <td><h6>Marka pojazdu:</h6></td>
                    <td><h6>{{ $usercars->make }}</h6></td>
                </tr>
                </tbody>
                <tr>
                    <td><h6>Model pojazdu:</h6></td>
                    <td><h6>{{ $usercars->model }}</h6></td>
                </tr>
                </tbody>
                <tr>
                    <td><h6>Pierwsza rejestracja:</h6></td>
                    <td><h6>{{ $usercars->first_registration }}</h6></td>
                </tr>
                </tbody>
                <tr>
                    <td><h6>Przebieg:</h6></td>
                    <td><h6>{{ $usercars->mileage }}</h6></td>
                </tr>
                </tbody>
                <tr>
                    <td><h6>Rodzaj paliwa:</h6></td>
                    <td><h6>{{ $usercars->fuel }}</h6></td>
                </tr>
                </tbody>
                <tr>
                    <td><h6>Stan zużycia:</h6></td>
                    <td><h6>{{ $usercars->state_of_wear }}</h6></td>
                </tr>
                </tbody>
                <tr>
                    <td><h6>Skrzynia biegów:</h6></td>
                    <td><h6>{{ $usercars->transmission }}</h6></td>
                </tr>
                </tbody>
                </tbody>
            </table>
        </div>
        <div class="col-6 col-md-4 blok">
            <div class="car-desc-conter">
                <h6>{{ $usercars->description }}</h6>
            </div>
        </div>
    </div>
</div>


@endsection

