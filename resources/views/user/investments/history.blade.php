@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-4">Trading Signals History</h4>
                    <div dir="ltr">

                        <div class="slick-slider slider-for hori-timeline-desc pt-0">
                            <div>
                                <div id="earning-day-chart" class="apex-charts"></div>
                            </div>
                        </div>

                        <div class="row justify-content-center mb-3">
                            <div class="col-lg-11">
                                <div class="slick-slider slider-nav hori-timeline-nav">
                                    <div class="slider-nav-item">
                                        <a href="" class="nav-title font-size-14 mb-0">Signals History</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-4">Betting History</h4>
                    <div dir="ltr">

                        <div class="slick-slider slider-for hori-timeline-desc pt-0">
                            <div>
                                <div id="earning-weekly-chart" class="apex-charts"></div>
                            </div>
                        </div>

                        <div class="row justify-content-center mb-3">
                            <div class="col-lg-11">
                                <div class="slick-slider slider-nav hori-timeline-nav">
                                    <div class="slider-nav-item">
                                        <a href="" class="nav-title font-size-14 mb-0">ODDS History</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection