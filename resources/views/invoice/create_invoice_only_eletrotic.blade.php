@extends('layouts.master')

@section('css')
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="py-2 mb-3"><span class="text-muted fw-light">{{ __('app.invoice') }} /</span>
            {{ __('app.create_invoice') }}</h5>

        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2"></h5>
                <div class="dropdown">
                    <a href="{{ url('invoice-list') }}" class="btn btn-primary">
                        <span class="tf-icons bx bx-bookmark me-1"></span>{{ __('app.invoice_table') }}
                    </a>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('room-rents.store') }}">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h3>{{ __('app.invoice') }}</h3>
                        </div>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-3">
                                    <div class="row">
                                            <label class="col-sm-4 col-form-label">{{ __('app.label_day') }}</label>
                                            <div class="col-sm-8">
                                                <input type="text" maxlength="64" id="effective-date" name="day" class="form-control" id="" value="{{ now()->format('d') }}">
                                            </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="row">
                                        <label class="col-sm-4 col-form-label">{{ __('app.label_month') }}</label>
                                        <div class="col-sm-8">
                                            <input type="text" maxlength="64" id="effective-date" name="month" class="form-control" id="" value="{{ now()->format('m') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="row align-items-end">
                                        <label class="col-sm-4 col-form-label">{{ __('app.label_year') }}</label>
                                        <div class="col-sm-8">
                                            <input type="text" maxlength="64" id="effective-date" name="year" class="form-control" id="" value="{{ now()->format('Y') }}">
                                        </div>
                                    </div>
                                </div>
                              </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="row mb-3">
                                <label class="col-sm-4 form-label"
                                    for="basic-icon-default-fullname">{{ __('app.room_number') }} </label>
                                <div class="col-sm-8">
                                    <select class="form-select" name="room_id" id="bs-validation-country" required>
                                        <option value="" selected>{{ __('app.room_table') }}</option>
                                        @foreach ($rooms->where('status', 0) as $item)
                                            <option value="{{ $item->id }}">{{ $item->room_number }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"
                                    for="basic-default-name">{{ __('app.cost') }}</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i class="bx bx-dollar"></i></span>
                                        <input type="text" class="form-control" name="cost" placeholder="00">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">{{ __('app.eletrotic_cost') }}</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class="bx bx-dollar"></i></span>
                                <input type="text" class="form-control" name="eletrotic_cost" placeholder="00">
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="row">
                                            <label class="col-sm-6 col-form-label">{{ __('app.water_cost') }} {{__('app.label_old_number')}}</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="water_old" class="form-control">
                                            </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="row">
                                        <label class="col-sm-4 col-form-label text-end">{{__('app.label_new_number')}}</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="water_new" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="row align-items-end">
                                        <div class="col-sm-12">
                                            <input type="text" name="water_cost" placeholder="00" class="form-control">
                                        </div>
                                    </div>
                                </div>
                              </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">{{ __('app.label_eletrotic_cost_with_trash') }}</label>
                        <div class="col-sm-10">
                            <input type="number" name="trash_cost" class="form-control" placeholder="00">
                        </div>
                    </div>

                    <div class="row mb-3 justify-content-end">
                        <label class="col-sm-2 col-form-label text-end">{{ __('app.label_total_amount') }}</label>
                        <div class="col-sm-4">
                            <input type="number" name="eletrotic_cost" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <h6>{{__('app.label_invoice_info')}}</h6>
                            <h6>{{__('app.label_invoice_info_2')}}</h6>
                        </div>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary save"><i
                                class='bx bxs-save me-1'></i>{{ __('app.btn_save') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
<script>
    $(document).ready(function() {
        
    });
    </script>
@endsection
