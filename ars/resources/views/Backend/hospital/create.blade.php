@extends('layouts.backend_master')
@section('title', 'Hospital')
@section('master_content')
    <div class="containe-r">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h3 class="text-info my-2">Create Hospital</h3>
                    <div>
                        <a href="{{ route('admin.hospital.index') }}" class="btn btn-sm btn-success"> Back</a>
                    </div>
                </div>
                <hr>
                <form action="{{ route('admin.hospital.store') }}" method="POST">
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
                                <label for="">Division</label>
                                <select name="" id="" class="form-control division">
                                    <option value="">Select Divison</option>
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
                                <select name="district_id" id="" class="form-control district">
                                    <option value="">Select District</option>

                                </select>
                                @error('district')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="my-2">
                        <button class="btn btn-success btn-block">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $('#table_id').DataTable();

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
    </script>
@endpush
