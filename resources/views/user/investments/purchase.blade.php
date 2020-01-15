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
		@endif

		<span class="alert alert-info text-center col-sm-12">
			@if($balance > $transaction->price)
			<a href="{{ route('purchase.betting.odds',['user_id'=>$user->id,'odd_id'=>$transaction->id]) }}" class="btn-sm btn btn-success" onclick="loading()">Purchase {{$type}} for KES {{ number_format($transaction->price) }}
				&nbsp;&nbsp;&nbsp;&nbsp;<span class="float-right text-primary" id="load" hidden><strong><i class="mdi mdi-loading mdi-spin mdi-18px"></i></strong></span>
			</a>
				@else
				<a href="{{ route('top.up') }}" class="btn-sm btn btn-warning">You have insufficient balance. Kindly top up.</a>
			@endif
		</span>
	</div>
	<script type="text/javascript">
			function loading() {
				document.getElementById('load').removeAttribute('hidden');
			}
	</script>
@endsection