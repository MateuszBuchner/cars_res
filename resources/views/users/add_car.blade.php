@extends('layouts.pages')
@section('content')
<div class="testujemy">
<div class="container">
    <div class="row form">
      <div class="col">
        <div class="container tp1">
            <div class="test shadow-lg p-3 mb-5 bg-white rounded">
                <form method="POST" action="/add-car" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @csrf
                    <div class="mb-3 widt">
                        <label for="exampleFormControlInput1" class="form-label">Typ Nadwozia</label>
                        <select class="form-select @error('body_type') is-invalid @enderror" name="body_type" aria-label="Default select example">
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
                        <input type="text" class="form-control @error('make') is-invalid @enderror" id="exampleFormControlInput1" name="make"  placeholder="Wpisz marke pojazdu">
                        @error('make')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 widt">
                        <label for="exampleFormControlInput1" class="form-label">Model</label>
                        <input type="text" class="form-control @error('model') is-invalid @enderror" id="exampleFormControlInput1" name="model"  placeholder="Wpisz model pojazdu">
                        @error('model')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 widt">
                        <label for="exampleFormControlInput1" class="form-label">Pierwsza Rejestracja</label>
                        <input type="text" class="form-control @error('first_registration') is-invalid @enderror" id="exampleFormControlInput1" name="first_registration"  placeholder="Podaj rok produkcji">
                        @error('first_registration')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 widt">
                        <label for="exampleFormControlInput1" class="form-label">Przebieg</label>
                        <input type="text" class="form-control @error('mileage') is-invalid @enderror" id="exampleFormControlInput1" name="mileage"  placeholder="Podaj przebieg pojazdu">
                        @error('mileage')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 widt">
                        <label for="exampleFormControlInput1" class="form-label">Cena</label>
                        <input type="text" class="form-control @error('price') is-invalid @enderror" id="exampleFormControlInput1" name="price"  placeholder="Podaj cene">
                        @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 widt">
                        <label for="exampleFormControlTextarea1" class="form-label">Opis</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="exampleFormControlTextarea1" name="description"  rows="3"></textarea>
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 wid">
                        <label for="image" class="form-label" >Wybierz zdjęcie podglądowe</label>
                        <input class="form-control @error('mainimage') is-invalid @enderror" type="file" name="mainimage" id="formFile">
                        @error('mainimage')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Wstaw wszystkie zdjęcia samochodu</label>
                        <input type="file" name="images[]" accept="image/*" id="" class="form-control @error('images') is-invalid @enderror" multiple>
                        @error('images')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
            </div>
        </div>
      </div>
      <div class="col imagdown">
        <div class="row-image">
            <div class="col2">
                <div class="container tp1">
                    <div class="test shadow-lg p-3 mb-5 bg-white rounded">
                            <div class="mb-3 widt">
                                <label for="exampleFormControlInput1" class="form-label">Paliwo</label>
                                <select class="form-select @error('fuel') is-invalid @enderror" name="fuel" aria-label="Default select example">
                                    <option selected>Podaj paliwo</option>
                                    @foreach (App\Enums\Fuel::cases() as $type)
                                        <option value="{{ $type->value }}">{{ $type->name }}</option>
                                    @endforeach
                                    @error('fuel')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </select>
                            </div>

                            <div class="mb-3 widt">
                                <label for="exampleFormControlInput1" class="form-label">Skrzynia biegów</label>
                                <select class="form-select @error('transmission') is-invalid @enderror" name="transmission" aria-label="Default select example">
                                    <option selected>Podaj skrzynie biegów</option>
                                    @foreach (App\Enums\Transmission::cases() as $type)
                                        <option value="{{ $type->value }}">{{ $type->name }}</option>
                                    @endforeach
                                    @error('transmission')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </select>
                            </div>

                            <div class="mb-3 widt">
                                <label for="exampleFormControlInput1" class="form-label">Stan zużycia</label>
                                <select class="form-select @error('state_of_wear') is-invalid @enderror" name="state_of_wear" aria-label="Default select example">
                                    <option selected>Podaj stan zużycia</option>
                                    @foreach (App\Enums\StateOfWear::cases() as $type)
                                        <option value="{{ $type->value }}">{{ $type->name }}</option>
                                    @endforeach
                                    @error('state_of_wear')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </select>
                            </div>
                            <button type="submit" class="btn btn-dark">Submit</button>
                        </form>
                    </div>
                </div>
                <img src="/images/as.png" class="obrazek" alt="">
            </div>
        </div>
    </div>
  </div>
</div>
@endsection
