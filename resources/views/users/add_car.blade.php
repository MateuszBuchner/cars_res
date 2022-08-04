@extends('layouts.main')
@section('content')
    <div class="container tp1">
        <div class="test shadow-lg p-3 mb-5 bg-white rounded">
            <form method="POST" action="{{ route('dodaj-ogloszenie.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 widt">
                    <label for="exampleFormControlInput1" class="form-label">Typ Nadwozia</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="body_type" placeholder="name@example.com">
                </div>
                <div class="mb-3 widt">
                    <label for="exampleFormControlInput1" class="form-label">Marka</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="make" placeholder="name@example.com">
                </div>
                <div class="mb-3 widt">
                    <label for="exampleFormControlInput1" class="form-label">Model</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="model" placeholder="name@example.com">
                </div>
                <div class="mb-3 widt">
                    <label for="exampleFormControlInput1" class="form-label">Pierwsza Rejestracja</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="first_registration" placeholder="name@example.com">
                </div>
                <div class="mb-3 widt">
                    <label for="exampleFormControlInput1" class="form-label">Przebieg</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="mileage" placeholder="name@example.com">
                </div>
                <div class="mb-3 widt">
                    <label for="exampleFormControlInput1" class="form-label">Cena</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="price" placeholder="name@example.com">
                </div>
                <div class="mb-3 widt">
                    <label for="exampleFormControlTextarea1" class="form-label">Opis</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection
