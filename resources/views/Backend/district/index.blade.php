@extends('layouts.backend_master')
@section('title', 'District')
@section('master_content')

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-info">Manage District</h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Division</th>
                            <th>Actions</th>
                        </tr>
                        <tbody id="tbody"></tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-info">Add District</h2>
                </div>
                <div class="card-body">
                    <form id="addDistrictForm">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter District Name">
                            <span class="text-danger" id="nameError"></span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success btn-block">Add New District</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit District</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" id="editForm">

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- View Modal -->
    <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">View District</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="viewData">

                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        function getAllData() {
            axios.get("{{ route('admin.district.get-all-data') }}")
                .then((res) => {
                    table_data_row(res.data)

                })
        }
        getAllData();

        function table_data_row(items) {
            let loop = items.map((item, index) => {
                return `
            <tr>
                <td>${++index}</td>
                <td>${item.name}</td>
                <td>${item.division.name}</td>
                <td class="text-center">
                    <a href="" class="btn btn-sm btn-success" data-id="${item.id}" data-toggle="modal" data-target="#viewModal" id="viewRow"><i class="fa fa-eye"></i></a>
                    <a href="" class="btn btn-sm btn-info" data-id="${item.id}" data-toggle="modal" data-target="#editModal" id="editRow"><i class="fa fa-edit"></i></a>
                    <a href="" id="deleteRow" class="btn btn-sm btn-danger" data-id="${item.id}"><i class="fa fa-trash-alt"></i></a>
                </td>
            </tr>
            `
            });
            loop = loop.join("")
            const tbody = $('#tbody')
            tbody.html(loop)

        }

        // store
        $('body').on('submit', '#addDistrictForm', function(e) {
            e.preventDefault();
            let name = $('#name');
            let nameError = $('#nameError');

            nameError.text('');
            if (name.val() === '') {
                nameError.text('Field Must not be Empty!')
                return null;
            }


            axios.post("{{ route('admin.district.store') }}", {
                    name: name.val()
                })
                .then((res) => {
                    getAllData();
                    setSuccessMessage();
                    name.val('');
                })
                .catch((err) => {
                    if (err.response.data.errors.name) {
                        nameError.text(err.response.data.errors.name[0])
                    }
                })
        })


        // delete

        $('body').on('click', '#deleteRow', function(e) {
            e.preventDefault()
            let slug = $(this).attr('data-id');
            const url = `${base_url_admin}/district/${slug}`;
            console.log(url);
            deleteDataWithAlert(url, getAllData);
        })


        // view
        $('body').on('click', '#viewRow', function() {
            let slug = $(this).data('id');
            axios.get(`${base_url_admin}/district/${slug}`)
                .then(res => {
                    let {
                        data: district
                    } = res
                    let viewData = $('#viewData');
                    viewData.html(`
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <td>${district.name}</td>
            </tr>
            <tr>
                <th>Division</th>
                <td>${item.division.name}</td>
            </tr>
        </table>
        `)
                });
        });
    </script>
@endpush
