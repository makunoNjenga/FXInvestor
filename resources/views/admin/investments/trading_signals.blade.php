@extends('layouts.admin')
@section('content')
	@if($tradingSignals->count() > 0)
	<div class="row">
		<div class="col-sm-12 col-xl-12">
			<a href="{{ route('admin.manage.trading.signal') }}" class="btn-sm btn btn-primary float-right"><i
						class="mdi mdi-cogs"></i> Manage</a>
		</div>
	</div>
	<br>
	@endif
	<div class="row">
		<span class="alert alert-info text-center col-sm-12">
		    <label>Today's Signals</label><br>
		    Clients are eagerly waiting for your Signals.
	    </span>
		<div class="col-sm-12 col-xl-12">
			<div class="card">
				<div class="card-body">
					<form action="" method="post">
						@csrf
						<div class="form-group">
							<label>Pair: </label>
							<input class="form-control border-radius-20" type="text" name="pair" required>
						</div>
						<div class="form-group">
							<label>Signal: </label>
							<input class="form-control border-radius-20" type="text" name="signal" required>
						</div>
						<div class="form-group">
							<label>Entry: </label>
							<input class="form-control border-radius-20" type="text" name="entry" required>
						</div>
						<div class="form-group">
							<label>Take Profit: </label>
							<input class="form-control border-radius-20" type="text" name="take_profit" required>
						</div>
						<div class="form-group">
							<label>Stop Loss: </label>
							<input class="form-control border-radius-20" type="text" name="stop_loss" required>
						</div>
						<div class="form-group">
							<label>Price: (0 if its a free signal) </label>
							<input class="form-control border-radius-20" type="number" name="price" value="0" required>
						</div>
						<div class="form-group">
							<input class="btn btn-success border-radius-20" type="submit" value="Post Signal">
						</div>
					</form>
				</div>
			</div>
		</div>

		@if($tradingSignals->count() > 0)
			<span class="alert alert-info text-center col-sm-12">
		   OPENED SIGNALS
			</span>
		@endif
		@foreach($tradingSignals as $tradingSignal)
			<div class="col-sm-12 col-xl-12">
				<div class="card">
					<div class="card-body">
						<div class="media">
							<div class="media-body">
								<h5 class="font-size-14">
									<center>{{ $tradingSignal->pair }} [#{{$tradingSignal->id}}]</center>
								</h5>
							</div>
						</div>
						<h4 class="m-0 align-self-center">Signal: <span
									class="text-primary">{{ $tradingSignal->signal }}</span></h4>
						<label class="mb-0 mt-3 text-muted">AT: <span
									class="text-primary">{{ $tradingSignal->entry }}</span></label><br>
						<label class="mb-0 mt-3 text-muted">SL: <span
									class="text-danger">{{ $tradingSignal->stop_loss }}</span> </label>
						@if($tradingSignal->price > 0)
							<span class="float-right">
							<span class="btn btn-sm badge-warning">
								<i class="mdi mdi-cart mdi-18px"></i> Premium
							</span>
						</span>
						@else
							<label class="float-right">
								<span class="btn btn-success">FREE</span>
							</label>
						@endif

						<br>
						<label class="mb-0 mt-3 text-muted">TP: <span
									class="text-success">{{ $tradingSignal->take_profit }}</span></label><br>
						@if($tradingSignal->price > 0)
							<label class="mb-0 mt-3 text-muted">COST <span
										class="text-success">KES {{ number_format($tradingSignal->price) }}</span></label>
						@endif
					</div>
				</div>
			</div>
		@endforeach
	</div>
@endsection