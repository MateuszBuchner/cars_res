@extends('layouts.main')
@section('content')
<div class="container tp1">
    <div class="test shadow-lg p-3 mb-5 bg-white rounded">
        <form method="POST" action="/add-car" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 widt">
                <label for="exampleFormControlInput1" class="form-label">Typ Nadwozia</label>
                <select class="form-select" name="body_type" aria-label="Default select example">
                    <option selected>Wybierz Typ nadwozia</option>
                    @foreach (App\Enums\BodyType::cases() as $type)
                        <option value="{{ $type->value }}">{{ $type->name }}</option>
                    @endforeach
                    @error('body_type')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </select>
            </div>
            <div class="mb-3 widt">
                <label for="exampleFormControlInput1" class="form-label">Marka</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="make" required placeholder="name@example.com">
                @error('make')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3 widt">
                <label for="exampleFormControlInput1" class="form-label">Model</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="model" required placeholder="name@example.com">
                @error('model')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3 widt">
                <label for="exampleFormControlInput1" class="form-label">Pierwsza Rejestracja</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="first_registration" required placeholder="name@example.com">
                @error('first_registration')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3 widt">
                <label for="exampleFormControlInput1" class="form-label">Przebieg</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="mileage" required placeholder="name@example.com">
                @error('mileage')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3 widt">
                <label for="exampleFormControlInput1" class="form-label">Cena</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="price" required placeholder="name@example.com">
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3 widt">
                <label for="exampleFormControlTextarea1" class="form-label">Opis</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="description" required rows="3"></textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                <input type="file" name="images[]" accept="image/*" id="" class="form-control" multiple>
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>


@endsection
