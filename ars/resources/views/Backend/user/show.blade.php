@extends('layouts.backend_master')
@section('title', 'User')
@section('master_content')
    <div class="card">
        <div class="card-header ">
            <div class="d-flex justify-content-between">
                <h4 class="card-title">User Details </h4>
                <a href="{{ route('admin.user.index') }}" class="btn btn-success btn-sm"><i class="fa fa-arrow-left"></i>
                    Back</a>
            </div>

        </div>
        <div class="card-body">
            <table class=" table table-bordered">
                <tr>
                    <th class="p-2">Name</th>
                    <td class="p-2">{{ $user->name }}</td>
                </tr>
                <tr>
                    <th class="p-2">Email</th>
                    <td class="p-2">{{ $user->email }}</td>
                </tr>
                <tr>
                    <th class="p-2">Phone</th>
                    <td class="p-2">{{ $user->phone }}</td>
                </tr>
                <tr>
                    <th class="p-2">NID</th>
                    <td class="p-2">{{ $user->nid }}</td>
                </tr>
                <tr>
                    <th class="p-2">Date Of Birth</th>
                    <td class="p-2">{{ $user->date_of_birth }}</td>
                </tr>
                <tr>
                    <th class="p-2">Division</th>
                    <td class="p-2">{{ $user->hospital->district->division->name }}</td>
                </tr>
                <tr>
                    <th class="p-2">District</th>
                    <td class="p-2">{{ $user->hospital->district->name }}</td>
                </tr>
                <tr>
                    <th class="p-2">Hospital</th>
                    <td class="p-2">{{ $user->hospital->name }}</td>
                </tr>
                <tr>
                    <th class="p-2">Vaccine</th>
                    <td class="p-2">{{ $user->vaccine->name }}</td>
                </tr>
                <tr>
                    <th class="p-2">Registraion Date</th>
                    <td class="p-2">{{ $user->created_at->format('Y-M-d') }}</td>
                </tr>

                <tr>
                    <td colspan="6" class="text-center">
                        <h4>Vaccine Informations</h4>
                    </td>
                </tr>
                <tr>
                    <th class="p-2">Vaccine Status</th>
                    <td class="p-2">{{ $user->status }}</td>
                </tr>
                @if ($user->first_dose || $user->second_dose)
                    <tr>
                        <th class="p-2">First Dose</th>
                        <td>
                            {{ $user->vaccine->name }}
                        </td>
                        <th class="p-2">Date</th>
                        <td>{{ $user->first_dose->date }}</td>
                        <th class="p-2">Doctor</th>
                        <td>{{ $user->first_dose->doctor->name }}</td>
                    </tr>

                    @if ($user->second_dose)
                        <tr>
                            <th class="p-2">Second Dose</th>
                            <td>
                                {{ $user->vaccine->name }}
                            </td>
                            <th class="p-2">Date</th>
                            <td>{{ $user->second_dose->date }}</td>
                            <th class="p-2">Doctor</th>
                            <td>{{ $user->second_dose->doctor->name }}</td>
                        </tr>
                        <tr>
                            <th class="p-2">Booster Dose</th>
                            {{-- <td class="p-2">{{ $user->first_dose->vaccine_id }}</td> --}}
                            <td>
                                Pizer
                            </td>
                            <th class="p-2">Date</th>
                            <td>5555</td>
                            <th class="p-2">Doctor</th>
                            <td>Shahin</td>
                        </tr>
                    @endif
                @endif
            </table>
        </div>
    </div>
@endsection
