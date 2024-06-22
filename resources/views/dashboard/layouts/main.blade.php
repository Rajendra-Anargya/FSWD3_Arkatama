<!-- resources/views/dashboard/layouts/main.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ config('app.name') }}</title>

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    {{-- FontAwesome --}}
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    {{-- DataTables CSS --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.min.css">

    {{-- Your custom styles --}}
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha384-vtXRMe3mGCbOeY7l30aIg8H9p3GdeSe4IFlP6G8JMa7o7lXvnz3GFKzPxzJdPfGK" crossorigin="anonymous">
    </script>

    {{-- Additional CSS --}}
    @stack('css')
</head>

<body class="sb-nav-fixed">
    @include('dashboard.partials.navbar')

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            @include('dashboard.partials.sidebar')
        </div>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    @yield('content')
                </div>
            </main>
        </div>

        {{-- SweetAlert --}}
        @include('partials.sweetalert')

        {{-- Additional JavaScript --}}
        @stack('js')

        {{-- jQuery and DataTables JavaScript --}}
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha384-KyZXEAg3QhqLMpG8r+rtOk6OVW2n6mwl5pjW/FRnbXBk0qV4p+CuTToKtdPf2J8w" crossorigin="anonymous">
        </script>
        <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.min.js"></script>

        {{-- Bootstrap JavaScript --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
        </script>

        {{-- Your custom scripts --}}
        <script src="{{ asset('js/scripts.js') }}"></script>

        {{-- Chart.js --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/demo/chart-area-demo.js') }}"></script>
        <script src="{{ asset('assets/demo/chart-bar-demo.js') }}"></script>

        {{-- Simple DataTables JavaScript --}}
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
            crossorigin="anonymous"></script>
        <script src="{{ asset('js/datatables-simple-demo.js') }}"></script>

        {{-- Initialize DataTables --}}
        @stack('datatable-scripts')

        {{-- Chart Scripts --}}
        @stack('chart-scripts')
    </div>
</body>

</html>
