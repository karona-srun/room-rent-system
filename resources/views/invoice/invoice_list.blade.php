@extends('layouts.master')

@section('title', __('app.invoice_table'))
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="py-2 mb-3"><span class="text-muted fw-light">{{ __('app.invoice') }} /</span>
            {{ __('app.invoice_table') }}</h5>

        <div class="card">

            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">{{ __('app.invoice_table') }}</h5>

            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-3 mb-3">
                        <div class="row">
                            <div class="col-sm-12">
                                <label class="form-label">ពណ៍បញ្ជាក់ពីការបង់ប្រាក់៖</label><br>
                                <div class="btn-group">
                                    <button type="submit" class="btn rounded btn-info me-2">{{ __('app.paid') }}</button>
                                    <button type="submit" class="btn rounded btn-danger">{{ __('app.pay_now') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <form action="{{ url('/invoice-list') }}" method="get">
                            <div class="row">
                                <div class="col-sm-3">
                                    <label
                                        class="form-label">{{ __('app.btn_search') }}{{ __('app.invoice_table') }}</label>
                                    <input type="text" name="keyword" class="form-control"
                                        value="{{ Request::get('keyword') }}"
                                        placeholder="{{ __('app.label_required') }}{{ __('app.invoice_table') }}">
                                </div>
                                <div class="col-sm-3">
                                    <label
                                        class="form-label">{{ __('app.btn_search') }}{{ __('app.invoice_date') }}</label>
                                    <input type="date" name="start_date" class="form-control"
                                        value="{{ Request::get('start_date') != ''? Request::get('start_date'): Carbon\Carbon::parse(date('Y-m-d'))->startOfMonth()->format('Y-m-d') }}"
                                        placeholder="{{ __('app.label_required') }}{{ __('app.invoice_table') }}">
                                </div>
                                <div class="col-sm-3">
                                    <label class="form-label">{{ __('app.invoice_to_date') }}</label>
                                    <input type="date" name="end_date" class="form-control"
                                        value="{{ Request::get('end_date') != ''? Request::get('end_date'): Carbon\Carbon::parse(date('Y-m-d'))->endOfMonth()->subDays(5)->format('Y-m-d') }}"
                                        placeholder="{{ __('app.label_required') }}{{ __('app.invoice_table') }}">
                                </div>
                                <div class="col-sm-3">
                                    <label class="form-label">.</label>
                                    <button type="submit" class="btn btn-primary form-control"><i
                                            class='bx bx-search me-1'></i>{{ __('app.btn_search') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ url('/send-all') }}" method="post">
                    @csrf
                    <div class="dropdown">
                        <button type="submit" class="btn btn-primary btn-send">
                            <span class="tf-icons bx bx-send me-1"></span>{{ __('app.btn_send') }}
                        </button>
                    </div>
                    <div class="table-responsive mb-2">
                        <table class="table">
                            <thead>
                                <tr class="text-nowrap">
                                    <th><input type="checkbox" name="id" class="form-check-input me-2 checkAll"></th>
                                    <th>{{ __('app.room') }}</th>
                                    <th>{{ __('app.invoice_date') }}</th>
                                    <th></th>
                                    <th>{{ __('app.room_cost') }}($)</th>
                                    <th>{{ __('app.eletrotic_cost') }}(៛)</th>
                                    <th>{{ __('app.water_cost') }}(៛)</th>
                                    <th>{{ __('app.trash_cost') }}(៛)</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($invoices as $item)
                                    <tr class="text-nowrap">
                                        <th><input type="checkbox" name="checkOne[]" value="{{ $item->invoice_id }}"
                                                class="form-check-input me-2 checkOne"></th>
                                        <th><i class="bx bx-building-house"></i> {{ $item->room_number }}</th>
                                        <td>{{ KhmerDateTime\KhmerDateTime::parse($item->invoice_created_at)->format("LLLL") }}</td>
                                        <th>
                                            <form method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $item->invoice_id }}">
                                                <input type="hidden" name="status_name" value="room">
                                                <input type="hidden" name="status" value="{{ $item->room_cost_status }}">
                                                <button type="submit" class="btn"></button>
                                            </form>
                                        </th>
                                        @php
                                            $costStatus = [
                                                'room' => [$item->room_cost_status, $item->room_cost],
                                                'electric' => [$item->electric_cost_status, $item->electric_cost],
                                                'water' => [$item->water_cost_status, $item->water_cost],
                                                'trash' => [$item->electric_trash_cost_status, $item->electric_trash_cost],
                                            ];
                                        @endphp

                                        @foreach ($costStatus as $statusName => $statusData)
                                            <th>
                                                <form action="{{ url('status-invoice') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $item->invoice_id }}">
                                                    <input type="hidden" name="status_name" value="{{ $statusName }}">
                                                    <input type="hidden" name="status" value="{{ $statusData[0] }}">
                                                    <button type="submit"
                                                        class="btn {{ $statusData[0] ? 'btn-info' : 'btn-danger' }}">
                                                        <span class="me-2">{{ floatval($statusData[1]) }}</span>
                                                    </button>
                                                </form>
                                            </th>
                                        @endforeach
                                        <th>
                                            <div class="">
                                                <div class="btn-group">
                                                  <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    {{ __('app.label_menu')}}
                                                  </button>
                                                  <ul class="dropdown-menu" style="">
                                                    <li>
                                                        <a href="{{ url('my-invoice', $item->invoice_id) }}"
                                                            class="dropdown-item text-black"><i class='bx bx-images me-2'></i>ថតវិក័យប័ត្រ​</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('send-by-one', $item->invoice_id) }}"
                                                            class="dropdown-item btn-send"><i class='bx bx-send me-2'></i> {{__('app.send_message')}}</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('print-invoice', $item->invoice_id) }}"
                                                            class="dropdown-item text-black"><i class='bx bx-printer me-2'></i> {{__('app.btn_print')}}</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('invoice', $item->invoice_id) }}"
                                                            class="dropdown-item text-warning"><i class='bx bx-edit me-2'></i> កែសម្រួល</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('delete-invoice', $item->invoice_id) }}"
                                                            class="dropdown-item text-danger"><i class='bx bx-trash me-2'></i> លុប</a>
                                                    </li>
                                                  </ul>
                                                </div>
                                              </div>
                                        </th>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
            </div>
            </form>
        </div>

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

            // $(".checkAll").on("click", function() {
            //     var chk = $('.checkAll').is(':checked');
            //     console.log(chk);
            //     if (chk) {
            //         $(".checkOne").each(function() {
            //             $(this).attr("checked", true);
            //         });
            //     } else {
            //         $(".checkOne").each(function() {
            //             $(this).attr("checked", false);
            //         });
            //     }
            // });

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
