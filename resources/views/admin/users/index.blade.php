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
                <h1 class="mb-0 fw-bold">Lista użytkowników</h1>
            </div>
        </div>
    </div>

    <header class="topbar" data-navbarbg="skin6">
        <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-start me-auto">
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->
                    <nav class="navbar navbar-light bg-light">
                        <div class="container-fluid">
                            <form class="d-flex"action="{{ route('users.index', request()->query()) }}">
                                <input class="form-control me-2" name="q" value="{{$search_param}}" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-primary" type="submit">Search</button>
                            </form>
                        </div>
                    </nav>
                </ul>
            </div>
        </nav>
    </header>

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
                                        <th scope="col">Nazwa</th>
                                        <th scope="col">Imie</th>
                                        <th scope="col">Nazwisko</th>
                                        <th scope="col">Telefon</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Akcja</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <th scope="row">{{ $user->id }}</th>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->first_name }}</td>
                                            <td>{{ $user->last_name }}</td>
                                            <td>{{ $user->phone_number }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                <form method="POST" action="{{ route('users.destroy', $user->id) }}" onsubmit="return confirm('Na pewno chcesz usunąć?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" type="submit" role="button">Usuń</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
