@extends('layouts.admin')
@section('content')
	<div class="row">
		@if($tradingSignals->count() > 0)
			<span class="alert alert-info text-center col-sm-12">
		   OPENED SIGNALS
			</span>
		@endif

		@if($tradingSignals->count() >0)
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
								<span class="float-right">
							<a class="btn btn-sm badge-danger" href="{{ route('admin.manage.delete.trading.signal',['id'=>$tradingSignal->id]) }}">
								<i class="mdi mdi-trash-can "></i> Delete
							</a>
									<br>
									<br>
							<a class="btn btn-sm badge-success" href="{{ route('admin.manage.outcome.trading.signal',['id'=>$tradingSignal->id]) }}">
								<i class="mdi mdi-check "></i> Outcome
							</a>
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
			@endforeach
		@else
			<span class="alert alert-danger text-center col-sm-12">
		    No update! Come back later
	    </span>
		@endif
	</div>
@endsection