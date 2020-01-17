@extends('layouts.admin')
@section('content')
	<div class="row">
		@if($odds->count() > 0)
			<span class="alert alert-info text-center col-sm-12">
		   OPENED BETTING ODDS
			</span>
		@endif

		@if($odds->count() >0)
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
								<h4 class="m-0 align-self-center">Pick:
									<span class="text-primary">@if($odd->price == 0){{ $odd->pick }}@else <span class="text-warning">Premium</span> @endif
										<span class="float-right">
											<a class="btn btn-sm badge-danger" href="{{ route('admin.manage.delete.sports.betting',['id'=>$odd->id]) }}">
								<i class="mdi mdi-trash-can "></i> Delete
							</a>
									<br>
									<br>
							<a class="btn btn-sm badge-success" href="{{ route('admin.manage.outcome.betting.odds',['id'=>$odd->id]) }}">
								<i class="mdi mdi-check "></i> Outcome
							</a>
										</span>
									</span></h4>
								<span>
	                    <span class="mb-0 mt-3 text-muted">KICK-OFF:
		                    <span class="text-warning">{{ $odd->kick_off }}</span>
	                    </span>
                    </span>
								<br>
								<span class="mb-0 mt-3 text-muted">Ticket No: <span
											class=""><strong>#{{$odd->id}}</strong></span></span>
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