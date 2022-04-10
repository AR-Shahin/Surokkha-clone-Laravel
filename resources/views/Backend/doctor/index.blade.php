@extends('layouts.backend_master')
@section('title', 'Doctor')
@section('master_content')
    <div class="containerr">
        <div class="card">
            <div class="card-body">
                <h3 class="text-info my-2">Manage Doctors</h3>
                <hr>
                <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Hostital</th>
                            <th>District</th>
                            <th>Division</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($doctors as $doctor)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $doctor->name }}</td>
                                <td>{{ $doctor->hospital->name }}</td>
                                <td>{{ $doctor->hospital->district->name }}</td>
                                <td>{{ $doctor->hospital->district->division->name }}</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $('#table_id').DataTable();
    </script>
@endpush
