@extends('layouts.app')
@section('content')
	<div class="row">
		<span class="alert alert-info text-center col-sm-12">
		    <label>Today's Signals</label><br>
		    Unlock your full potential by purchasing premium signals
	    </span>
@if($tradingSignals->count() > 0)
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
						<h4 class="m-0 align-self-center">Signal: <span class="text-primary">@if($tradingSignal->price > 0 && $tradingSignal->BoughtTradingSignal()->where('user_id',$user->id)->first()){{ $tradingSignal->signal }}@else <i class="mdi mdi-lock mdi-18px"></i> @endif</span></h4>
						<label class="mb-0 mt-3 text-muted">AT: <span class="text-primary">@if($tradingSignal->price > 0 && $tradingSignal->BoughtTradingSignal()->where('user_id',$user->id)->first()){{ $tradingSignal->entry }}@else <i class="mdi mdi-lock mdi-18px"></i> @endif</span></label><br>
						<label class="mb-0 mt-3 text-muted">SL: <span class="text-danger">@if($tradingSignal->price > 0 && $tradingSignal->BoughtTradingSignal()->where('user_id',$user->id)->first()){{ $tradingSignal->stop_loss }}@else <i class="mdi mdi-lock mdi-18px"></i> @endif</span> </label>
						@if($tradingSignal->price > 0)
							<span class="float-right">
								@if($tradingSignal->BoughtTradingSignal()->where('user_id',$user->id)->first())
									<span class=" btn btn-sm badge-primary float-right"><i
												class="mdi mdi-check"></i> PAID</span>
									@else
									<span class="float-right">
										<a href="{{ route('purchase',['type'=>'signal','id'=>$tradingSignal->id]) }}" class="btn btn-sm badge-warning" onclick="loading()">
											<i class="mdi mdi-cart mdi-18px"></i> BUY &nbsp;&nbsp;&nbsp;&nbsp;
											<span class="float-right text-primary" id="load" hidden>
												<strong>
													<i class="mdi mdi-loading mdi-spin mdi-18px"></i>
												</strong>
											</span>
										</a>
									</span>
									@endif
						</span>
						@else
							<label class="float-right">
								<span class="btn btn-success">FREE</span>
							</label>
						@endif

						<br>
						<label class="mb-0 mt-3 text-muted">TP: <span class="text-success">@if($tradingSignal->price > 0 && $tradingSignal->BoughtTradingSignal()->where('user_id',$user->id)->first()){{ $tradingSignal->take_profit }}@else <i class="mdi mdi-lock mdi-18px"></i> @endif</span></label><br>
						@if($tradingSignal->price > 0)
							<label class="mb-0 mt-3 text-muted">COST <span class="text-success">KES {{ number_format($tradingSignal->price) }}</span></label>
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
		<script type="text/javascript">
			function loading() {
				document.getElementById('load').removeAttribute('hidden');
			}
		</script>
	</div>
@endsection