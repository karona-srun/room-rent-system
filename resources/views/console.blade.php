@extends('layouts.master')

@section('title', __('app.invoice_table'))
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">

            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">{{ __('app.getupdates') }}</h5>

            </div>
            <div class="card-body">
                <div class="row">
                    @foreach (array_unique($data) as $i => $item)
                        <div class="col-auto mb-3">
                            <div class="card shadow border-gray">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->title }}
                                    </h5>
                                    <p class="card-text">
                                        <i class=" bx bx-key"></i> {{ $item->id }}
                                    </p>
                                    <a href="{{ url('/connect-telegram/'.$item->id) }}" class="card-text btn btn-sm btn-outline-primary">{{ in_array($item->id, $customers) ? __('app.label_connected') : __('app.label_no_connecting') }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
