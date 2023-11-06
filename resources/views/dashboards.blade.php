@extends('layouts.master')

@section('title', __('app.dashboard'))

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h4 class="card-title text-primary">{{ __('app.congratulations') }} {{ Auth::user()->name }}!
                                    🎉</h4>
                                <p class="mb-4">
                                    {{ __('app.dashboard_info') }}
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img src="{{ asset('assets/img/illustrations/man-with-laptop-light.png') }}" height="140"
                                    alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png') }}"
                                    data-app-light-img="illustrations/man-with-laptop-light.png') }}" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 col-md-12 col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <i class='bx bx-icon text-success bx-buildings'></i>
                            </div>
                        </div>
                        <span class="fw-medium d-block mb-1">{{ __('app.room') }}</span>
                        <h3 class="card-title mb-2">{{ $data['room'] }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-12 col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <i class='bx bx-icon text-muted bx-user'></i>
                            </div>
                        </div>
                        <span class="d-block mb-1">{{ __('app.customer') }}</span>
                        <h3 class="card-title text-nowrap mb-2">{{ $data['customer'] }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-12 col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <i class='bx bx-icon text-danger bx-bookmark-alt'></i>
                            </div>
                        </div>
                        <span class="d-block mb-1">{{ __('app.room_rent') }}</span>
                        <h3 class="card-title text-nowrap mb-2">{{ $data['roomRent'] }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <i class='bx bx-icon text-success bx-trending-up'></i>
                            </div>
                        </div>
                        <span class="d-block mb-1">{{ __('app.total_income_usd') }}</span>
                        <h3 class="card-title text-nowrap mb-2">{{ floatval($data['totalDollar']) }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <i class='bx bx-icon text-success bx-trending-up'></i>
                            </div>
                        </div>
                        <span class="d-block mb-1">{{ __('app.total_income_riel') }}</span>
                        <h3 class="card-title text-nowrap mb-2">{{ floatval($data['totalRiel']) }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            {{-- <div class="col-lg-8 col-sm-12 order-2 order-md-3 order-lg-2 mb-4">
                <div class="card">
                    <div class="row row-bordered g-0">
                        <div class="col-md-12">
                            <h5 class="card-header m-0 me-2 pb-3">{{ __('app.graph_report') }}</h5>
                            <div id="totalRevenueChart" class="px-2"></div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="col-lg-4 col-sm-12 mb-4">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2">{{ __('app.report_monthly') }} <strong
                                class="rounded px-2 py-1 text-bg-success badge-month"></strong></h5>

                    </div>
                    <div class="card-body">
                        <ul class="p-0 m-0">
                            <li class="d-flex mb-4 pb-1">
                                <div class="flex-shrink-0 me-3">
                                    <i class="bx bx-icon bx-buildings"></i>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="text-muted d-block mb-1">{{ __('app.room_cost') }}</h6>
                                        <small class="mb-0">{{ __('app.total_amount_') }}</small>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0">{{ floatval($data['roomCost']) }}</h6>
                                        <span class="text-muted">$</span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class=" flex-shrink-0 me-3">
                                    <i class="bx bx-icon bx-rocket"></i>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="text-muted d-block mb-1">{{ __('app.eletrotic_cost') }}</h6>
                                        <small class="mb-0">{{ __('app.total_amount_') }}</small>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0">{{ floatval($data['electricCost']) }}</h6>
                                        <span class="text-muted">$</span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class=" flex-shrink-0 me-3">
                                    <i class="bx bx-icon bx-water"></i>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">{{ __('app.water_cost') }}</small>
                                        <h6 class="mb-0">{{ __('app.total_amount_') }}</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0">{{ floatval($data['waterCost']) }}</h6>
                                        <span class="text-muted">៛</span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class=" flex-shrink-0 me-3">
                                    <i class="bx bx-icon bx-trash"></i>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">{{ __('app.trash_cost') }}</small>
                                        <h6 class="mb-0">{{ __('app.total_amount_') }}</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0">{{ floatval($data['trashCost']) }}</h6>
                                        <span class="text-muted">៛</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        Date.prototype.getAmPm = function() {
            if (this.getHours() >= 12) {
                return 1
            }; // pm
            return 0; // am
        }

        var locale = {
            en: {
                month: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September ',
                    'October', 'November', 'December'
                ],
                ampm: ['am', 'pm']
            },
            km: {
                month: ['មករា', 'កុម្ភៈ', 'មីនា', 'មេសា', 'ឧសភា',
                    'មិថុនា', 'កក្កដា', 'សីហា', 'កញ្ញា', 'តុលា', 'វិច្ឆិកា', 'ធ្នូ'
                ],
                ampm: ['ព្រឹក', 'ល្ងាច']
            }
        };

        var toLocaleNumber = function(num, lang, zeroPadding) {
            if (typeof num !== 'number') return null;

            var numInteger = parseInt(num);
            var numString = numInteger.toString();

            if (zeroPadding > 0 && numString.length < zeroPadding) {
                numString = '0' + numString;
            }

            // support only khmer
            if (lang !== 'km') {
                return numString
            };

            var khmerNumber = '';
            var numbersKhmer = ['០', '១', '២', '៣', '៤', '៥', '៦', '៧', '៨', '៩'];

            for (var i = 0; i < numString.length; i++) {
                khmerNumber += numbersKhmer[parseInt(numString[i])];
            }

            return khmerNumber;
        };

        var formatDate = function(date, lang) {
            var formattedDate = null;
            var hours = d.getHours();
            if (hours > 12) {
                hours -= 12;
            };

            formattedDate = locale[lang]['month'][d.getMonth()];
            // toLocaleNumber(d.getDate(), lang, 2) +
            // '-' +
            // locale[lang]['month'][d.getMonth()] +
            // '-' +
            // toLocaleNumber(d.getFullYear(), lang) +
            // ' ' +
            // toLocaleNumber(hours, lang, 2) +
            // ':' +
            // toLocaleNumber(d.getMinutes(), lang, 2) +
            // ' ' +
            // locale[lang]['ampm'][d.getAmPm()];

            return formattedDate;
        };

        var d = new Date();

        $('.badge-month').text(formatDate(d, 'km'))
        // for example: "28-May-2016 3:44 pm" "២៨-ឧសភា-២០១៦ ៣:៤៤ ល្ងាច"
        console.log(formatDate(d, 'en'), formatDate(d, 'km'));
    </script>
@endsection
