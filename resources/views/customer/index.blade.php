@extends('layouts.master')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="py-2 mb-3"><span class="text-muted fw-light">{{__('app.customer')}} /</span> {{__('app.customer_table')}}</h5>

        <!-- Responsive Table -->
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">{{__('app.customer_table')}}</h5>
                <div class="dropdown">
                    <a href="{{ route('customers.create') }}" class="btn btn-primary">
                        <span class="tf-icons bx bx-user-plus me-1"></span>{{__('app.new_customer')}}
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12 col-lg-12 mb-5">
                        <div class="border border-gray rounded p-3">
                            <div class="mb-3">
                            <form action="{{ url('/customers') }}" method="get"
                                class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework">
                                <div class="col-sm-4">
                                    <label class="form-label">{{__('app.btn_search')}}{{ __('app.customer_table') }}</label>
                                    <input type="text" name="keyword" class="form-control" value="{{ Request::get('keyword') }}"
                                        placeholder="{{ __('app.label_required') }}{{ __('app.label_enter_room_name') }}">
                                </div>
                                <div class="col-sm-3 btn-search">
                                <button type="submit" class="btn btn-primary"><i
                                        class='bx bx-search me-1'></i>{{ __('app.btn_search') }}</button>

                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive px-4 mb-2">
                    <table class="table">
                        <thead>
                            <tr class="text-nowrap">
                                <th>#</th>
                                <th>{{__('app.customer_name')}}</th>
                                <th>{{__('app.phone')}}</th>
                                <th>{{__('app.address')}}</th>
                                <th>{{__('app.description')}}</th>
                                <th>{{__('app.status')}}</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $index => $item)
                                <tr>
                                    <th scope="row">{{ ++$index }}</th>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>
                                    @if ($item->status == 0 )
                                        <span class='badge bg-primary'>{{__('app.status_active')}}</span>
                                    @else
                                        <span class='badge bg-danger'>{{__('app.status_in_active')}}</span>
                                    @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('customers.edit', $item->id) }}" class="btn btn-icon btn-warning">
                                            <i class='tf-icons bx bxs-user-detail'></i>
                                        </a>
                                        <a href="{{ url('customers-destroy', $item->id) }}" class="btn btn-icon btn-danger">
                                            <i class='tf-icons bx bx-user-minus'></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
            <div class="card-footer">
                <div class="px-4">
                {{ $customers->links('vendor.pagination.bootstrap-5') }}
            </div>
            </div>
        </div>
        <!--/ Responsive Table -->
    </div>
@endsection
