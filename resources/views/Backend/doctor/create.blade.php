@extends('layouts.backend_master')
@section('title', 'Doctor')
@section('master_content')
    <div class="containerr">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h3 class="text-info my-2">Create Doctor</h3>
                    <div>
                        <a href="{{ route('admin.doctor.index') }}" class="btn btn-sm btn-success">Back</a>
                    </div>
                </div>
                <hr>
                <form action="{{ route('admin.doctor.store') }}" class="mt-4" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="my-2">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Name"
                                    value="{{ old('name') }}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
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
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="my-2">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password"
                                    value="{{ old('password') }}">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="my-2">
                                <label for="">Division</label>
                                <select name="" id="" class="form-control division">
                                    <option value="">Select Your Divison</option>
                                    @foreach ($divisions as $division)
                                        <option value="{{ $division->id }}">{{ $division->name }}</option>
                                    @endforeach
                                </select>
                                @error('division')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="my-2">
                                <label for="">District</label>
                                <select name="" id="" class="form-control district">
                                    <option value="">Select Your District</option>

                                </select>
                                @error('district')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="my-2">
                                <label for="">Hospital</label>
                                <select name="hospital_id" id="" class="form-control hospital">
                                    <option value="">Select a Hospital</option>
                                </select>
                                @error('hospital_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="my-2">
                        <button class="btn btn-sm btn-success w-100 ">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $('.division').select2();
        });

        $('body').on('change', '.division', function() {
            let id = $(this).val();
            let url = `${base_url}/division-districts/${id}`
            axios.get(url).then(res => {
                let html = '';
                html += '<option value="">Select Your District</option>'
                res.data.districts.forEach(element => {
                    html += "<option value=" + element.id + ">" + element.name + "</option>"
                });
                $('.district').html(html);
                $('.district').select2();
            })
        });

        $('body').on('change', '.district', function() {
            let id = $(this).val();
            let url = `${base_url}/district-hospitals/${id}`
            axios.get(url).then(res => {
                let html = '';
                html += '<option value="">Select A Hospital</option>'
                res.data.hospitals.forEach(element => {
                    html += "<option value=" + element.id + ">" + element.name + "</option>"
                });
                $('.hospital').html(html);
                $('.hospital').select2();
            })
        });
    </script>
@endpush
