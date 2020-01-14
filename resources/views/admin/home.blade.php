@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-sm-12 col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <div class="media-body">
                            <h5 class="font-size-14">ADMINISTRATOR <span class="text-primary">{{$user->name}}.</span></h5>
                        </div>
                    </div>
                    <h4 class="m-0 align-self-center text-center"><span class="text-success">KES 2,500</span></h4>
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
	                    <span class="float-right"><a href="" class="btn btn-success btn-sm">CREATE Signals</a> </span>
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
	                    <span class="float-right"><a href="" class="btn btn-success btn-sm">CREATE ODDS</a> </span>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection