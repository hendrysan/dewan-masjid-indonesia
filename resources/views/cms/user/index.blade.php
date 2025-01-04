@extends('layouts.cms-vertical-app')

@section('title', 'Page 2')

@section('css')
<link rel="stylesheet" href="{{ asset('/cms-assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
<link rel="stylesheet"
    href="{{ asset('/cms-assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
<link rel="stylesheet"
    href="{{ asset('/cms-assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}" />
<link rel="stylesheet" href="{{ asset('/cms-assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

<style>
    .dataTables_filter {
        display: none;
    }
</style>
@endsection


@section('content')
<!-- Content -->

<div class="container-fluid flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">User </span> </h4>

    <div class="row g-4 mb-4">
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>User</span>
                            <div class="d-flex align-items-center my-2">
                                <h3 class="mb-0 me-2">{{$total_user}}</h3>
                            </div>
                            <p class="mb-0">Total User</p>
                        </div>
                        <div class="avatar">
                            <span class="avatar-initial rounded bg-label-primary">
                                <i class="ti ti-user ti-sm"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>Administrator</span>
                            <div class="d-flex align-items-center my-2">
                                <h3 class="mb-0 me-2">{{$total_administrator}}</h3>
                            </div>
                            <p class="mb-0">Total user role Administrator</p>
                        </div>
                        <div class="avatar">
                            <span class="avatar-initial rounded bg-label-danger">
                                <i class="ti ti-user-plus ti-sm"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>Verifikator</span>
                            <div class="d-flex align-items-center my-2">
                                <h3 class="mb-0 me-2">{{$total_verifikator}}</h3>
                            </div>
                            <p class="mb-0">Total user role Verifikator</p>
                        </div>
                        <div class="avatar">
                            <span class="avatar-initial rounded bg-label-success">
                                <i class="ti ti-user-check ti-sm"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>Operator</span>
                            <div class="d-flex align-items-center my-2">
                                <h3 class="mb-0 me-2">{{$total_operator}}</h3>
                            </div>
                            <p class="mb-0">Total user role Operator</p>
                        </div>
                        <div class="avatar">
                            <span class="avatar-initial rounded bg-label-warning">
                                <i class="ti ti-user-exclamation ti-sm"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Users List Table -->
    <div class="card">
        <div class="card-header border-bottom">
            <div class="row ">
                <div class="col-md-3">
                    <input type="text" id="searchbox" class="form-control" placeholder="&#xF002; Search Nama Desa"
                        style="font-family:Arial, FontAwesome">
                </div>
                <div class="col-md-9 text-end">

                    <a href="{{ route('cms.users.create') }}" class="btn btn-primary">
                        <span class="fas fa-plus"></span> &nbsp;
                        User </a>
                </div>
            </div>
        </div>
        <div class="card-datatable table-responsive">
            <table class="datatables-basic table">
                <thead class="border-top">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
            </table>
        </div>

    </div>
</div>
<!--/ Content -->

@endsection
@section('js')
<script src="{{ asset('/cms-assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
<script>
    $(function() {
            const table = $('.datatables-basic').DataTable({
                processing: true,
                serverSide: true,
                ordering: false,
                lengthChange: false,
                pageLength: 10,
                searching: true,
                ajax: '{!! route('cms.users') !!}',
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'role',
                        name: 'role'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ]
            });

            $("#searchbox").on("keyup search input paste cut", function() {
                table.search(this.value).draw();
            });

            table.on('click', '.delete', function(event) {
                var id = $(this).attr('data-id');
                var url = '{{ route('cms.roles.destroy', ':id') }}';
                url = url.replace(':id', id);
                // console.log(url);
                event.preventDefault();
                Swal.fire({
                        title: `Are you sure you want to delete this row?`,
                        text: "It will gone forevert",
                        icon: "warning",
                        confirmButtonText: 'Yes, delete it!',
                        customClass: {
                            confirmButton: 'btn btn-primary me-3 waves-effect waves-light',
                            cancelButton: 'btn btn-label-secondary waves-effect waves-light'
                        },
                        buttonsStyling: false
                    })
                    .then((willDelete) => {
                        if (willDelete.isConfirmed) {
                            console.log('delete');
                            $.ajax({
                                url: url,
                                type: 'DELETE',
                                data: {
                                    _token: '{{ csrf_token() }}'
                                },
                                success: function(data) {
                                    location.reload();
                                }
                            });
                        }
                    });
            });
        });
</script>
@endsection
