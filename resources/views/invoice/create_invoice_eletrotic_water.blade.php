@extends('layouts.master')
@section('title', __('app.create_invoice'))
@section('css')
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="py-2 mb-3"><span class="text-muted fw-light">{{ __('app.invoice') }} /</span>
            {{ __('app.create_invoice') }}</h5>

        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input check-option-water-paid" type="checkbox" id="flexSwitchCheckChecked"
                            checked>
                        <label class="form-check-label"
                            for="flexSwitchCheckChecked">{{ __('app.invoice_with_water') }}</label>
                    </div>
                </h5>
                <div class="dropdown">
                    <a href="{{ url('invoice-list') }}" class="btn btn-primary">
                        <span class="tf-icons bx bx-bookmark me-1"></span>{{ __('app.invoice_table') }}
                    </a>

                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ url('store-invoice') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h3>{{ __('app.invoice') }}</h3>
                        </div>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-3">
                                    <div class="row">
                                        <label class="col-sm-4 col-form-label">{{ __('app.label_day') }}</label>
                                        <div class="col-sm-8">
                                            <input type="text" maxlength="64" id="effective-date" name="day"
                                                class="form-control" id="" value="01">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="row">
                                        <label class="col-sm-4 col-form-label">{{ __('app.label_month') }}</label>
                                        <div class="col-sm-8">
                                            <input type="text" maxlength="64" id="effective-date" name="month"
                                                class="form-control" id="" value="{{ now()->format('m') + 1 }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="row align-items-end">
                                        <label class="col-sm-4 col-form-label">{{ __('app.label_year') }}</label>
                                        <div class="col-sm-8">
                                            <input type="text" maxlength="64" id="effective-date" name="year"
                                                class="form-control" id="" value="{{ now()->format('Y') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="row mb-3">
                                <label class="col-sm-4 form-label"
                                    for="basic-icon-default-fullname">{{ __('app.room_number') }} </label>
                                <div class="col-sm-8">
                                    <select class="form-select room_id" name="room_id" id="bs-validation-country" required>
                                        <option value="" selected>{{ __('app.room_table') }}</option>
                                        @foreach ($rooms->where('status', 0) as $item)
                                            <option value="{{ $item->id }}" data-cost="{{ $item->cost }}">
                                                {{ $item->room_number }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"
                                    for="basic-default-name">{{ __('app.cost') }}</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <input type="text" class="form-control cost text-end"
                                            name="cost" placeholder="00">
                                        <span class="input-group-text"><i class="bx bx-dollar"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">{{ __('app.eletrotic_cost') }}</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <input type="number" class="form-control eletrotic_cost text-end" step="any"
                                    name="electric_cost" placeholder="00" required>
                                <span class="input-group-text">៛</span>
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
                                                placeholder="0" value="0">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="row">
                                        <label
                                            class="col-sm-4 col-form-label text-end">{{ __('app.label_new_number') }}</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="water_new" class="form-control water_new"
                                                placeholder="0" value="0">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="row align-items-end">
                                        <div class="col-sm-12">
                                            <div class="input-group input-group-merge">
                                                <input type="text" name="water_cost"
                                                    data-value="{{ $sysInfo->water_cost }}"
                                                    class="form-control water_cost text-end" placeholder="0"
                                                    value="0">
                                                <span class="input-group-text"><strong>៛</strong></span>
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
                            <div class="input-group input-group-merge">
                                <input type="text" name="trash_cost" class="form-control trash_cost text-end"
                                    placeholder="0" value="{{ floatval($sysInfo->trash_cost) }}">
                                <span class="input-group-text"><strong>៛</strong></span>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3 justify-content-end">
                        <div class="col-sm-6">
                            <input type="text" name="other" class="form-control"
                                placeholder="ផ្សេងៗ...." value="ផ្សេងៗ.">
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <label class="col-sm-6 col-form-label text-end">{{ __('app.label_total_amount') }}</label>
                                <div class="col-sm-6">
                                    <div class="input-group input-group-merge">
                                        <input type="text" name="total_amount" class="form-control total_amount" readonly
                                            required placeholder="0">
                                        <span class="input-group-text">
                                            <button type="button" class="btn btn-icon btn-primary btn-cal"><i
                                                    class=" bx bx-refresh"></i></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                    <label class="col-sm-6 col-form-label text-end"></label>
                                    <div class="col-sm-6">
                                        <input type="hidden" name="_total_amount_dollar" class="_total_amount_dollar" value="{{ floatval($sysInfo->exchange_riel) }}">
                                        <input type="text" name="total_amount_dollar" class="form-control total_amount_dollar" readonly
                                        required placeholder="0" style="border: 1px solid #fff;" value="">
                                    </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <h6>{{ __('app.label_invoice_info') }}</h6>
                            <h6>{{ __('app.label_invoice_info_2') }}</h6>
                        </div>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary save btn-send"><i
                                class='bx bxs-save me-1'></i>{{ __('app.btn_save') }}</button>
                    </div>
                </form>
            </div>
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
            $('.room_id').change(function(event) {
                var option = $('option:selected', this).attr('data-cost');
                console.log("You have Selected  :: " + $(this).val() + " option:selected attr :: " +
                    option);
                var subZero = parseFloat(option);
                $('.cost').val(subZero);
            });

            $('.water_old, .water_new').keyup(function() {
                var cost = $('.water_cost').attr('data-value');
                var oldVal = $('.water_old').val();
                var newVal = $('.water_new').val();
                console.log(cost);
                var total = (newVal - oldVal) * cost;

                $('.water_cost').val(total);
            });

            $('.btn-cal').click(function() {
                var water_cost = $('.water_cost').val();
                var trash_cost = $('.trash_cost').val();
                var eletro_cost = $('.cost').val();
                var eletrotic_cost = $('.eletrotic_cost').val();
                var total_amount_dollar = $('._total_amount_dollar').val();
                var total_amount = '$' + (parseFloat(eletro_cost)) +
                    ' + ' + (parseFloat(trash_cost) + parseFloat(water_cost) +  parseFloat(eletrotic_cost)) + '៛';
               
                var total_riel =  (parseFloat(trash_cost) + parseFloat(water_cost) +  parseFloat(eletrotic_cost));

                $('.total_amount').val(total_amount);

                var sumtotal =  parseFloat(total_riel) / parseFloat(total_amount_dollar);
                var total = '$'+ (parseFloat(eletro_cost) + parseFloat(sumtotal)).toFixed(2);

                $('.total_amount_dollar').val(total);
            })
        });

        $('.btn-send').click(function() {
            $('#backDropModalLoader').modal('show');
        })
    </script>
@endsection
