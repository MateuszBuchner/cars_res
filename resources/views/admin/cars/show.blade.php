@extends('layouts.admin')
@section('content')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 d-flex align-items-center">
                      <li class="breadcrumb-item"><a href="index.html" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                      <li class="breadcrumb-item active" aria-current="page">Basic Table</li>
                    </ol>
                  </nav>
                <h1 class="mb-0 fw-bold">Basic Table</h1>
            </div>
            <div class="col-6">
                <div class="text-end upgrade-btn">
                    <a href="https://www.wrappixel.com/templates/flexy-bootstrap-admin-template/" class="btn btn-primary text-white"
                        target="_blank">Upgrade to Pro</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title m-t-40"><i
                                class="m-r-5 font-18 mdi mdi-numeric-1-box-multiple-outline"></i> Table With
                            Outside Padding</h6>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Lp.</th>
                                        <th scope="col">Nadwozie</th>
                                        <th scope="col">Marka</th>
                                        <th scope="col">Model</th>
                                        <th scope="col">Pierwsza Rejestracja</th>
                                        <th scope="col">Przebieg</th>
                                        <th scope="col">Cena</th>
                                        <th scope="col">Opis</th>
                                        <th scope="col">Opis</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($cars as $car)
                                        <tr>
                                            <th scope="row">{{ $car->id }}</th>
                                            <td>{{ $car->body_type }}</td>
                                            <td>{{ $car->make }}</td>
                                            <td>{{ $car->model }}</td>
                                            <td>{{ $car->first_registration }}</td>
                                            <td>{{ $car->mileage }}</td>
                                            <td>{{ $car->price }}</td>
                                            <td>{{ $car->description }}</td>
                                            <td>
                                                <button type="button" class="btn btn-warning px-3"><i class="fas fa-bolt" aria-hidden="true"></i></button>
                                                <form method="POST" action="{{ route('cars.destroy', $car->id) }}" onsubmit="return confirm('Na pewno chcesz usunąć?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" type="submit" role="button">Usuń</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach --}}
                                </tbody>
                            </table>

                            {{-- {{ $cars->links() }} --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
