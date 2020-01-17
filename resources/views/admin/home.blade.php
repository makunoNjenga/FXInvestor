@extends('layouts.admin')
<?php
        $wonTrades = $signals->where('won',true)->count();
        $allTrades = (new \App\Http\Controllers\CacheController())->signals()->count();
        $tradesRevenue = $signals->sum('price');
        $wonOdds = $odds->where('won',true)->count();
        $oddsRevenue = $signals->sum('price');
        $allOdds = (new \App\Http\Controllers\CacheController())->odds()->count();
?>
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
                    <h4 class="m-0 align-self-center "><span class="text-success">KES {{ number_format($tradesRevenue + $oddsRevenue) }}</span></h4>
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
                    <h4 class="m-0 align-self-center"><span class="text-success">{{number_format($wonTrades)}}</span>/{{number_format($allTrades)}} </h4>
                    <span>
	                    <span class="mb-0 mt-3 text-muted"><span class="text-success">@if($allTrades>0){{$wonTrades/$allTrades*100}} @else 0.0 @endif % <i class="mdi mdi-trending-up mr-1"></i></span> Gain</span>
	                    <span class="float-right"><a href="" class="btn btn-success btn-sm">CREATE Signals</a> </span>
                    </span>
                    <h4 class="m-0 align-self-center">Revenue: <span class="text-success">KES. {{$tradesRevenue}}</span></h4>
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
	                <h4 class="m-0 align-self-center"><span class="text-success">{{number_format($wonOdds)}}</span>/{{number_format($allOdds)}} </h4>
	                <span>
	                    <span class="mb-0 mt-3 text-muted"><span class="text-success">@if($wonOdds>0){{$wonOdds/$allOdds*100}} @else 0.0 @endif %<i class="mdi mdi-trending-up mr-1"></i></span> Gain</span>
	                    <span class="float-right"><a href="{{ route('admin.sport.betting') }}" class="btn btn-success btn-sm">CREATE ODDS</a> </span>
                    </span>
                    <h4 class="m-0 align-self-center">Revenue: <span class="text-success">KES. {{$tradesRevenue}}</span></h4>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection