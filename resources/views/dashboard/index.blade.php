@extends('dashboard.body.main')


@section('specificpagestyles')
<link href="https://cdn.jsdelivr.net/npm/litepicker/dist/css/litepicker.css" rel="stylesheet" />
@endsection

@section('specificpagescripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('assets/demo/chart-area-demo.js') }}"></script>
<script src="{{ asset('assets/demo/chart-bar-demo.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/bundle.js" crossorigin="anonymous"></script>
<script src="{{ asset('assets/js/litepicker.js') }}"></script>
@endsection

@section('content')
<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
    <div class="container-xl px-4">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-4">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="activity"></i></div>
                        Tableau de Bord
                    </h1>
                    <div class="page-header-subtitle">La vue d'ensemble du tableau de bord et résumé du contenu</div>
                </div>
                <div class="col-12 col-xl-auto mt-4">
                    <div class="input-group input-group-joined border-0" style="width: 16.5rem">
                        <span class="input-group-text"><i class="text-primary" data-feather="calendar"></i></span>
                        <input class="form-control ps-0 pointer" id="litepickerRangePlugin" placeholder="Select date range..." />
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main page content -->
<div class="container-xl px-4 mt-n10">
    <!-- Example Colored Cards for Dashboard Demo -->
    <div class="row">
        <div class="col-lg-6 col-xl-3 mb-4">
            <div class="card bg-primary text-white h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="me-3">
                            <div class="text-white-75 small">Gains (mensuels)</div>
                            <div class="text-lg fw-bold">40 000 $</div>
                        </div>
                        <i class="feather-xl text-white-50" data-feather="calendar"></i>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between small">
                    <a class="text-white stretched-link" href="#">Voir le rapport</a>
                    <div class="text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-3 mb-4">
            <div class="card bg-warning text-white h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="me-3">
                            <div class="text-white-75 small">Gains (Annuels)</div>
                            <div class="text-lg fw-bold">$215,000</div>
                        </div>
                        <i class="feather-xl text-white-50" data-feather="dollar-sign"></i>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between small">
                    <a class="text-white stretched-link" href="#">Voir le rapport</a>
                    <div class="text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-3 mb-4">
            <div class="card bg-success text-white h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="me-3">
                            <div class="text-white-75 small">Achèvement de la tâche</div>
                            <div class="text-lg fw-bold">24</div>
                        </div>
                        <i class="feather-xl text-white-50" data-feather="check-square"></i>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between small">
                    <a class="text-white stretched-link" href="#">Voir la Tâche</a>
                    <div class="text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-3 mb-4">
            <div class="card bg-danger text-white h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="me-3">
                            <div class="text-white-75 small">Requêtes en attente</div>
                            <div class="text-lg fw-bold">17</div>
                        </div>
                        <i class="feather-xl text-white-50" data-feather="message-circle"></i>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between small">
                    <a class="text-white stretched-link" href="#">Voir la requête </a>
                    <div class="text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Example Charts for Dashboard Demo -->
    <div class="row">
        <div class="col-xl-6 mb-4">
            <div class="card card-header-actions h-100">
                <div class="card-header">
                Répartition des revenus
                    <div class="dropdown no-caret">
                        <button class="btn btn-transparent-dark btn-icon dropdown-toggle" id="areaChartDropdownExample" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="text-gray-500" data-feather="more-vertical"></i></button>
                        <div class="dropdown-menu dropdown-menu-end animated--fade-in-up" aria-labelledby="areaChartDropdownExample">
                            <a class="dropdown-item" href="#">Les 12 derniers Mois</a>
                            <a class="dropdown-item" href="#">Les 30 derniers jours</a>
                            <a class="dropdown-item" href="#">Les 7 derniers jours</a>
                            <a class="dropdown-item" href="#">Ce mois-ci</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Gamme personnalisée</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area"><canvas id="myAreaChart" width="100%" height="30"></canvas></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 mb-4">
            <div class="card card-header-actions h-100">
                <div class="card-header">
                Revenu mensuel
                    <div class="dropdown no-caret">
                        <button class="btn btn-transparent-dark btn-icon dropdown-toggle" id="areaChartDropdownExample" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="text-gray-500" data-feather="more-vertical"></i></button>
                        <div class="dropdown-menu dropdown-menu-end animated--fade-in-up" aria-labelledby="areaChartDropdownExample">
                            <a class="dropdown-item" href="#">Les 12 derniers Mois</a>
                            <a class="dropdown-item" href="#">Les 30 derniers Jours</a>
                            <a class="dropdown-item" href="#">Les 7 derniers jours</a>
                            <a class="dropdown-item" href="#">Ce Mois-ci</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Gamme personnalisée</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-bar"><canvas id="myBarChart" width="100%" height="30"></canvas></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
