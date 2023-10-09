@extends('layouts.master')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="py-2 mb-3"><span class="text-muted fw-light">{{__('app.room')}} /</span> {{__('app.create_room')}}</h5>

        <!-- Responsive Table -->
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">{{__('app.create_room')}}</h5>
                <div class="dropdown">
                    <a href="{{ route('rooms.index') }}" class="btn btn-primary">
                        <span class="tf-icons bx bx-buildings me-1"></span>{{__('app.room')}}
                    </a>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('rooms.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-fullname">{{__('app.room')}} <span
                                class=" text-danger">*</span></label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bx-user"></i></span>
                            <input type="text" class="form-control" name="name" id="basic-icon-default-fullname"
                                placeholder="{{__('app.label_required')}}{{__('app.room')}}" required="">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-fullname">{{__('app.room_number')}} <span
                                class=" text-danger">*</span></label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bx-user"></i></span>
                            <input type="text" class="form-control" name="room_number" id="basic-icon-default-fullname"
                                placeholder="{{__('app.label_required')}}{{__('app.room_number')}}" required="">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"> {{__('app.cost')}} <span
                                class=" text-danger">*</span></label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i
                                    class="bx bx-user"></i></span>
                            <input type="text" class="form-control" name="cost"
                                placeholder="{{__('app.label_required')}}{{__('app.cost')}}" required="">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-company">{{__('app.status')}}</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"><i
                                    class='bx bx-check-square'></i></span>
                            <select class="form-select" name="status" id="bs-validation-country">
                                <option value="0" selected>{{__('app.status_active')}}</option>
                                <option value="1">{{__('app.status_in_active')}}</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="form-label" for="basic-icon-default-message">{{__('app.description')}}</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-message2" class="input-group-text"><i
                                    class="bx bx-comment"></i></span>
                            <textarea id="basic-icon-default-message" name="description" class="form-control"
                                placeholder="{{__('app.label_required')}}{{__('app.description')}}"></textarea>
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="hidden" name="save_and_create_new" class="save_and_create_new" value="0">
                        <button type="submit" class="btn btn-primary me-2 create_new"><i
                                class='bx bxs-save me-1'></i>{{__('app.btn_save_and_create_new')}}</button>
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
