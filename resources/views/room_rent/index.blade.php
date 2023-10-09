@extends('layouts.master')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="py-2 mb-3"><span class="text-muted fw-light">{{ __('app.room_rent') }} /</span>
            {{ __('app.room_rent_table') }}</h5>

        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">{{ __('app.room_rent_table') }}</h5>
                <div class="dropdown">
                    <a href="{{ route('room-rents.create') }}" class="btn btn-primary">
                        <span class="tf-icons bx bx-plus me-1"></span>{{ __('app.room_rent') }}
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12 col-lg-12 mb-5">
                        <div class="card p-3 shadow bg-transparent">
                            <div class="mb-3">
                            <form action="{{ url('/room-rents') }}" method="get"
                                class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework">
                                <div class="col-sm-3">
                                    <label class="form-label">{{ __('app.label_enter_type_paid') }}</label>
                                    <select class="form-select" name="type_id" required>
                                        <option value="" selected>{{ __('app.label_enter_type_paid') }}</option>
                                        <option value="">{{ __('app.eletrotic_cost') }}</option>
                                        <option value="">{{ __('app.water_cost') }}</option>
                                        <option value="">{{ __('app.trash_cost') }}</option>
                                        <option value="">{{ __('app.parking_cost') }}</option>
                                        <option value="">{{ __('app.wifi_cost') }}</option>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <label class="form-label">{{ __('app.label_enter_room_name') }}</label>
                                    <input type="text" name="q" class="form-control"
                                        placeholder="{{ __('app.label_required') }}{{ __('app.label_enter_room_name') }}">
                                </div>
                                <div class="col-sm-3 btn-search">
                                <button type="submit" class="btn btn-primary"><i
                                        class='bx bx-search me-1'></i>{{ __('app.btn_search') }}</button>

                                </div>
                            </form>
                        </div>
                        <div>
                            <p> បញ្ជាក់៖ 
                            <span class="mx-2 p-1 rounded border border-primary">{{__('app.status_room_start')}}</span> 
                            <span class="p-1 rounded border border-danger">{{__('app.status_room_stop')}}</span>
                        </p>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($roomRent as $item)
                        <div class="col-sm-6 col-lg-4 mb-4">
                            <div class="card p-3 shadow bg-transparent {{ $item->status == 0 ? 'border border-primary' : 'border border-danger'}} ">
                                <div class="card-header d-flex justify-content-between" style="padding: 0px !important;">
                                    <div class="card-title m-0 me-2 mb-2">
                                        <p style="font-size: 1.1rem;">{{ __('app.room') }}: {{ $item->room->name }} {{ __('app.room_number') }}:
                                            {{ $item->room->room_number }}<br>{{ __('app.customer') }}: {{ $item->customer->name }} {{ __('app.phone') }}:
                                            {{ $item->customer->phone }}</p>
                                    </div>
                                    <div class="dropdown">
                                        <a href="{{ route('room-rents.edit', $item->id) }}" class="btn btn-icon btn-outline-warning">
                                            <span class="tf-icons bx bx-edit"></span>
                                        </a>
                                        <a href="{{ route('room-rents.edit', $item->id) }}" class="btn btn-icon btn-outline-danger">
                                            <span class="tf-icons bx bx-trash"></span>
                                        </a>
                                    </div>
                                </div>
                                        
                                <figure class="">
                                    <p class=" text-primary"><i class='bx bx-plug me-1'></i>{{ __('app.eletrotic_cost') }}
                                        <span class="mx-3 badge bg-label-primary">{{ __('app.paid') }}</span></p>
                                    <p class=" text-primary"><i class='bx bx-water me-1'></i>{{ __('app.water_cost') }}
                                        <span class="mx-3 badge bg-label-primary">{{ __('app.paid') }}</span></p>
                                    <p class=" text-primary"><i
                                            class='bx bx-trash-alt me-1'></i>​{{ __('app.trash_cost') }} <span
                                            class="mx-3 badge bg-label-primary">{{ __('app.paid') }}</span></p>
                                    <p class=" text-primary"><i
                                            class='bx bxs-parking me-1'></i>{{ __('app.parking_cost') }} <span
                                            class="mx-3 badge bg-label-danger">{{ __('app.pay_now') }}</span></p>
                                    <p class=" text-primary"><i class='bx bx-wifi me-1'></i>{{ __('app.wifi_cost') }}
                                        <span class="mx-3 badge bg-label-primary">{{ __('app.paid') }}</span></p>
                                </figure>
                                <small>{{ $item->description }}</small>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
