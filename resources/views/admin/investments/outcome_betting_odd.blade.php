@extends('layouts.admin')
@section('content')
	<div class="row">
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

		<div class="col-sm-12 col-xl-12">
			<div class="card">
				<div class="card-body">
					<form action="{{ route('admin.manage.post.outcome.betting.odd') }}" method="post">
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
							<input name="oddID" value="{{$odd->id}}" hidden>
							<input class="btn btn-success border-radius-20" type="submit" value="Close The Odd">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

@endsection