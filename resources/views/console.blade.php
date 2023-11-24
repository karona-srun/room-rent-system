@extends('layouts.master')

@section('title', __('app.invoice_table'))
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">

            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">{{ __('app.getupdates') }} ចំនួនបន្ទប់៖ {{ $room->count() }}</h5>
                
            </div>
            
            <div class="card-body">
                <div class="row">
                    <p class="mb-2"><i class='bx bx-chevron-right'></i> {{__('app.getupdates_info')}}</p>
                    @foreach ($room as $index => $item)
                    <div class="col-auto mb-3">
                        <div class="card shadow border-gray">
                            <div class="card-body">
                                <h5 class="card-title text-center"><i class='bx bxs-building-house'></i> {{ $item->room->name }}
                                    <i class='bx bx-sort-alt-2 bx-rotate-90' ></i> <i class='bx bxl-telegram' ></i> {{ $item->room->name }}
                                </h5>
                               
                                <a href="{{ url('/connect-telegram/'.$item->room->id) }}" class="card-text btn btn-sm {{ $item->customer->telegram_id ? 'btn-outline-primary' : 'btn-outline-danger' }}">
                                    @if ($item->customer->telegram_id)
                                    <i class='bx bx-link me-2'></i>
                                    {{__('app.label_connected')}}
                                    @else
                                    <i class='bx bx-unlink me-2'></i>
                                    {{__('app.label_no_connecting')}}
                                    @endif
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                {{-- <div class="row">
                    @foreach (array_unique($listGroup) as $i => $item)
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
                </div> --}}
            </div>
        </div>
    </div>
@endsection
