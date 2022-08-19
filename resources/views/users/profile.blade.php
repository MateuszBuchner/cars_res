@extends('layouts.pages')
@section('content')


<div class="containerek containerek4 ">
    <div class="row g-0 text-center blok shadow-lg p-3 mb-5 bg-body rounded">
        <div class="container-fluid mt--7">
            <div class="row">
                <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                    <div class="card card-profile shadow">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 order-lg-2">
                                <div class="card-profile-image">
                                <a href="#">
                                    <img src="{{ asset('images/profile.png') }}" class="rounded-circle">
                                </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4"></div>
                        <div class="card-body pt-0 pt-md-4">
                            <div class="row">
                                <div class="col">
                                    <div class="card-profile-stats d-flex justify-content-center mt-md-5"></div>
                                </div>
                            </div>
                            <div class="text-center">
                                <h3>{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}<span class="font-weight-light"></span>
                                </h3>
                                <div class="h5 mt-4"><i class="ni business_briefcase-24 mr-2"></i>Użytkownik</div>
                                <div><i class="ni education_hat mr-2"></i>Abonament standard</div>
                                <hr class="my-4">
                                <p>Zmiany w Regulaminie 18.08.2022 - zmiana regulaminu dla Klientów Biznesowych</p>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-responsive-nav-link style="color: rgb(0, 0, 0); text-decoration: none;" :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Wyloguj się') }}
                                    </x-responsive-nav-link>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 order-xl-1">
                    <div class="card-body">
                    <form>
                        <h6 class="heading-small text-muted mb-4">Informacje o użytkowniku</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-username">Nazwa konta</label>
                                        <input type="text" id="input-username" class="form-control form-control-alternative" value="{{ auth()->user()->name }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Adres email</label>
                                        <input type="email" id="input-email" class="form-control form-control-alternative" value="{{ auth()->user()->email }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-first-name">Imie</label>
                                        <input type="text" id="input-first-name" class="form-control form-control-alternative" value="{{ auth()->user()->first_name }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-last-name">Nazwisko</label>
                                        <input type="text" id="input-last-name" class="form-control form-control-alternative" value="{{ auth()->user()->name }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-first-name">Numer telefonu</label>
                                        <input type="text" id="input-first-name" class="form-control form-control-alternative" value="{{ auth()->user()->phone_number }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-last-name">Data utwożenia konta</label>
                                        <input type="text" id="input-last-name" class="form-control form-control-alternative" value="{{ auth()->user()->created_at }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
