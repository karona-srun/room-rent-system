@extends('layouts.master')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="py-2 mb-3"><span class="text-muted fw-light">{{__('app.user')}} /</span> {{__('app.create_user')}}</h5>

        <!-- Responsive Table -->
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">{{__('app.create_user')}}</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-4 mb-3 justify-content-center items-center align-content-center">
                            <div class="col-sm-2 justify-content-center items-center align-content-center">
                                <label class="form-label"
                                    for="basic-icon-default-company">{{ __('app.photo') }}</label>
                                <div class="card mt-2">
                                    <img class="card-img-top rounded card-photo-back imagePreviewBack"
                                        src="{{ asset('assets/img/avatars/user.png') }}" alt="Card image cap" style="height: 150px; width: 150px;">
                                    <input type="file" accept="image/png, image/gif, image/jpeg, image/jpg"
                                        name="photo" id="photo_back" class="imageUploadBack"
                                        style="display: none">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-icon-default-fullname">{{__('app.name')}} <span
                                                class=" text-danger">*</span></label>
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                    class="bx bx-user"></i></span>
                                            <input type="text" class="form-control" name="name" id="basic-icon-default-fullname"
                                                placeholder="{{__('app.label_required')}}{{__('app.name')}}" required="" value="{{ old('name') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-icon-default-fullname">{{__('app.email')}} <span
                                                class=" text-danger">*</span></label>
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                    class="bx bx-user"></i></span>
                                            <input type="email" class="form-control" name="email" id="basic-icon-default-fullname"
                                                placeholder="{{__('app.label_required')}}{{__('app.email')}}" required="" value="{{ old('email') }}">
                                        </div>
                                        @error('email')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-icon-default-fullname">{{__('app.phone')}} <span
                                                class=" text-danger">*</span></label>
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                    class="bx bx-user"></i></span>
                                            <input type="text" class="form-control" name="phone" id="basic-icon-default-fullname"
                                                placeholder="{{__('app.label_required')}}{{__('app.phone')}}" required="" value="{{ old('phone') }}">
                                        </div>
                                        @error('phone')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-icon-default-fullname">{{__('app.password')}} <span
                                                class=" text-danger">*</span></label>
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                    class="bx bx-user"></i></span>
                                            <input type="password" class="form-control" name="password" id="basic-icon-default-fullname"
                                                placeholder="{{__('app.label_required')}}{{__('app.password')}}" required="" value="{{ old('password') }}">
                                        </div>
                                        
                                        @error('password')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-icon-default-fullname">{{__('app.confirm_password')}} <span
                                                class=" text-danger">*</span></label>
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                    class="bx bx-user"></i></span>
                                            <input type="password" class="form-control" id="basic-icon-default-fullname"
                                                placeholder="{{__('app.label_required')}}{{__('app.confirm_password')}}" name="password_confirmation" required autocomplete="new-password" value="{{ old('password_confirmation') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>

                    
                    
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary save"><i
                                class='bx bxs-save me-1'></i>{{__('app.btn_save')}}</button>
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
