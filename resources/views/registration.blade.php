@extends('layouts.frontend_app')

@section('title', 'Registration')
@section('app_content')
    <section id="registraion_section">
        <div class="row container">
            <div class="col-md-4"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h2>Registraion For Vaccine</h2>
                        <form action="" class="mt-4">
                            <div class="my-2">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Name"
                                    value="{{ old('name') }}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="my-2">
                                <label for="">Email</label>
                                <input type="text" class="form-control" name="email" placeholder="Email"
                                    value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="my-2">
                                <label for="">Phone</label>
                                <input type="text" class="form-control" name="phone" placeholder="Phone"
                                    value="{{ old('phone') }}">
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="my-2">
                                        <label for="">Date Of Birth</label>
                                        <input type="date" class="form-control" name="date_of_birth"
                                            value="{{ old('date_of_birth') }}">
                                        @error('date_of_birth')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="my-2">
                                        <label for="">Vaccine</label>
                                        <select name="vaccine" id="" class="form-control">
                                            <option value="">Select a Vaccine</option>
                                            <option value="">Mordana</option>
                                            <option value="">Pizer</option>
                                            <option value="">Sinovac</option>
                                        </select>
                                        @error('vaccine')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="my-2">
                                <button class="btn btn-sm btn-success w-100">Apply for Vaccine</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
