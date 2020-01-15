@extends('layouts.app')
<?php
$balance = (new \App\Http\Controllers\HomeController())->getBalance($user->id);
?>
@section('content')
    <div class="row">
        <div class="col-sm-12 col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <div class="media-body">
                            <h5 class="font-size-14">Hey <span class="text-success">{{$user->name}}.</span></h5>
                        </div>
                    </div>
                    <h4 class="m-0 align-self-center"><span class="text-success">KES {{number_format($balance)}}</span>  <span class="float-right"><a href="{{ route('top.up') }}" class="btn btn-success btn-sm">TOP UP</a> </span></h4>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <div class="media-body">
                            <h5 class="font-size-14">Trading Signals</h5>
                        </div>
                        <div class="avatar-xs">
                                                <span class="avatar-title rounded-circle bg-primary">
                                                    <i class="dripicons-box"></i>
                                                </span>
                        </div>
                    </div>
                    <h4 class="m-0 align-self-center"><span class="text-success">1,753</span>/2,000 </h4>
                    <span>
	                    <span class="mb-0 mt-3 text-muted"><span class="text-success">1.23 % <i class="mdi mdi-trending-up mr-1"></i></span> Gain</span>
	                    <span class="float-right"><a href="{{ route('trading.signals') }}" class="btn btn-success btn-sm">Get Signals</a> </span>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <div class="media-body">
                            <h5 class="font-size-14">Sports Betting</h5>
                        </div>
                        <div class="avatar-xs">
                                                <span class="avatar-title rounded-circle bg-primary">
                                                    <i class="dripicons-briefcase"></i>
                                                </span>
                        </div>
                    </div>
	                <h4 class="m-0 align-self-center"><span class="text-success">1,753</span>/2,000 </h4>
	                <span>
	                    <span class="mb-0 mt-3 text-muted"><span class="text-success">1.23 % <i class="mdi mdi-trending-up mr-1"></i></span> Gain</span>
	                    <span class="float-right"><a href="{{ route('sport.betting') }}" class="btn btn-success btn-sm">Get ODDS</a> </span>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
	    <div class="col-lg-12">
		    <div class="card">
			    <div class="card-body">
				    <h4 class="header-title mb-4">Latest Transaction</h4>

				    <div class="table-responsive">
					    <table class="table table-centered table-nowrap mb-0">
						    <thead>
						    <tr>
							    <th scope="col">ID.</th>
							    <th scope="col">Date</th>
							    <th scope="col">Source</th>
							    <th scope="col">Status</th>
						    </tr>
						    </thead>
						    <tbody>
						    <tr>
							    <td>11111</td>
							    <td>12 hrs ago</td>
							    <td>Signal</td>
							    <td>
								    <i class="mdi mdi-checkbox-blank-circle text-success mr-1"></i>
							    </td>
						    </tr>
						    </tbody>
					    </table>
				    </div>
			    </div>
		    </div>
	    </div>
    </div>

    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-4">Marketplaces Earning</h4>

                    <div dir="ltr">

                        <div class="slick-slider slider-for hori-timeline-desc pt-0">
                            <div>
                                <p class="font-size-16">Current Earning</p>
                                <h4 class="mb-4">KES 1,452</h4>
                                <div id="earning-day-chart" class="apex-charts"></div>
                            </div>
                            <div>
                                <p class="font-size-16">Weekly Earning</p>
                                <h4 class="mb-4">KES 6,536</h4>
                                <div id="earning-weekly-chart" class="apex-charts"></div>
                            </div>
                            <div>
                                <p class="font-size-16">Monthly Earning</p>
                                <h4 class="mb-4">KES 24,562</h4>
                                <div id="earning-monthly-chart" class="apex-charts"></div>
                            </div>
                        </div>

                        <div class="row justify-content-center mb-3">
                            <div class="col-lg-11">
                                <div class="slick-slider slider-nav hori-timeline-nav">
                                    <div class="slider-nav-item">
                                        <h5 class="nav-title font-size-14 mb-0">Day</h5>
                                    </div>
                                    <div class="slider-nav-item">
                                        <h5 class="nav-title font-size-14 mb-0">Week</h5>
                                    </div>
                                    <div class="slider-nav-item">
                                        <h5 class="nav-title font-size-14 mb-0">Month</h5>
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