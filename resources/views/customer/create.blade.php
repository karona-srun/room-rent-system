@extends('layouts.master')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="py-2 mb-3"><span class="text-muted fw-light">{{ __('app.customer') }} /</span>
            {{ __('app.create_customer') }}</h5>

        <!-- Responsive Table -->
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">{{ __('app.create_customer') }}</h5>
                <div class="dropdown">
                    <a href="{{ route('customers.index') }}" class="btn btn-primary">
                        <span class="tf-icons bx bx-user me-1"></span>{{ __('app.customer') }}
                    </a>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('customers.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-fullname">{{ __('app.customer_name') }} <span
                                class=" text-danger">*</span></label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bx-user"></i></span>
                            <input type="text" class="form-control" name="name" id="basic-icon-default-fullname"
                                placeholder="{{ __('app.label_required') }}{{ __('app.customer_name') }}" required="">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-company">{{ __('app.phone') }} <span
                                class=" text-danger">*</span></label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"><i
                                    class="bx bx-phone bx-rotate-90"></i></span>
                            <input type="text" id="basic-icon-default-company" name="phone" class="form-control"
                                placeholder="{{ __('app.label_required') }}{{ __('app.phone') }}" required="">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-company">{{ __('app.status') }}</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"><i
                                    class='bx bx-check-square'></i></span>
                            <select class="form-select" name="status" id="bs-validation-country">
                                <option value="0" selected>{{ __('app.status_active') }}</option>
                                <option value="1">{{ __('app.status_in_active') }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-company">{{ __('app.address') }}</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"><i
                                    class="bx bx-buildings"></i></span>
                            <input type="text" id="basic-icon-default-company" name="address" class="form-control"
                                placeholder="{{ __('app.label_required') }}{{ __('app.address') }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="card">
                            <div class="card-header">
                                <p>{{ __('app.card_id') }}</p>
                            </div>
                            <div class="card-body">
                                <div class="row justify-content-center text-center">
                                    <div class="col-auto mb-3">
                                        <label class="form-label"
                                            for="basic-icon-default-company">{{ __('app.photo_front') }}</label>
                                        <div class="card mt-2">
                                            <img class="card-img-top card-id rounded card-photo-front imagePreviewFront"
                                                src="{{ asset('assets/img/card/front.png') }}" alt="Card image cap">
                                            <input type="file" accept="image/png, image/gif, image/jpeg, image/jpg"
                                                name="photo_front" id="photo_front" class="imageUploadFront"
                                                style="display: none">
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <label class="form-label"
                                            for="basic-icon-default-company">{{ __('app.photo_back') }}</label>
                                        <div class="card mt-2">
                                            <img class="card-img-top card-id rounded card-photo-back imagePreviewBack"
                                                src="{{ asset('assets/img/card/back.png') }}" alt="Card image cap">
                                            <input type="file" accept="image/png, image/gif, image/jpeg, image/jpg"
                                                name="photo_back" id="photo_back" class="imageUploadBack"
                                                style="display: none">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="row mb-3">
                            <label class="form-label" for="basic-icon-default-message">{{ __('app.description') }}</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-message2" class="input-group-text"><i
                                        class="bx bx-comment"></i></span>
                                <textarea id="basic-icon-default-message" name="description" class="form-control"
                                    placeholder="{{ __('app.label_required') }}{{ __('app.description') }}"></textarea>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="hidden" name="save_and_create_new" class="save_and_create_new" value="0">
                            <button type="submit" class="btn btn-primary me-2 create_new"><i
                                    class='bx bxs-user-check me-1'></i>{{ __('app.btn_save_and_create_new') }}</button>
                            <button type="submit" class="btn btn-primary save"><i
                                    class='bx bxs-user-check me-1'></i>{{ __('app.btn_save') }}</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $('.create_new').click(function() {
            $('.save_and_create_new').val(1);
        })
        $('.save').click(function() {
            $('.save_and_create_new').val(0);
        })
    </script>
    @if (Session::get('mode') == 'success')
        <script>
            $(document).ready(function() {
                $('#backDropModalSuccess').modal('show');
            });
        </script>
    @endif
@endsection
