@extends('layouts.master')

@section('title', __('app.invoice_table'))
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">

            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">{{ __('app.getupdates') }}</h5>

            </div>
            <div class="card-body">
                @foreach($data as $i => $item)
                    {{ $item->my_chat_member }}<br>
                @endforeach
            </div>
        </div>
    </div>
@endsection
