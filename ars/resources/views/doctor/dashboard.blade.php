@extends('layouts.doctor_master')
@section('title', 'Doctor Dashboard')
@section('master_content')

    <div class="row pt-4">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <h5>Name : {{ auth()->user()->name }}</h5>
                    <h5>Email : {{ auth()->user()->email }}</h5>
                    <h5>Hospital : {{ auth()->user()->hospital->name }}</h5>
                    <h5>Vaccinated Users : {{ $users }}</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Area Chart</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart">
                        <div class="chartjs-size-monitor">
                            <div class="chartjs-size-monitor-expand">
                                <div class=""></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink">
                                <div class=""></div>
                            </div>
                        </div>
                        <canvas id="areaChart"
                            style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 335px;"
                            width="335" height="250" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>

            </div>


            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">Donut Chart</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chartjs-size-monitor">
                        <div class="chartjs-size-monitor-expand">
                            <div class=""></div>
                        </div>
                        <div class="chartjs-size-monitor-shrink">
                            <div class=""></div>
                        </div>
                    </div>
                    <canvas id="donutChart"
                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 335px;"
                        width="335" height="250" class="chartjs-render-monitor"></canvas>
                </div>

            </div>


            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">Pie Chart</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chartjs-size-monitor">
                        <div class="chartjs-size-monitor-expand">
                            <div class=""></div>
                        </div>
                        <div class="chartjs-size-monitor-shrink">
                            <div class=""></div>
                        </div>
                    </div>
                    <canvas id="pieChart"
                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 335px;"
                        width="335" height="250" class="chartjs-render-monitor"></canvas>
                </div>

            </div>

        </div>

        <div class="col-md-6">

            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Line Chart</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart">
                        <div class="chartjs-size-monitor">
                            <div class="chartjs-size-monitor-expand">
                                <div class=""></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink">
                                <div class=""></div>
                            </div>
                        </div>
                        <canvas id="lineChart"
                            style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 335px;"
                            width="335" height="250" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>

            </div>


            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Bar Chart</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart">
                        <div class="chartjs-size-monitor">
                            <div class="chartjs-size-monitor-expand">
                                <div class=""></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink">
                                <div class=""></div>
                            </div>
                        </div>
                        <canvas id="barChart"
                            style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 335px;"
                            width="335" height="250" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>

            </div>


            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Stacked Bar Chart</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart">
                        <div class="chartjs-size-monitor">
                            <div class="chartjs-size-monitor-expand">
                                <div class=""></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink">
                                <div class=""></div>
                            </div>
                        </div>
                        <canvas id="stackedBarChart"
                            style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 335px;"
                            width="335" height="250" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>

            </div>

        </div>

    </div>
@stop
