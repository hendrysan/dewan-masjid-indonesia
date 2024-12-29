@extends('layouts.cms-vertical-app')

@section('title', 'Page 2')

@section('css')
<link rel="stylesheet" href="{{ asset('/cms-assets/vendor/libs/select2/select2.css') }}" />
<link rel="stylesheet" href="{{ asset('/cms-assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}" />
<link rel="stylesheet" href="{{ asset('/cms-assets/vendor/libs/quill/typography.css') }}" />
<link rel="stylesheet" href="{{ asset('/cms-assets/vendor/libs/quill/editor.css') }}" />
<link rel="stylesheet" href="{{ asset('/cms-assets/vendor/libs/quill/katex.css') }}" />

@endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Masjid </span></h4>

    <div class="row">
        <!-- Autosize -->
        <div class="col-12">
            <div class="card mb-4">
                <h5 class="card-header"></h5>
                <div class="card-body">
                    <div class="mb-3">
                        <form action="{{ route('cms.masjids.store') }}" method="POST" class="needs-validation"
                            novalidate>
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Masjid</label> <span
                                    class="text-danger">*</span>
                                <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}"
                                    required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">Please enter your name.</div>
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label">Pilih Kecamatan</label> <span
                                    class="text-danger">*</span>
                                <select class="select2 form-select" data-style="btn-default" data-live-search="true"
                                    id="subdistrict_id" name="subdistrict_id" required>
                                    <option value=""> -- Pilih --</option>
                                    @foreach ($subdistricts as $item)
                                    <option value="{{ $item->id }}" {{ ( $item->id == 0) ? 'selected' :
                                        '' }}> {{ $item->name }} </option>
                                    @endforeach
                                </select>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">Please enter your kecamatan.</div>
                            </div>

                            <div class="float-end mt-3">
                                <a href="{{ route('cms.masjids') }}" class="btn btn-link">Batal</a>
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

@section('js')
<script src="{{ asset('/cms-assets/vendor/libs/select2/select2.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#subdistrict_id').select2();
        // $('#article_category_id').select2();

    });
</script>
@endsection
