@extends('layouts.admin')

@section('content')
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 d-flex align-items-center">
                      <li class="breadcrumb-item"><a href="/admin" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                  </nav>
                <h1 class="mb-0 fw-bold">Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="highcharts-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="d-md-flex align-items-center">
                            <div>
                                <h4 class="card-title">Użytkownicy</h4>
                                <h6 class="card-subtitle">Comiesięczny raport użytkowników</h6>
                            </div>
                        </div>
                        <div id="Highcharts-container-users"></div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="d-md-flex align-items-center">
                            <div>
                                <h4 class="card-title">Samochody</h4>
                                <h6 class="card-subtitle">Comiesięczny raport samochodów</h6>
                            </div>
                        </div>
                        <div id="Highcharts-container-cars"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Statystyki Bazy</h4>
                        <h6 class="card-subtitle">Liczby</h6>
                        <div class="mt-5 pb-3 d-flex align-items-center">
                            <span class="btn btn-primary btn-circle d-flex align-items-center">
                                <i class="mdi mdi-account fs-4" ></i>
                            </span>
                            <div class="ms-3">
                                <h5 class="mb-0 fw-bold">Użytkownicy</h5>
                                <span class="text-muted fs-6">Liczba zarejestrowanych kont</span>
                            </div>
                            <div class="ms-auto">
                                <span class="badge bg-light text-muted">{{ $users }}</span>
                            </div>
                        </div>
                        <div class="py-3 d-flex align-items-center">
                            <span class="btn btn-warning btn-circle d-flex align-items-center">
                                <i class="mdi mdi-car fs-4" ></i>
                            </span>
                            <div class="ms-3">
                                <h5 class="mb-0 fw-bold">Samochody</h5>
                                <span class="text-muted fs-6">Liczba pojazdów</span>
                            </div>
                            <div class="ms-auto">
                                <span class="badge bg-light text-muted">{{ $usercars }}</span>
                            </div>
                        </div>
                        <div class="py-3 d-flex align-items-center">
                            <span class="btn btn-success btn-circle d-flex align-items-center">
                                <i class="mdi mdi-desktop-mac text-white fs-4" ></i>
                            </span>
                            <div class="ms-3">
                                <h5 class="mb-0 fw-bold">Admin</h5>
                                <span class="text-muted fs-6">Liczba przydzielonych administratorów</span>
                            </div>
                            <div class="ms-auto">
                                <span class="badge bg-light text-muted">{{ $qual_admin }}</span>
                            </div>
                        </div>
                        <div class="py-3 d-flex align-items-center">
                            <span class="btn btn-info btn-circle d-flex align-items-center">
                                <i class="mdi mdi-chart-line fs-4 text-white" ></i>
                            </span>
                            <div class="ms-3">
                                <h5 class="mb-0 fw-bold">Akceptacja</h5>
                                <span class="text-muted fs-6">Liczba postów do zakceptowania</span>
                            </div>
                            <div class="ms-auto">
                                <span class="badge bg-light text-muted">{{ $qual_cars }}</span>
                            </div>
                        </div>

                        <div class="pt-3 d-flex align-items-center">
                            <span class="btn btn-danger btn-circle d-flex align-items-center">
                                <i class="mdi mdi-content-duplicate fs-4 text-white" ></i>
                            </span>
                            <div class="ms-3">
                                <h5 class="mb-0 fw-bold">Zdjęcia</h5>
                                <span class="text-muted fs-6">Liczba zdjęc samochodów</span>
                            </div>
                            <div class="ms-auto">
                                <span class="badge bg-light text-muted">{{ $qual_img_cars }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>
<script src="https://code.highcharts.com/highcharts.js"></script>


<script type="text/javascript">
    var datas = <?php echo json_encode($datas)?>;

    Highcharts.chart('Highcharts-container-users', {
        title: {
            text: 'Nowi użytkownicy '
        },

        xAxis: {
            categories: ['Styczeń', 'Luty', 'Marzec', 'Kwiecień', 'Maj', 'Czerwiec', 'Lipiec', 'Sierpień', 'Wrzesień','Październik', 'Listopad', 'Grudzień']
        },

        plotOptions: {
            series:{
                allowPointSelect:true
            }
        },

        chart: {
            type: 'areaspline',
        },

        series:[{
            name:'Nowi użytkownicy',
            data:datas
        }],

    });
</script>

<script type="text/javascript">
    var datas_cars = <?php echo json_encode($datas_cars)?>;

    Highcharts.chart('Highcharts-container-cars', {
        title: {
            text: 'Nowe dodane samochody'
        },

        xAxis: {
            categories: ['Styczeń', 'Luty', 'Marzec', 'Kwiecień', 'Maj', 'Czerwiec', 'Lipiec', 'Sierpień', 'Wrzesień','Październik', 'Listopad', 'Grudzień']
        },

        plotOptions: {
            series:{
                allowPointSelect:true
            }
        },

        chart: {
            type: 'areaspline',
        },

        series:[{
            name:'Nowe samochody',
            data:datas_cars
        }],

    });
</script>


@endsection


