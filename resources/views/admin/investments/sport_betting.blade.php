@extends('layouts.admin')
@section('content')
	<div class="row">
	    <span class="alert alert-info text-center col-sm-12">
		    <label>Today's Pick</label><br>
		    Clients are eagerly waiting for your odds.
	    </span>
		<div class="col-sm-12 col-xl-12">
			<div class="card">
				<div class="card-body">
					<form action="{{ route('admin.sport.betting') }}" method="post">
						@csrf
						<div class="form-group">
							<label>Match: </label>
							<input class="form-control border-radius-20" type="text" name="match" required>
						</div>
						<div class="form-group">
							<label>Pick: </label>
							<input class="form-control border-radius-20" type="text" name="pick" required>
						</div>
						<div class="form-group">
							<label>Odd Value: </label>
							<input class="form-control border-radius-20" type="text" name="odd" required>
						</div>
						<div class="form-group">
							<label>Kick Off: </label>
							<input class="form-control border-radius-20" type="text" name="kick_off" required>
						</div>
						<div class="form-group">
							<label>Price: (0 if its a free signal) </label>
							<input class="form-control border-radius-20" type="number" name="price" value="0" required>
						</div>
						<div class="form-group">
							<input class="btn btn-success border-radius-20" onclick="toast('test','success')"
							       type="submit" value="Post ODD">
						</div>
					</form>
				</div>
			</div>
		</div>

		@if($odds->count() > 0)
			<span class="alert alert-info text-center col-sm-12">
		   OPENED ODDS
			</span>
		@endif
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
						<h4 class="m-0 align-self-center">Pick: <span class="text-primary">@if($odd->price == 0){{ $odd->pick }}@else <span class="text-warning">Premium</span> @endif</span></h4>
						<span>
	                    <span class="mb-0 mt-3 text-muted">KICK-OFF: <span
				                    class="text-warning">{{ $odd->kick_off }}</span></span>
							@if($odd->price == 0)
								<span class="float-right"><span class="badge badge-success">FREE</span> </span>
							@else
								<span class="float-right"><a href="" class="badge badge-warning">PREMIUM</a> </span>
							@endif
                    </span>
						<br>
						<span class="mb-0 mt-3 text-muted">Ticket No: <span
									class=""><strong>#{{$odd->id}}</strong></span></span>
					</div>
				</div>
			</div>
		@endforeach
	</div>
@endsection