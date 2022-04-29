@extends('layouts.backend_master')
@section('title', 'Doctor')
@section('master_content')
    <div class="containerr">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h3 class="text-info my-2">View Doctor</h3>
                    <div>
                        <a href="{{ route('admin.doctor.index') }}" class="btn btn-sm btn-success">Back</a>
                    </div>
                </div>
                <hr>
                <table class="table table-bordered">
                    <tr>
                        <th>
                            Name
                        </th>
                        <td>{{ $doctor->name }}</td>

                        <th>
                            Email
                        </th>
                        <td>{{ $doctor->email }}</td>
                    </tr>
                    <tr>
                        <th>
                            Hospital
                        </th>
                        <td>{{ $doctor->hospital->name }}</td>

                        <th>
                            District
                        </th>
                        <td>{{ $doctor->hospital->district->name }}</td>
                    </tr>
                    <tr>
                        <th>
                            Division
                        </th>
                        <td>{{ $doctor->hospital->district->division->name ?? '' }}</td>
                        <th>
                            Join
                        </th>
                        <td>{{ $doctor->created_at->format('Y-m-d') }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
