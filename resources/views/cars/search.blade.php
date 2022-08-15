@extends('layouts.pages')
@section('content')

<div class="containerek">
    <div class="containerek">
        <div class="containerek2 shadow-lg p-3 mb-5 bg-body rounded">
            <div class="row mb-3 p-2">
                <form action="{{ route('cars.search') }}" method="GET">
                    <div class="row">
                        <div class="col-md-3">
                            <label>Typ nadwozia</label>
                            <select class="form-select" aria-label="Default select example" name="body_type" placeholder="Typ nadwozia">
                                <option value="" disabled selected>Typ nadwozia</option>
                                @foreach (App\Enums\BodyType::cases() as $type)
                                    <option value="{{ $type->value }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                            @error('body_type')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-3">
                            <label for="">Marka pojazdu</label>
                            <input type="text" class="form-control" placeholder="Marka pojazdu" name="search_name">
                        </div>
                        <div class="col-md-3">
                            <label for="">Pierwsza rejestracja</label>
                            <input type="text" class="form-control" placeholder="Pierwsza rejestracja" name="first_registration">
                        </div>
                        <div class="col-md-3">
                            <label for="">Cena</label>
                            <input type="text" class="form-control" placeholder="Cena" name="price">
                        </div>
                        <div class="col-md-3">
                            <label for="">Przebieg</label>
                            <input type="text" class="form-control" placeholder="Przebieg" name="mileage">
                        </div>
                        <div class="col-md-3">
                            <label>Rodzaj paliwa</label>
                            <select class="form-select" aria-label="Default select example" name="fuel" placeholder="Rodzaj paliwa">
                                <option value="" disabled selected>Rodzaj paliwa</option>
                                @foreach (App\Enums\Fuel::cases() as $type)
                                    <option value="{{ $type->value }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="">Skrzynia biegów</label>
                            <select class="form-select" aria-label="Default select example" name="transmission" placeholder="Rodzaj skrzyni">
                                <option value="" disabled selected>Rodzaj skrzyni</option>
                                @foreach (App\Enums\Transmission::cases() as $type)
                                    <option value="{{ $type->value }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="">Stan zużycia</label>
                            <select class="form-select" aria-label="Default select example" name="state_of_wear" placeholder="Stopień zużycia">
                                <option value="" disabled selected>Stopień zużycia</option>
                                @foreach (App\Enums\StateOfWear::cases() as $type)
                                    <option value="{{ $type->value }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-dark" style="float: right">Znajdz ogłoszenie</button>
                </form>
            </div>
        </div>
    </div>
    <div class="containerek2">
        @foreach ($usercars as $usercar)
        @if ($usercar->status == 'approve')
            <a href="{{ route('caropis',$usercar->id) }}" class="cars-link">

            <div class="row shadow-lg p-3 mb-5 bg-body rounded">
                <div class="col ">
                    <img src="{{ asset('storage/' . $usercar->mainimage) }}" class="img-thumbnail2 imagecar" alt="" >
                </div>
                <div class="col-6 textcol">
                    <h4 class="czcionka">{{ $usercar->make }} {{ $usercar->model }}</h4>
                    <h6 class="czcionka">Rok: {{ $usercar->first_registration }} Przebieg: {{ $usercar->mileage }} </h6>            </div>
                <div class="col">
                    <h5 class="czcionka price">Cena: {{ $usercar->price }}zł</h5>
                </div>
            </div>

            </a>
        @endif
        @endforeach
    </div>
</div>


@endsection
