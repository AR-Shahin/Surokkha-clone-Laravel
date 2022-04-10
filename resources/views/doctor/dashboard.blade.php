@extends('layouts.doctor_master')
@section('title', 'Doctor Dashboard')
@section('master_content')

    <div class="row pt-4">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <h5>Name : {{ auth()->user()->name }}</h5>
                    <h5>Email : {{ auth()->user()->email }}</h5>
                    <h5>Hospital : {{ auth()->user()->hospital->name }}</h5>
                    <h5>Vaccinated Users : {{ $users }}</h5>
                </div>
            </div>
        </div>
    </div>
@stop
