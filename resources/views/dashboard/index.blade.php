<!-- resources/views/dashboard/index.blade.php -->

@extends('dashboard.layouts.main')

@section('content')
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
    </ol>
    <div class="row">
        <!-- Pegawai Card -->
        <div class="col-xl-3 col-md-12">
            <div class="card bg-secondary text-white mb-4">
                <div class="card-body">
                    Pegawai
                    <h2>{{ $employeeCount }}</h2>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{ route('employees.index') }}">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>

        <!-- Chart Card -->
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Pendaftaran Pegawai Bulanan</h3>
                </div>
                <div class="card-body">
                    <div class="chart-container" style="position: relative; height:400px; width:100%">
                        {!! $chart->container() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('chart-scripts')
    <script src="{{ $chart->cdn() }}"></script>
    {{ $chart->script() }}
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            function resizeChart() {
                var chartElement = document.getElementById("{{ $chart->id }}");
                if (chartElement) {
                    chartElement.style.width = '100%';
                    chartElement.style.height = '100%';
                }
            }
            window.addEventListener('resize', resizeChart);
            resizeChart();
        });
    </script>
@endpush
