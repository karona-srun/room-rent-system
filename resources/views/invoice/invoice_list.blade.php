@extends('layouts.master')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="py-2 mb-3"><span class="text-muted fw-light">{{ __('app.invoice') }} /</span>
            {{ __('app.invoice_table') }}</h5>

        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">{{ __('app.invoice_table') }}</h5>
                <div class="dropdown">
                    <a href="{{ url('/create-invoice-list') }}" class="btn btn-primary">
                        <span class="tf-icons bx bx-send me-1"></span>{{ __('app.btn_send_all') }}
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-3 mb-3">
                        <label class="form-label">ពណ៍បញ្ជាក់ពីការបង់ប្រាក់៖</label><br>
                        <div class="btn-group">
                            <button type="submit" class="btn rounded btn-info me-2">{{ __('app.paid') }}</button>
                            <button type="submit" class="btn rounded btn-danger">{{ __('app.pay_now') }}</button>
                        </div>
                    </div>
                    <div class="col-9">
                        <form action="{{ url('/invoice-list') }}" method="get" class="row">
                            <div class="col-sm-3">
                                <label class="form-label">{{ __('app.btn_search') }}{{ __('app.invoice_table') }}</label>
                                <input type="text" name="keyword" class="form-control"
                                    value="{{ Request::get('keyword') }}"
                                    placeholder="{{ __('app.label_required') }}{{ __('app.invoice_table') }}">
                            </div>
                            <div class="col-sm-3">
                                <label class="form-label">{{ __('app.btn_search') }}{{ __('app.invoice_date') }}</label>
                                <input type="date" name="start_date" class="form-control"
                                    value="{{ Request::get('start_date') != ''? Request::get('start_date'): Carbon\Carbon::parse(date('Y-m-d'))->startOfMonth()->format('Y-m-d') }}"
                                    placeholder="{{ __('app.label_required') }}{{ __('app.invoice_table') }}">
                            </div>
                            <div class="col-sm-3">
                                <label class="form-label">{{ __('app.invoice_to_date') }}</label>
                                <input type="date" name="end_date" class="form-control"
                                    value="{{ Request::get('end_date') != ''? Request::get('end_date'): Carbon\Carbon::parse(date('Y-m-d'))->endOfMonth()->format('Y-m-d') }}"
                                    placeholder="{{ __('app.label_required') }}{{ __('app.invoice_table') }}">
                            </div>
                            <div class="col-sm-3">
                                <label class="form-label">.</label>
                                <button type="submit" class="btn btn-primary form-control"><i
                                        class='bx bx-search me-1'></i>{{ __('app.btn_search') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive mb-2">
                    <table class="table">
                        <thead>
                            <tr class="text-nowrap">
                                <th><input type="checkbox" name="id" class="form-check-input me-2"></th>
                                <th>{{ __('app.room') }}</th>
                                <th>{{ __('app.invoice_date') }}</th>
                                <th>{{ __('app.room_cost') }}</th>
                                <th>{{ __('app.eletrotic_cost') }}</th>
                                <th>{{ __('app.water_cost') }}</th>
                                <th>{{ __('app.trash_cost') }}</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($invoices as $item)
                                <tr class="text-nowrap">
                                    <th><input type="checkbox" name="id" value="{{ $item->invoice_id }}"
                                            class="form-check-input me-2"></th>
                                    <th>{{ $item->room_name }}, {{ $item->room_number }}</th>
                                    <td>{{ strftime('%d %B %Y', strtotime($item->invoice_created_at)) }}</td>
                                    <th>
                                        <form action="{{ url('status-invoice') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $item->invoice_id }}">
                                            <input type="hidden" name="status_name" value="room">
                                            <input type="hidden" name="status" value="{{ $item->room_cost_status }}">
                                            <button type="submit"
                                                class="btn {{ $item->room_cost_status ? 'btn-info' : 'btn-danger' }}"><span
                                                    class="me-2">${{ $item->room_cost }}</span></button>
                                        </form>
                                    </th>
                                    <th>
                                        <form action="{{ url('status-invoice') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $item->invoice_id }}">
                                            <input type="hidden" name="status_name" value="electric">
                                            <input type="hidden" name="status" value="{{ $item->electric_cost_status }}">
                                            <button type="submit"
                                                class="btn {{ $item->electric_cost_status ? 'btn-info' : 'btn-danger' }}">${{ $item->electric_cost }}</button>
                                        </form>
                                    </th>
                                    <th>
                                        <form action="{{ url('status-invoice') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $item->invoice_id }}">
                                            <input type="hidden" name="status_name" value="water">
                                            <input type="hidden" name="status" value="{{ $item->water_cost_status }}">
                                            <button type="submit"
                                                class="btn {{ $item->water_cost_status ? 'btn-info' : 'btn-danger' }}">{{ $item->water_cost }}៛</button>
                                        </form>
                                    </th>
                                    <th>
                                        <form action="{{ url('status-invoice') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $item->invoice_id }}">
                                            <input type="hidden" name="status_name" value="trash">
                                            <input type="hidden" name="status"
                                                value="{{ $item->electric_trash_cost_status }}">
                                            <button type="submit"
                                                class="btn {{ $item->electric_trash_cost_status ? 'btn-info' : 'btn-danger' }}">{{ $item->electric_trash_cost }}៛</button>
                                        </form>
                                    </th>
                                    <th>
                                        <a href="{{ url('invoice', $item->invoice_id) }}"
                                            class="btn btn-icon btn-light"><i class='bx bx-edit text-warning'></i></a> |
                                        <a href="{{ url('delete-invoice', $item->invoice_id) }}"
                                            class="btn btn-icon btn-light"><i class='bx bx-trash text-danger'></i></a> |
                                        <a href="{{ url('print-invoice', $item->invoice_id) }}"
                                            class="btn btn-icon btn-light"><i class='bx bx-printer'></i></a> |
                                        <a href="{{ url('send-by-one', $item->invoice_id) }}"
                                            class="btn btn-icon btn-primary"><i class='bx bx-send'></i></a>
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <div class="px-4">
                        {{ $invoices->links('vendor.pagination.bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
