@extends('layouts.master')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="py-2 mb-3"><span class="text-muted fw-light">{{ __('app.user') }} /</span>
            {{ __('app.user_table') }}</h5>

        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">{{ __('app.user_table') }}</h5>
                <div class="dropdown">
                    <a href="{{ url('/users/create') }}" class="btn btn-primary">
                        <span class="tf-icons bx bx-plus me-1"></span>{{ __('app.user') }}
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
                                <th>{{ __('app.photo')}}</th>
                                <th>{{__('app.name')}}</th>
                                <th>{{__('app.email')}}</th>
                                <th>{{__('app.phone')}}</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $index => $item)
                            <tr class="text-nowrap">
                                <td>{{ ++$index }}</td>
                                <td><img src="{{ $item->photo ? asset($item->photo) : asset('assets/img/avatars/user.png') }}" class="img-avatar img-thumbnail rounded" alt=""></td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->phone}}</td>
                                <td>
                                <td>
                                    <a href="{{ url('change-password', $item->id )}}" class="btn btn-icon btn-warning"><i class='bx bx-key'></i></a>
                                    <a href="{{ route('users.edit', $item->id)}}" class="btn btn-icon btn-primary"><i class='bx bx-pencil'></i></a>
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