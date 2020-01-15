@extends('layouts.app')
@section('content')
	<div class="row">
	    <span class="alert alert-info text-center col-sm-12">
		    <label>Purchase {{ $type }} #{{ $transaction->id }}</label><br>
		    Your Current Balance is <span class="@if($balance > $transaction->price) text-success @else text-danger @endif">KES {{ number_format($balance) }}</span>
	    </span>

		@if($type=="odd")
			<div class="col-sm-12 col-xl-12">
				<div class="card">
					<div class="card-body">
						<div class="media">
							<div class="media-body">
								<h5 class="font-size-14">
									<center>{{ $transaction->match }} [ <span>{{$transaction->odd}}</span> ]</center>
								</h5>
							</div>
						</div>
						<h4 class="m-0 align-self-center">Pick: <span
									class="text-primary">@if($transaction->price == 0){{ $transaction->pick }}@else
									<span class="text-warning">Premium</span> @endif</span></h4>
						<span>
	                    <span class="mb-0 mt-3 text-muted">KICK-OFF: <span
				                    class="text-warning">{{ $transaction->kick_off }}</span></span>
							@if($transaction->price == 0)
								<span class="float-right"><span class="btn btn-sm badge-success">FREE</span> </span>
							@else
								<span class="float-right"><span href="" class="btn btn-sm badge-warning">PREMIUM</span> </span>
							@endif
                    </span>
						<br>
						<span class="mb-0 mt-3 text-muted">Ticket No: <span
									class=""><strong>#{{$transaction->id}}</strong></span></span>
					</div>
				</div>
			</div>

			<span class="alert alert-info text-center col-sm-12">
			@if($balance >= $transaction->price)
					<a id="change-color" href="{{ route('purchase.betting.odds',['user_id'=>$user->id,'odd_id'=>$transaction->id]) }}" class="btn-sm btn btn-success" onclick="loading()">Purchase {{$type}} for KES {{ number_format($transaction->price) }}
						<span class="float-right" id="load" hidden><br>
					<strong>Processing...<i class="mdi mdi-loading mdi-spin mdi-18px"></i></strong>
				</span>
			</a>
				@else
					<a href="{{ route('top.up') }}" class="btn-sm btn btn-primary">You have insufficient balance. Kindly top up.</a>
				@endif
		</span>
		@endif

		@if($type=="signal")
			<div class="col-sm-12 col-xl-12">
				<div class="card">
					<div class="card-body">
						<div class="media">
							<div class="media-body">
								<h5 class="font-size-14">
									<center>{{ $transaction->pair }} [#{{$transaction->id}}]</center>
								</h5>
							</div>
						</div>
						<h4 class="m-0 align-self-center">Signal: <span class="text-primary">@if($transaction->price > 0 && $transaction->BoughtTradingSignal()->where('user_id',$user->id)->first()){{ $transaction->signal }}@else <i class="mdi mdi-lock mdi-18px"></i> @endif</span></h4>
						<label class="mb-0 mt-3 text-muted">AT: <span class="text-primary">@if($transaction->price > 0 && $transaction->BoughtTradingSignal()->where('user_id',$user->id)->first()){{ $transaction->entry }}@else <i class="mdi mdi-lock mdi-18px"></i> @endif</span></label><br>
						<label class="mb-0 mt-3 text-muted">SL: <span class="text-danger">@if($transaction->price > 0 && $transaction->BoughtTradingSignal()->where('user_id',$user->id)->first()){{ $transaction->stop_loss }}@else <i class="mdi mdi-lock mdi-18px"></i> @endif</span> </label>
						@if($transaction->price > 0)
							<span class="float-right">
								@if($transaction->BoughtTradingSignal()->where('user_id',$user->id)->first())
									<span class=" btn btn-sm badge-primary float-right">
										<i class="mdi mdi-check"></i> PAID
									</span>
								@else
									<span class="float-right">
										<span href="" class="btn btn-sm badge-warning">PREMIUM</span>
									</span>
								@endif
						</span>
						@else
							<label class="float-right">
								<span class="btn btn-success">FREE</span>
							</label>
						@endif
						<br>
						<label class="mb-0 mt-3 text-muted">TP: <span class="text-success">@if($transaction->price > 0 && $transaction->BoughtTradingSignal()->where('user_id',$user->id)->first()){{ $transaction->take_profit }}@else <i class="mdi mdi-lock mdi-18px"></i> @endif</span></label>
					</div>
				</div>
			</div>

			<span class="alert alert-info text-center col-sm-12">
			@if($balance >= $transaction->price)
					<a id="change-color" href="{{ route('purchase.trading.signals',['user_id'=>$user->id,'signal_id'=>$transaction->id]) }}" class="btn-sm btn btn-success" onclick="loading()">Purchase {{$type}} for KES {{ number_format($transaction->price) }}
						<span class="float-right text-primary" id="load" hidden>
					<strong><i class="mdi mdi-loading mdi-spin mdi-18px"></i></strong>
				</span>
			</a>
				@else
					<a href="{{ route('top.up') }}" class="btn-sm btn btn-primary">You have insufficient balance. Kindly top up.</a>
				@endif
		</span>
		@endif


	</div>
	<script type="text/javascript">
			function loading() {
				document.getElementById('load').removeAttribute('hidden');
				document.getElementById('change-color').classList.remove('btn-success');
				document.getElementById('change-color').classList.add('btn-primary');
			}
	</script>
@endsection