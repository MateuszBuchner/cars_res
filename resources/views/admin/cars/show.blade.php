@extends('layouts.admin')
@section('content')
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 d-flex align-items-center">
                      <li class="breadcrumb-item"><a href="/admin" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                      <li class="breadcrumb-item active" aria-current="page">Basic Table</li>
                    </ol>
                  </nav>
                <h1 class="mb-0 fw-bold">Tabela z samochodami</h1>
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
                                        <th scope="col">Status</th>
                                        <th scope="col">Zdjęcia</th>
                                        <th scope="col">Akcja</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($usercars as $usercar)
                                        <tr>
                                            <th scope="row">{{ $usercar->id }}</th>
                                            <td>{{ $usercar->body_type }}</td>
                                            <td>{{ $usercar->make }}</td>
                                            <td>{{ $usercar->model }}</td>
                                            <td>{{ $usercar->first_registration }}</td>
                                            <td>{{ $usercar->mileage }}</td>
                                            <td>{{ $usercar->price }}</td>
                                            <td>{{ $usercar->description }}</td>
                                            <td><span>{{ $usercar->status }}</span></td>
                                            <td>{{ $usercar->images->count() }}</td>
                                            <td>
                                                <form method="POST" action="{{ route('dodaj-ogloszenie.destroy', $usercar->id) }}" onsubmit="return confirm('Na pewno chcesz usunąć?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" type="submit" role="button"><i class="mdi mdi-close"></i></button>
                                                </form>

                                                <form action="{{ route('approve-usercar',$usercar->id) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn btn-success"><i class="mdi mdi-check"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
