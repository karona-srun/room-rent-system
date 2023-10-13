@extends('layouts.master')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="py-2 mb-3"><span class="text-muted fw-light">{{__('app.user')}} /</span> {{__('app.edit_user')}}</h5>

        <!-- Responsive Table -->
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">{{__('app.change_password')}}</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ url('change-password') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12 mb-3 justify-content-center items-center align-content-center">
                            <div class="row">
                                <input type="hidden" name="id" value="{{$user->id}}">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-icon-default-fullname">{{__('app.new_password')}} <span
                                                class=" text-danger">*</span></label>
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                    class="bx bx-key"></i></span>
                                            <input type="password" class="form-control" name="password" id="basic-icon-default-fullname"
                                                placeholder="{{__('app.label_required')}}{{__('app.new_password')}}" required="" value="{{ old('password') }}">
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
                                                    class="bx bx-key"></i></span>
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
