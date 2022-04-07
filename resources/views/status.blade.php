@extends('layouts.frontend_app')

@section('title', 'Registration')
@section('app_content')
    <section id="registraion_section">
        <div class="row container">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-info">Important Links</h4>
                        <ul class="mt-4">
                            <li><a href="" class="btn btn-link">Apply for Vaccine</a></li>
                            <li><a href="" class="btn btn-link">Vaccine Card</a></li>
                            <li><a href="" class="btn btn-link">Faq</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h2>Check Vaccine Status</h2>
                        <form action="" class="mt-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="my-2">
                                        <label for="">Email</label>
                                        <input type="text" class="form-control" name="email" placeholder="Email"
                                            value="{{ old('email') }}">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="my-2">
                                        <label for="">NID</label>
                                        <input type="text" class="form-control" name="nid" placeholder="NID"
                                            value="{{ old('nid') }}">
                                        @error('nid')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="my-2">
                                <button class="btn btn-sm btn-success w-100">Check Status</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
