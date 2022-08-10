@extends('layouts.pages')
@section('content')

<div class="containerek">
    <div class="containerek2">
        @foreach ($usercars as $usercar)
        @if ($usercar->status == 'approve')
            <div class="row shadow-lg p-3 mb-5 bg-body rounded">
                <div class="col ">
                    <img src="{{ asset('storage/' . $usercar->mainimage) }}" class="img-thumbnail2 imagecar" alt="" >
                </div>
                <div class="col-6 textcol">
                    <h4 class="czcionka">{{ $usercar->make }} {{ $usercar->model }}</h4>
                    <h6 class="czcionka">Rok: {{ $usercar->first_registration }} Przebieg: {{ $usercar->mileage }} </h6>            </div>
                <div class="col">
                    <h5 class="czcionka price">Cena: {{ $usercar->price }}zł</h5>
                    <a href="{{ route('caropis',$usercar->id) }}" class="btn btn-outline-dark">view</a>
                </div>
            </div>
        @endif
        @endforeach
    </div>
</div>


@endsection
