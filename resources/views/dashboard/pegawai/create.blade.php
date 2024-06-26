@extends('dashboard.layouts.main')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-3">
                <h1>Tambah Data Pegawai</h1>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('employees.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" id="nama" name="nama" class="form-control" value="{{ old('nama') }}">
                    </div>

                    <div class="form-group">
                        <label for="nomor_telepon">Nomor Telepon:</label>
                        <input type="text" id="nomor_telepon" name="nomor_telepon" class="form-control"
                            value="{{ old('nomor_telepon') }}">
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" class="form-control"
                            value="{{ old('email') }}">
                    </div>

                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir:</label>
                        <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control"
                            value="{{ old('tanggal_lahir') }}">
                    </div>

                    <div class="form-group">
                        <label for="tanggal_masuk">Tanggal Masuk:</label>
                        <input type="date" id="tanggal_masuk" name="tanggal_masuk" class="form-control"
                            value="{{ old('tanggal_masuk') }}">
                    </div>

                    <div class="form-group">
                        <label for="divisi">Divisi:</label>
                        <select id="divisi" name="divisi" class="form-control">
                            <option value="ui/ux" {{ old('divisi') == 'ui/ux' ? 'selected' : '' }}>UI/UX</option>
                            <option value="front end" {{ old('divisi') == 'front end' ? 'selected' : '' }}>Front End
                            </option>
                            <option value="back end" {{ old('divisi') == 'back end' ? 'selected' : '' }}>Back End</option>
                        </select>
                    </div>

                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection
