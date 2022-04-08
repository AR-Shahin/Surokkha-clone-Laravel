@extends('layouts.doctor_master')
@section('title', 'Doctor Dashboard')
@section('master_content')

    {{ auth('doctor')->user()->name ?? 'NULL' }}
@stop
