@extends('layouts.backend_master')
@section('title', 'User')
@section('master_content')
    <div class="card">
        <div class="card-header ">
            <div class="d-flex justify-content-between">
                <h3 class="card-title">Manage Users</h3>
                <div class="btn-group">
                    <a href="" class="btn btn-sm btn-success">First Dose</a>
                    <a href="" class="btn btn-sm btn-info">Second Dose</a>
                    <a href="" class="btn btn-sm btn-secondary">Booster Dose</a>
                </div>
            </div>

        </div>
        <div class="card-body">
            <table class="table table-bordered" id="UserTable">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>NID</th>
                        <th>Phone</th>
                        <th>Registation Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->nid }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->created_at->diffForHumans() }}</td>
                            <td>{{ $user->status }}</td>
                            <td>
                                <a href="{{ route('admin.user.view', $user->id) }}" class="btn btn-sm btn-success"><i
                                        class="fa fa-eye"></i></a>
                                @if ($user->status == 'pending')
                                    <a href="{{ route('admin.user.first-dose-request', $user->id) }}"
                                        class="btn btn-sm btn-info"><i class="fa fa-envelope"></i></a>
                                @endif
                                <a href="" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection


@push('script')
    <script>
        $('#UserTable').DataTable();
    </script>
@endpush
