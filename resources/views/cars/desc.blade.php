@extends('layouts.pages')
@section('content')

{{-- <div class="containerek">
    <div class="containerek2">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                @foreach ($images as $image )
                        <img src="/product_images/{{ $image->image }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                @endforeach
                </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
        </div>
    </div>
</div> --}}



<div class="containerek containerek3 ">
    <div class="row g-0 text-center tescik shadow-lg p-3 mb-5 bg-body rounded">
        <div class="col-sm-6 col-md-8 tescik">
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
        <div class="col-6 col-md-4 tescik">
            <h4 class="czcionka">{{ $usercars->make }} {{ $usercars->model }}</h4>

        </div>
    </div>
</div>


@endsection

{{--
<div class="card">
    <img src="{{ asset('images/y.jpg') }}" class="card-img-top" alt="...">

    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div> --}}
