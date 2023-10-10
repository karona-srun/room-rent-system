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
                            <tr class="text-nowrap">
                                <th><input type="checkbox" name="id" class="form-check-input" id=""></th>
                                <th>Room 1</th>
                                <th>សុផាត 01212345678</th>
                                <th><button type="submit" class="btn btn-danger">$75 {{__('app.pay_now')}}</button></th>
                                <th><button type="submit" class="btn btn-outline-info">៛14000 {{__('app.paid')}}</button></th>
                                <th></th>
                                <th>
                                    <button class="btn btn-primary"><i class='bx bx-printer me-1'></i>{{__('app.btn_print')}}</button>
                                    <button class="btn btn-primary"><i class='bx bx-send me-1' ></i>{{__('app.btn_send')}}</button>
                                </th>
                            </tr>
                            <tr class="text-nowrap">
                                <th><input type="checkbox" name="id" class="form-check-input" id=""></th>
                                <th>Room 2</th>
                                <th>សុផាត 01112345678</th>
                                <th><button type="submit" class="btn btn-outline-info">$55 {{__('app.paid')}}</button></th>
                                <th><button type="submit" class="btn btn-outline-info">៛10000 {{__('app.paid')}}</button></th>
                                <th></th>
                                <th>
                                    <button class="btn btn-primary"><i class='bx bx-printer me-1'></i>{{__('app.btn_print')}}</button>
                                    <button class="btn btn-primary"><i class='bx bx-send me-1' ></i>{{__('app.btn_send')}}</button>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection