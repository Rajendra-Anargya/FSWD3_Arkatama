@extends('dashboard.layouts.main')

@section('content')
    <div class="card mt-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <div>
                <i class="fas fa-table me-1"></i>
                Data Pegawai
            </div>
            <div>
                <a href="{{ route('employees.create') }}" class="btn btn-sm btn-success mt-3 mb-2">Tambah Pegawai</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="employee-table" class="table table-striped table-bordered nowrap">
                    <thead>
                        <tr>
                            <th style="text-align: center;">ID</th>
                            <th style="text-align: center;">Nama</th>
                            <th style="text-align: center;">Nomor Telepon</th>
                            <th style="text-align: center;">Email</th>
                            <th style="text-align: center;">Tanggal Lahir</th>
                            <th style="text-align: center;">Tanggal Masuk</th>
                            <th style="text-align: center;">Divisi</th>
                            <th style="text-align: center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($employees as $employee)
                            <tr>
                                <td style="text-align: center;">{{ $employee->id }}</td>
                                <td style="text-align: center;">{{ $employee->nama }}</td>
                                <td style="text-align: center;">{{ $employee->nomor_telepon }}</td>
                                <td style="text-align: center;">{{ $employee->email }}</td>
                                <td style="text-align: center;">{{ \Carbon\Carbon::parse($employee->tanggal_lahir)->format('Y-m-d') }}</td>
                                <td style="text-align: center;">{{ \Carbon\Carbon::parse($employee->tanggal_masuk)->format('Y-m-d') }}</td>
                                <td style="text-align: center;">{{ $employee->divisi }}</td>
                                <td style="text-align: center;">
                                    <a href="{{ route('employees.show', $employee->id) }}"
                                        class="btn btn-primary btn-sm">Detail</a>
                                    <a href="{{ route('employees.edit', $employee->id) }}"
                                        class="btn btn-info btn-sm">Edit</a>
                                    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST"
                                        style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('datatable-scripts')
    <script>
        $(document).ready(function() {
            $('#employee-table').DataTable({
                searching: true 
            });
        });
    </script>
@endpush
