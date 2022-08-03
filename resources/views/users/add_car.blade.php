@extends('layouts.main')
@section('content')

    <div class="container p-5 my-5 bg-primary text-white">
        <form method="POST" action="{{ route('dodaj-ogloszenie.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">body_type</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="body_type" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">make</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="make" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">model</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="model" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">first_registration</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="first_registration" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">mileage</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="mileage" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">price</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="price" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
