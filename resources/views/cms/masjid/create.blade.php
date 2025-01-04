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
                            <div class="col-12">
                                <div class="mb-3">
                                <label for="nama" class="form-label">Nama Masjid</label> <span
                                    class="text-danger">*</span>
                                <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}"
                                    required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">Please enter your name.</div>
                            </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="vilage_id" class="form-label">Pilih Desa</label> <span class="text-danger">*</span>
                                    <select class="select2 form-select" data-style="btn-default" data-live-search="true"
                                    id="vilage_id" name="vilage_id" required>
                                    <option value=""> -- Pilih --</option>
                                    @foreach ($vilages as $item)
                                    <option value="{{ $item->id }}" {{ ($item->id == 0) ? 'selected' : '' }}> Desa {{ $item->name }} Kecamatan {{ $item->subdistrict->name }} </option>
                                    @endforeach
                                </select>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">Please enter your desa.</div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label> <span class="text-danger">*</span>
                                    <textarea class="form-control" id="alamat" name="alamat" required></textarea>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">Silakan masukkan alamat.</div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-3">
                                <label for="tahun_berdiri" class="form-label">Tahun Berdiri</label> <span class="text-danger">*</span>
                                <input type="number" class="form-control" id="tahun_berdiri" name="tahun_berdiri" required min="1900"
                                    max="{{ date('Y') }}">
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">Please enter Tahun berdiri.</div>
                                </div>
                            </div>

                           <div class="col-12">
                            <div class="mb-3">
                                <label for="status_tanah" class="form-label">Status Tanah Bangunan</label> <span class="text-danger">*</span>
                                <textarea class="form-control" id="status_tanah_bangunan" name="status_tanah_bangunan" rows="3" required></textarea>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">Please enter Status Tanah Bangunan.</div>
                            </div>
                           </div>

                            <div class="col-12">
                             <div class="mb-3">
                                <label for="luas_bangunan" class="form-label">Luas Bangunan</label> <span class="text-danger">*</span>
                                <input type="number" class="form-control" id="luas_bangunan" name="luas_bangunan" required min="1900">
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">Please enter the Luas Bangunan.</div>
                            </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="luas_tanah" class="form-label">Luas Tanah</label> <span class="text-danger">*</span>
                                    <input type="number" class="form-control" id="luas_tanah" name="luas_tanah" required min="1900">
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">Please enter the Luas Tanah.</div>
                                </div> 
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="imb" class="form-label">Izin Mendirikan Bangunan</label> <span class="text-danger">*</span>
                                    <div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="imb" name="imb" value="yes" required>
                                        <label class="form-check-label" for="imb_yes">
                                            Yes
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" id="imb_no" name="imb" value="no" required>
                                        <label class="form-check-label" for="imb_no">
                                            No
                                        </label>
                                        </div>
                                    </div>
                                        <div class="valid-feedback"></div>
                                        <div class="invalid-feedback">Please select Izin Mendirikan Bangunan.</div>
                                </div>
                            </div>
                            
                            <div class="col-12">
                            <div class="mb-3">
                                <label for="daya_tampung" class="form-label">Daya Tampung</label> <span class="text-danger">*</span>
                                <input type="number" class="form-control" id="daya_tampung" name="daya_tampung" required min="1900">
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">Please enter the Daya Tampung.</div>
                            </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="fasilitas" class="form-label">Fasilitas</label> <span class="text-danger">*</span>
                                    <textarea class="form-control" id="fasilitas" name="fasilitas" rows="3" required></textarea>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">Please enter fasilitas.</div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="kegiatan" class="form-label">Kegiatan</label> <span class="text-danger">*</span>
                                    <textarea class="form-control" id="kegiatan" name="kegiatan" rows="3" required></textarea>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">Please enter fasilitas.</div>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="nama_imam" class="form-label">Nama Imam</label> <span
                                    class="text-danger">*</span>
                                    <input type="text" class="form-control" id="nama_imam" name="nama_imam" value="{{ old('nama') }}"
                                    required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">Please enter your nama imam.</div>
                                </div>
                            </div>
                         
                            <div class="col-12">
                                <div class="mb-3">
                                <label for="nama_khatib" class="form-label">Nama Khatib</label> <span
                                    class="text-danger">*</span>
                                <input type="text" class="form-control" id="nama_khatib" name="nama_khatib" value="{{ old('nama') }}"
                                    required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">Please enter your nama khatib.</div>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="mb-3">
                                <label for="website_url" class="form-label">Website URL</label> <span class="text-danger">*</span>
                                <input type="url" class="form-control" id="website_url" name="website_url" value="{{ old('website_url') }}" required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">Please enter URL website.</div>
                            </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="map_url" class="form-label">Map URL</label> <span class="text-danger">*</span>
                                    <input type="url" class="form-control" id="map_url" name="map_url" value="{{ old('map_url') }}" required>
                                    <div class="valid-feedback"></div>
                                    <div class="invalid-feedback">Please enter URL map.</div>
                                </div>
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

@section('js')
<script src="{{ asset('/cms-assets/vendor/libs/select2/select2.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#vilage_id').select2();

        $('#vilage_id').change(function(){
            $('#vilage_id').prop('disabled',false);
            // const _body = {
            //     "_token": "{{ csrf_token() }}",
            //     subdistrict_id = $(this).val();
            // }
            var _url = "{{route('cms.vilages.select2.dropdown')}}";
            $('#vilage_id').select2({
                ajax: {
                    url: _url,
                    type: 'POST',
                    dataType: 'json',
                    // data: {
                    //     "_token": "{{ csrf_token() }}",
                    //     subdistrict_id = $(this).val();
                    // },
                    processResults: function (data) {
                    // Transforms the top-level key of the response object from 'items' to 'results'
                    return {
                        results: data
                    };
                    }
                }
            });
        });


    });
</script>
@endsection
