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
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Masjid </span> </h4>
    <!-- Users List Table -->
    <div class="card">
        <div class="card-header border-bottom">

            <div class="row ">
                <div class="col-3">
                    <input type="text" id="searchbox" class="form-control" placeholder="&#xF002; Search"
                        style="font-family:Arial, FontAwesome">
                </div>
                <div class="col-9 text-end">

                    <a href="{{ route('cms.masjids.create') }}" class="btn btn-primary">
                        <span class="fas fa-plus"></span> &nbsp;
                        Masjid </a>
                </div>
            </div>


        </div>
        <div class="card-datatable table-responsive">
            <table class="datatables-basic table">
                <thead class="border-top">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Desa</th>
                        <th>Kecamatan</th>
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
                ajax: '{!! route('cms.masjids') !!}',
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'nama',
                        name: 'nama'
                    },
                    {
                        data: 'alamat',
                        name: 'alamat'
                    },
                    {
                        data: 'desa',
                        name: 'desa'
                    },
                    {
                        data: 'kecamatan',
                        name: 'kecamatan'
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
                var url = '{{ route('cms.masjids.destroy', ':id') }}';
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
