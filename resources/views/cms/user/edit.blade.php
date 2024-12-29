@extends('layouts.cms-vertical-app')

@section('title', 'Page 2')

@section('css')

@endsection


@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">User </span> </h4>

    <div class="row">
        <!-- Autosize -->
        <div class="col-12">
            <div class="card mb-4">
                <h5 class="card-header"></h5>
                <div class="card-body">
                    <div class="mb-3">
                        <form action="{{ route('cms.users.update', $user->id) }}" method="POST"
                            class="needs-validation" novalidate>
                            @csrf

                            @method('PUT')

                            <input type="hidden" name="id" value="{{ $user->id }}">

                            <div class="mb-3">
                                <label for="name" class="form-label">Nama User</label> <span class="text-danger">*</span>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ $user->name }}" required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">Please enter your name.</div>
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label">Email User</label> <span class="text-danger">*</span>
                                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}"
                                    required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">Please enter your email.</div>
                            </div>

                            <div class="mb-3">
                                <button id="resetPassword" type="button" class="btn btn-link">Reset Password</button>
                            </div>
                            <div class="mb-3" style="display: none;" id="divPassword">
                                <label for="type" class="form-label">New Password</label>
                                <input type="password" class="form-control hidden" id="password" name="password"
                                    value="">
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label">Pilih Role</label> <span
                                    class="text-danger">*</span>
                                <select class="form-select" id="role_id" name="role_id">
                                    @foreach ($roles as $item)
                                    <option value="{{ $item->id }}" {{ ( $item->id == $user->role_id) ? 'selected' :
                                        '' }}> {{ $item->name }} </option>
                                    @endforeach
                                </select>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">Please enter your role.</div>
                            </div>


                            <div class="float-end mt-3">
                                <a href="{{ route('cms.users') }}" class="btn btn-link">Batal</a>
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

    {{-- <script src="{{ asset('/cms-assets/vendor/libs/select2/select2.js') }}"></script> --}}
    <script src="{{ asset('/cms-assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
    <script>
        $(function() {

            // $('.select2').select2();

            $('#resetPassword').click(function() {
                $('#divPassword').toggle();
                $(this).text(function(i, text) {
                    return text === "Reset Password" ? "Cancel Reset" : "Reset Password";
                })

            });
        });
    </script>
@endsection
