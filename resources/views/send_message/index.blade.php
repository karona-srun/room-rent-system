@extends('layouts.master')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="py-2 mb-3"><span class="text-muted fw-light">{{__('app.message')}} /</span> {{__('app.message_table')}}</h5>

        <!-- Responsive Table -->
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">{{__('app.message_table')}}</h5>
                <div class="dropdown">
                    <a href="{{ url('create-message') }}" class="btn btn-primary">
                        <span class="tf-icons bx bx-plus me-1"></span>{{__('app.send_message')}}
                    </a>
                </div>
            </div>
            <div class="card-body">
                
                <div class="row">
                    <div class="col-sm-12 col-lg-12 mb-5">
                        <div class="border border-gray rounded p-3">
                            <div class="mb-3">
                            <form action="{{ url('/send-message') }}" method="get"
                                class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework">
                                <div class="col-sm-4">
                                    <label class="form-label">{{ __('app.btn_search') }}{{__('app.send_message')}}</label>
                                    <input type="text" name="keyword" class="form-control" value="{{ Request::get('keyword') }}"
                                        placeholder="{{ __('app.label_required') }}{{ __('app.send_message') }}">
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
                <form action="{{ url('/send-message-all') }}" method="post">
                    @csrf
                    <div class="dropdown">
                        <button type="submit" class="btn btn-primary btn-send">
                            <span class="tf-icons bx bx-send me-1"></span>{{ __('app.btn_send') }}
                        </button>
                    </div>
                <div class="table-responsive px-4 mb-2">
                    <table class="table">
                        <thead>
                            <tr class="text-nowrap">
                                <th><input type="checkbox" name="id" class="form-check-input me-2 checkAll"></th>
                                <th>#</th>
                                <th>{{__('app.to')}}{{__('app.room')}}</th>
                                <th>{{__('app.send_message')}}</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sendMessage as $index => $item)
                                <tr>
                                    <th><input type="checkbox" name="checkOne[]" value="{{ $item->id }}"
                                        class="form-check-input me-2 checkOne"></th>
                                    <td scope="row">{{ ++$index }}</td>
                                    <td>{{ $item->room->room_number }}</td>
                                    <td>{{ $item->msg }}</td>
                                    <td>
                                        <a href="{{ url('send-message', $item->id) }}"
                                            class="btn btn-icon btn-light"><i class='bx bx-edit text-warning'></i></a>
                                        |
                                        <a href="{{ url('delete-message', $item->id) }}"
                                            class="btn btn-icon btn-light"><i class='bx bx-trash text-danger'></i></a>
                                        |
                                        <a href="{{ url('send-message-by-one', $item->id) }}"
                                            class="btn btn-icon btn-primary btn-send"><i class='bx bx-send'></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </form>
                </div>
            </div>
            <div class="card-footer">
                <div class="px-4">
                {{ $sendMessage->links('vendor.pagination.bootstrap-5') }}
            </div>
            </div>
        </div>
        <!--/ Responsive Table -->
    </div>

    <div class="modal" id="backDropModalLoader" data-bs-backdrop="static" tabindex="-1" aria-modal="true"
        role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="backDropModalTitle">{{ __('app.message') }}</h5>
                </div>
                <div class="modal-body">
                    <div class="row justify-center items-center text-center align-content-center">
                        <div class="col-sm-12 mb-1">
                            <img src="{{ asset('images/loader/loading_loader.gif') }}" alt="" class="rounded"
                                style="width: 5rem;">
                            <h5 class="mt-2">{{ __('app.label_loading') }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('.btn-send').click(function() {
                $('#backDropModalLoader').modal('show');
            })

            $('.checkAll').click(function() {
                if ($(this).prop('checked')) {
                    $('.checkOne').prop('checked', true);
                } else {
                    $('.checkOne').prop('checked', false);
                }
            });
        });
    </script>
@endsection
