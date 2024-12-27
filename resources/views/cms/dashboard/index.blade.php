@extends('layouts.cms-vertical-app')

@section('title', 'Page 2')

@section('css')

@endsection


@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Dashboard</h4>

    <div class="row">
        <!-- Autosize -->
        <div class="col-12">
            <div class="card mb-4">
                <h5 class="card-header"></h5>
                <div class="card-body">
                    {{-- <textarea id="autosize-demo" rows="3" class="form-control"></textarea> --}}
                    <h1>Selamat datang di halaman admin</h1>
                </div>
            </div>
        </div>
        <!-- /Autosize -->
    </div>
</div>

@endsection
