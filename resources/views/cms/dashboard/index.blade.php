@extends('layouts.cms-vertical-app')

@section('title', 'Page 2')

@section('css')

@endsection


@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Dashboard</h4>
    <div class="row">
        <div class="col-12">
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
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="row g-4 mb-4">
                <div class="col-sm-6 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between">
                                <div class="content-left">
                                    <span>Masjid dan Musholah Terverifikasi</span>
                                    <div class="d-flex align-items-center my-2">
                                        <h3 class="mb-0 me-2">{{$total_masjid_terverifikasi}}</h3>
                                    </div>
                                    <p class="mb-0">Total Bangunan</p>
                                </div>
                                <div class="avatar">
                                    <span class="avatar-initial rounded bg-label-primary">
                                        <i class="ti ti-home ti-sm"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between">
                                <div class="content-left">
                                    <span>Total Masjid</span>
                                    <div class="d-flex align-items-center my-2">
                                        <h3 class="mb-0 me-2">{{$total_masjid}}</h3>
                                    </div>
                                    <p class="mb-0">Total Masjid</p>
                                </div>
                                <div class="avatar">
                                    <span class="avatar-initial rounded bg-label-danger">
                                        <i class="ti ti-home ti-sm"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between">
                                <div class="content-left">
                                    <span>Musholah</span>
                                    <div class="d-flex align-items-center my-2">
                                        <h3 class="mb-0 me-2">{{$total_musholah}}</h3>
                                    </div>
                                    <p class="mb-0">Total Musholah</p>
                                </div>
                                <div class="avatar">
                                    <span class="avatar-initial rounded bg-label-success">
                                        <i class="ti ti-home ti-sm"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- <div class="row">
        <!-- Autosize -->
        <div class="col-12">
            <div class="card mb-4">
                <h5 class="card-header"></h5>
                <div class="card-body">

                </div>
            </div>
        </div>
        <!-- /Autosize -->
    </div> --}}
</div>

@endsection
@section('js')

@endsection
