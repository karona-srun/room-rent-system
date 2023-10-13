@extends('layouts.master')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="py-2 mb-3"><span class="text-muted fw-light">{{ __('app.customer') }} /</span>
            {{ __('app.edit_customer') }}</h5>

        <!-- Responsive Table -->
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">{{ __('app.edit_customer') }}</h5>
                <div class="dropdown">
                    <a href="{{ route('customers.index') }}" class="btn btn-primary">
                        <span class="tf-icons bx bx-user me-1"></span>{{ __('app.customer') }}
                    </a>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('customers.update', $customer->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-fullname">{{ __('app.customer_name') }} <span
                                class=" text-danger">*</span></label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bx-user"></i></span>
                            <input type="text" class="form-control" name="name" id="basic-icon-default-fullname"
                                placeholder="{{ __('app.label_required') }}{{ __('app.customer_name') }}"
                                value="{{ $customer->name }}" required="" aria-label="John Doe"
                                aria-describedby="basic-icon-default-fullname2">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-company">{{ __('app.phone') }} <span
                                class=" text-danger">*</span></label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"><i
                                    class="bx bx-phone bx-rotate-90"></i></span>
                            <input type="text" id="basic-icon-default-company" value="{{ $customer->phone }}"
                                name="phone" class="form-control" placeholder="000 000 000" required="">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-company">{{ __('app.status') }}</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"><i
                                    class='bx bx-check-square'></i></span>
                            <select class="form-select" name="status" id="bs-validation-country">
                                <option value="0" {{ $customer->status == 0 ? 'selected' : '' }}>
                                    {{ __('app.status_active') }}</option>
                                <option value="1" {{ $customer->status == 1 ? 'selected' : '' }}>
                                    {{ __('app.status_in_active') }}</option>
                            </select>
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
                                                src="{{ $customer->photo_front ? asset($customer->photo_front) : asset('assets/img/card/front.png') }}"
                                                alt="Card image cap">
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
                                                src="{{ $customer->photo_back ? asset($customer->photo_back) : asset('assets/img/card/back.png') }}"
                                                alt="Card image cap">
                                            <input type="file" accept="image/png, image/gif, image/jpeg, image/jpg"
                                                name="photo_back" id="photo_back" class="imageUploadBack"
                                                style="display: none">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-company">{{ __('app.address') }}</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"><i
                                    class="bx bx-buildings"></i></span>
                            <input type="text" id="basic-icon-default-company" value="{{ $customer->address }}"
                                name="address" class="form-control"
                                placeholder="{{ __('app.label_required') }}{{ __('app.address') }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="form-label" for="basic-icon-default-message">{{ __('app.description') }}</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-message2" class="input-group-text"><i
                                    class="bx bx-comment"></i></span>
                            <textarea id="basic-icon-default-message" name="description" class="form-control"
                                placeholder="{{ __('app.label_required') }}{{ __('app.description') }}">{{ $customer->description }}</textarea>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary"><i
                                class='bx bxs-user-check me-1'></i>{{ __('app.btn_save') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
