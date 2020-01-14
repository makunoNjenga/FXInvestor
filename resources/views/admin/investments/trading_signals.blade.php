@extends('layouts.app')
@section('content')
	<div class="row">
		{{--<a href="" class="alert alert-info text-center">--}}
		{{--<label>Join Premium</label><br>--}}
		{{--Unlock your full potential by joining our premium services to get real time feeds as they happen in our services--}}
		{{--</a>--}}
		<span class="alert alert-info text-center col-sm-12">
		    <label>Today's Signals</label><br>
		    Unlock your full potential by purchasing premium signals
	    </span>

		<div class="col-sm-12 col-xl-12">
			<div class="card">
				<div class="card-body">
					<div class="media">
						<div class="media-body">
							<h5 class="font-size-14">
								<center>GBPUSD</center>
							</h5>
						</div>
					</div>
					<h4 class="m-0 align-self-center">Signal: <span class="text-primary">Buy</span></h4>
					<label class="mb-0 mt-3 text-muted">AT: <span class="text-primary">1.3120</span></label><br>
					<label class="mb-0 mt-3 text-muted">SL: <span class="text-danger">1.3090</span> </label> <label
							class="float-right"><span class="btn btn-success">FREE</span> </label><br>
					<label class="mb-0 mt-3 text-muted">SL: <span class="text-success">1.3180</span></label><br>
					<label class="mb-0 mt-3 text-muted">Risk: Reward <span class="text-success">2</span></label>
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-12 col-xl-12">
		<div class="card">
			<div class="card-body">
				<div class="media">
					<div class="media-body">
						<h5 class="font-size-14">
							<center>USDJPY</center>
						</h5>
					</div>
				</div>
				<h4 class="m-0 align-self-center">Signal: <span class="text-primary">Buy</span></h4>
				<label class="mb-0 mt-3 text-muted">AT: <span class="text-primary">1.3120</span></label><br>
				<label class="mb-0 mt-3 text-muted">SL: <span class="text-danger">1.3090</span> </label> <a href=""
						class="float-right"><span class="btn btn-warning">PREMIUM</span> </a><br>
				<label class="mb-0 mt-3 text-muted">SL: <span class="text-success">1.3180</span></label><br>
				<label class="mb-0 mt-3 text-muted">Risk: Reward <span class="text-success">2</span></label>
			</div>
		</div>
	</div>
@endsection