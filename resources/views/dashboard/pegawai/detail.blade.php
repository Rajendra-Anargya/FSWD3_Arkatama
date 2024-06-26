@extends('dashboard.layouts.main')

{{-- @title('Detail Pegawai') --}}

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1>Detail Pegawai</h1>

            <div class="card">
                <div class="card-body">
                    <p class="card-title"><strong>Nama:</strong> {{ $employee->nama }}<p>
                    <p class="card-text"><strong>Umur:</strong> {{ $umur }} tahun</p>
                    <p class="card-title"><strong>No. Telp:</strong> {{ $employee->nomor_telepon }}<p>
                    <p class="card-text"><strong>Email:</strong> {{ $employee->email }}</p>
                    <p class="card-text"><strong>Tanggal Lahir:</strong> {{ \Carbon\Carbon::parse($employee->tanggal_lahir)->format('Y-m-d') }}</p>
                    <p class="card-text"><strong>Tanggal Masuk:</strong> {{ \Carbon\Carbon::parse($employee->tanggal_masuk)->format('Y-m-d') }}</p>
                    <p class="card-text"><strong>Divisi:</strong> {{ $employee->divisi }}</p>
                </div>
            </div>

            <a href="{{ route('employees.index') }}" class="btn btn-secondary mt-3">Kembali</a>
        </div>
    </div>
</div>

@endsection
