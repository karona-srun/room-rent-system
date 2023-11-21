@extends('layouts.master')

@section('title', __('app.invoice_table'))
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">

            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">ភ្ជាប់Telegram និងSystem</h5>
                <a href="{{ url('bot/getupdates')}}" class="btn btn-primary">{{ __('app.room')}}</a>
            </div>
            <form action="{{ url('connect-telegram') }}" method="post">
                @csrf
                <div class="card-body">
                    <p class="mb-2">សូមជ្រើសរើសឈ្មោះក្រុមនៅ Telegram និង System</p>
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="">ឈ្មោះនៅ Telegram</label>
                            <select name="telegram" class=" form-select">
                                @foreach (array_unique($data) as $i => $item)
                                    <option value="{{ $item->id }}" {{ $item->id == request()->telegram ? 'selected' : '' }}>{{ $item->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label for="">ឈ្មោះនៅ System</label>
                            <select name="customer" class=" form-select">
                                @foreach ($room as $j => $cus)
                                    <option value="{{ $cus->customer_id }}" {{ $cus->room->id == $telegram ? 'selected' : '' }}>{{ $cus->room->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3 mb-3">
                        <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary save"><i
                                class='bx bxs-save me-1'></i>{{__('app.btn_save')}}</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
