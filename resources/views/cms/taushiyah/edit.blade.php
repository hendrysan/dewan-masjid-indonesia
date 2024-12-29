@extends('layouts.cms-vertical-app')

@section('title', 'Page 2')

@section('css')

@endsection


@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Taushiyah </span></h4>

    <div class="row">
        <!-- Autosize -->
        <div class="col-12">
            <div class="card mb-4">
                <h5 class="card-header"></h5>
                <div class="card-body">
                    <div class="mb-3">
                        <form action="{{ route('cms.taushiyahs.update', $taushiyah->id) }}" method="POST"
                            class="needs-validation" novalidate>
                            @csrf

                            @method('PUT')

                            <input type="hidden" name="id" value="{{ $taushiyah->id }}">

                            <div class="mb-3">
                                <label for="name" class="form-label">Judul taushiyah</label> <span class="text-danger">*</span>
                                <input type="text" class="form-control" id="judul" name="judul"
                                    value="{{ $taushiyah->judul }}" required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">Please enter your name.</div>
                            </div>

                            <div class="float-end mt-3">
                                <a href="{{ route('cms.taushiyahs') }}" class="btn btn-link">Batal</a>
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Autosize -->
    </div>
</div>

@endsection
