@extends('layouts.master')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="py-2 mb-3"><span class="text-muted fw-light">{{__('app.room_rent')}} /</span> {{__('app.create_room_rent')}}</h5>

        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">{{__('app.create_room_rent')}}</h5>
                <div class="dropdown">
                    <a href="{{ route('room-rents.index') }}" class="btn btn-primary">
                        <span class="tf-icons bx bx-bookmark me-1"></span>{{__('app.room_rent')}}
                    </a>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('room-rents.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-fullname">{{__('app.room_table')}} <span
                                class=" text-danger">*</span></label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bx-user"></i></span>
                            <select class="form-select" name="room_id" id="bs-validation-country" required>
                                <option value="" selected>{{__('app.room_table')}}</option>
                                @foreach ($rooms->where('status', 0) as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }} | {{ $item->room_number }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-fullname">{{__('app.customer_table')}} <span
                                class=" text-danger">*</span></label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bx-building-house"></i></span>
                            <select class="form-select" name="customer_id" required>
                                <option value="" selected>{{__('app.customer_table')}}</option>
                                @foreach ($customers as $cus)
                                    <option value="{{ $cus->id }}">{{ $cus->name }} | {{ $cus->phone }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-company">{{__('app.status')}}</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"><i
                                    class='bx bx-check-square'></i></span>
                            <select class="form-select" name="status" id="bs-validation-country">
                                <option value="0" selected>{{__('app.status_room_start')}}</option>
                                <option value="1">{{__('app.status_room_stop')}}</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="form-label" for="basic-icon-default-message">{{__('app.description')}}</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-message2" class="input-group-text"><i
                                    class="bx bx-comment"></i></span>
                            <textarea id="basic-icon-default-message" name="description" class="form-control" placeholder="{{__('app.label_required')}}{{__('app.description')}}"></textarea>
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
