@extends('layouts.backend_master')
@section('title', 'Hospital')
@section('master_content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h3 class="text-info my-2">Manage Hospitals</h3>
                    <div>
                        <a href="{{ route('admin.hospital.create') }}" class="btn btn-sm btn-success">Add Hospital</a>
                    </div>
                </div>
                <hr>
                <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>District</th>
                            <th>Division</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($hospitals as $hospital)
                            <tr>
                                <td>{{ $hospital->name }}</td>
                                <td>{{ $hospital->district->name }}</td>
                                <td>{{ $hospital->district->division->name }}</td>
                                <td>
                                    <form action="{{ route('admin.hospital.destroy', $hospital->id) }}" method="POST">
                                        @csrf

                                        <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
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

@push('script')
    <script>
        $('#table_id').DataTable();
    </script>
@endpush
