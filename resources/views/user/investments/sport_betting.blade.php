@extends('layouts.app')
@section('content')
	<div class="row">
	    <span class="alert alert-info text-center col-sm-12">
		    <label>Today's Pick</label><br>
		    Unlock your full potential by purchasing premium ODDS
	    </span>
		@include('inc.messages')

		@if($odds->count() > 0)
			@foreach($odds as $odd)
				<div class="col-sm-12 col-xl-12">
					<div class="card">
						<div class="card-body">
							<div class="media">
								<div class="media-body">
									<h5 class="font-size-14">
										<center>{{ $odd->match }} [ <span>{{$odd->odd}}</span> ]</center>
									</h5>
								</div>
							</div>
							<h4 class="m-0 align-self-center">Pick: <span
										class="text-primary">@if($odd->price == 0 || $odd->BoughtBettingOdd()->where('user_id',$user->id)->first()){{ $odd->pick }}@else
										<span class="text-danger"><i class="mdi mdi-lock mdi-18px"></i> </span> @endif</span></h4>
							<span>
	                    <span class="mb-0 mt-3 text-muted">KICK-OFF:
		                    <span class="text-warning">
			                    {{--@if($odd->price == 0 || $odd->BoughtBettingOdd()->where('user_id',$user->id)->first()) --}}
			                    {{ $odd->kick_off }}
			                    {{--@else <i class="text-danger mdi mdi-lock"></i> @endif--}}
		                    </span></span>
								@if($odd->price == 0)
									<span class="float-right"><span class="btn btn-sm badge-success">FREE</span> </span>
								@else
									@if($odd->BoughtBettingOdd()->where('user_id',$user->id)->first())
										<span class=" btn btn-sm badge-primary float-right"><i
													class="mdi mdi-check"></i> PAID</span>
									@else
										<span class="float-right"><a
													href="{{ route('purchase',['type'=>'odd','id'=>$odd->id]) }}"
													class="btn btn-sm badge-warning" onclick="loading()"><i
														class="mdi mdi-cart mdi-18px"></i> BUY &nbsp;&nbsp;&nbsp;&nbsp;<span
														class="float-right text-primary" id="load" hidden><strong><i
																class="mdi mdi-loading mdi-spin mdi-18px"></i></strong></span></a>  </span>
									@endif
								@endif
                    </span>
							<br>
							<span class="mb-0 mt-3 text-muted">Ticket No: <span
										class=""><strong>#{{$odd->id}}</strong></span></span>
							@if($odd->price > 0)
								<br>
								<span class="mb-0 mt-3">Cost: <span
											class="text-success"><strong>KES {{number_format($odd->price)}}</strong></span></span>
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
	<script type="text/javascript">
		function loading() {
			document.getElementById('load').removeAttribute('hidden');
		}
	</script>
@endsection