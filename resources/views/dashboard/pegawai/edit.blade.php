@extends('dashboard.layouts.main')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Edit Data Pegawai</h1>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('employees.update', $employee->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" id="nama" name="nama" class="form-control"
                            value="{{ old('nama', $employee->nama) }}">
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" class="form-control"
                            value="{{ old('email', $employee->email) }}">
                    </div>

                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir:</label>
                        <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control"
                            value="{{ old('tanggal_lahir', $employee->tanggal_lahir) }}">
                    </div>

                    <div class="form-group">
                        <label for="divisi">Divisi:</label>
                        <select id="divisi" name="divisi" class="form-control">
                            <option value="ui/ux" {{ old('divisi', $employee->divisi) == 'ui/ux' ? 'selected' : '' }}>
                                UI/UX</option>
                            <option value="front end"
                                {{ old('divisi', $employee->divisi) == 'front end' ? 'selected' : '' }}>Front End</option>
                            <option value="back end" {{ old('divisi', $employee->divisi) == 'back end' ? 'selected' : '' }}>
                                Back End</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>

            </div>
        </div>
    </div>

@endsection
