<!DOCTYPE html>
<html lang="km">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ __('app.app_name') }} | បោះពុម្ភវិក្កយប័ត្រ</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('assets/js/config.js') }}"></script>
    <style>
        @media print {
            @page {
                size: A5 landscape;
                margin: 0;
            }

            .form-control,
            .form-select,
            .input-group-text {
                border-radius: 0px !important;
                border: 1px solid transparent !important;
                border-bottom: 1px dotted #000 !important;
                width: auto !important;
            }

        }

        .form-control,
        .form-select,
        .input-group-text {
            border-radius: 0px !important;
            border: 1px solid transparent !important;
            border-bottom: 1px dotted #000 !important;
            width: auto !important;
        }

        .form-select select::before,
        .form-select select::after {
            content: "" !important;
            position: absolute !important;
            pointer-events: none !important;
        }
    </style>
</head>

<body load="print" class="bg-light print-invoice p-4">
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                        <h3>{{ __('app.invoice') }}</h3>
                    </div>
                    <div class="col-sm-9">
                        <div class="row mb-5">
                            @php
                                $parts = explode('/', $invoicePaid->invoice_date);
                            @endphp
                            <div class="col-sm-12 text-end">
                                <label class="col-form-label">{{ __('app.label_day') }} {{ $parts[0] }}
                                    {{ __('app.label_month') }} {{ $parts[1] }} {{ __('app.label_year') }}
                                    {{ $parts[2] }}</label>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="row mb-3">
                            <label class="col-sm-4 form-label"
                                for="basic-icon-default">{{ __('app.room_number') }} </label>
                            <div class="col-sm-8">
                                <input type="number" pattern="[0-9]*" value="{{ $room->room_number }}"
                                class="form-control cost" name="room_id" placeholder="00">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label"
                                for="basic-default-name">{{ __('app.cost') }}</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-dollar"></i></span>
                                    <input type="number" pattern="[0-9]*" value="{{ $invoicePaid->room_cost }}"
                                        class="form-control cost" name="cost" placeholder="00">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">{{ __('app.eletrotic_cost') }}</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i class="bx bx-dollar"></i></span>
                            <input type="number" class="form-control eletrotic_cost" step="any"
                                value="{{ $invoicePaid->electric_cost }}" name="electric_cost" placeholder="00"
                                required>
                        </div>
                    </div>
                </div>

                <div class="row mb-3 div-water_paid">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="row">
                                    <label class="col-sm-6 col-form-label">{{ __('app.water_cost') }}
                                        {{ __('app.label_old_number') }}</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="water_old" class="form-control water_old"
                                            placeholder="0" value="{{ $invoicePaid->water_old }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="row">
                                    <label
                                        class="col-sm-4 col-form-label text-end">{{ __('app.label_new_number') }}</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="water_new" class="form-control water_new"
                                            placeholder="0" value="{{ $invoicePaid->water_new }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="row align-items-end">
                                    <div class="col-sm-12">
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text">៛</span>
                                            <input type="text" name="water_cost"
                                                value="{{ $invoicePaid->water_cost }}" class="form-control water_cost"
                                                placeholder="0" value="0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">{{ __('app.label_eletrotic_cost_with_trash') }}</label>
                    <div class="col-sm-10">
                        <input type="number" name="trash_cost" class="form-control trash_cost"
                            value="{{ $invoicePaid->electric_trash_cost }}">
                    </div>
                </div>

                <div class="row mb-3 justify-content-end">
                    <label class="col-sm-2 col-form-label text-end">{{ __('app.label_total_amount') }}</label>
                    <div class="col-sm-4">
                        <div class="input-group input-group-merge">
                            <input type="text" name="total_amount" class="form-control total_amount"
                                aria-label="Amount (to the nearest dollar)" readonly placeholder="0"
                                value="{{ $invoicePaid->total_amount }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <h6>{{ __('app.label_invoice_info') }}</h6>
                        <h6>{{ __('app.label_invoice_info_2') }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>
    <script type="text/javascript">
        window.print();
        window.onafterprint = back;

        function back() {
            window.history.back();
        }
    </script>
</body>

</html>
