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
                <div class="table-responsive px-4 mb-2">
                    <table class="table">
                        <thead>
                            <tr class="text-nowrap">
                                <th>
                                    #
                                </th>
                                <th>{{__('app.room')}}</th>
                                <th>{{__('app.customer')}}</th>
                                <th>{{__('app.eletrotic_cost')}}</th>
                                <th>{{__('app.water_cost')}}</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $item)
                            <tr class="text-nowrap">
                                <td><input type="checkbox" name="id" class="form-check-input" id=""></td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td>$75</td>
                                <td>៛14000</td>
                                <td><button type="submit" class="btn btn-info">{{__('app.pay_now')}}</button></td>
                                <td>
                                <td>
                                    <button class="btn btn-primary"><i class='bx bx-printer me-1'></i>{{__('app.btn_print')}}</button>
                                    <button class="btn btn-primary"><i class='bx bx-send me-1' ></i>{{__('app.btn_send')}}</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection