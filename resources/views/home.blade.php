@extends('layouts.app')
<?php
$balance = (new \App\Http\Controllers\HomeController())->getBalance($user->id);
$allTrades = (new \App\Http\Controllers\CacheController())->signals()->count();
$wonTrades = $signals->where('won', true)->count()+($allTrades- $signals->count());
$tradesRevenue = $signals->sum('price');
$oddsRevenue = $signals->sum('price');
$allOdds = (new \App\Http\Controllers\CacheController())->odds()->count();
$wonOdds = $odds->where('won', true)->count() + ($allOdds+$odds->count());
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
					<h4 class="m-0 align-self-center"><span class="text-success">KES {{number_format($balance)}}</span>
						<span class="float-right"><a href="{{ route('top.up') }}"
						                             class="btn btn-success btn-sm">TOP UP</a> </span></h4>
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
	                    <span class="float-right"><a href="{{ route('trading.signals') }}"
	                                                 class="btn btn-success btn-sm">Get Signals</a> </span>
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
					<h4 class="m-0 align-self-center"><span class="text-success">{{number_format($wonOdds)}}</span>/{{number_format($allOdds)}} </h4>
					<span>
	                   <span class="mb-0 mt-3 text-muted"><span class="text-success">@if($wonOdds>0){{$wonOdds/$allOdds*100}} @else 0.0 @endif %<i class="mdi mdi-trending-up mr-1"></i></span> Gain</span>
	                    <span class="float-right"><a href="{{ route('sport.betting') }}" class="btn btn-success btn-sm">Get ODDS</a> </span>
                    </span>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-xl-12">
			<div class="card">
				<div class="card-body">
					<div class="media">
						<div class="media-body">
							<h5 class="font-size-14">Investment</h5>
						</div>
						<div class="avatar-xs">
                                                <span class="avatar-title rounded-circle bg-primary">
                                                    <i class="dripicons-rocket"></i>
                                                </span>
						</div>
					</div>
					<span>
	                    <span class="mb-0 mt-3 text-muted">Earn up-to <span class="text-success">50% <i
					                    class="mdi mdi-trending-up mr-1"></i></span> interest <br>for as little as 3 days</span>
	                    <span class="float-right"><a href="{{ route('sport.betting') }}" class="btn btn-success btn-sm">Invest Now!</a> </span>
                    </span>
				</div>
			</div>
		</div>
	</div>
@endsection