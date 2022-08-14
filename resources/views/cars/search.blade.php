@extends('layouts.pages')
@section('content')

<div class="containerek">
    <div class="containerek2">
        <div class="row mb-3 p-2">
            <form action="{{ route('cars.search') }}" method="GET">
                <div class="col-md-3">
                    <label for="">Continent</label>
                    <input type="text" name="search_name" class="form-controll">
                </div>
                <button type="submit" class="bnt btn-primary">Search</button>
            </form>
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
