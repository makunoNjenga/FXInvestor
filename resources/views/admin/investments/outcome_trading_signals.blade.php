@extends('layouts.admin')
@section('content')
	<div class="row">
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
					<span class="float-right">
						</span>
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
		<div class="col-sm-12 col-xl-12">
			<div class="card">
				<div class="card-body">
					<form action="{{ route('admin.manage.post.outcome.trading.signal') }}" method="post">
						@csrf
						<div class="form-group">
							<label>Outcome: </label>
							<input class="form-control border-radius-20" type="text" name="outcome" required>
						</div>
						<div class="form-group">
							<label>Won: </label>
							<select class="form-control" name="won">
								<option value="0">No</option>
								<option value="1">Yes</option>
							</select>
						</div>
						<div class="form-group">
							<input name="signalID" value="{{$tradingSignal->id}}" hidden>
							<input class="btn btn-success border-radius-20" type="submit" value="Close The Signal">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

@endsection