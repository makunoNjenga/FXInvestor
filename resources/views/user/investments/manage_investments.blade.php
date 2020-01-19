@extends('layouts.app')
@section('content')
	<div class="row">
	    <span class="alert alert-info text-center col-sm-12">
		    <label>My Investments</label>
	    </span>

		<div class="col-sm-12 col-xl-12">
			<div class="card">
				<div class="card-body">
					<div class="table-responsive">
						@if($investments->count() > 0)
							<table class="table table-centered table-nowrap mb-0">
								<thead>
								<tr>
									<th scope="col"></th>
									<th scope="col">Maturity</th>
									<th scope="col">Amount</th>
									<th scope="col">Interest</th>
								</tr>
								</thead>
								<tbody>
								@foreach($investments as $investment)
								<tr>
									<td>@if($investment->matured)<span class="btn btn-sm btn-success mdi mdi-check"></span> @else<span class="btn btn-sm btn-primary mdi mdi-loading mdi-spin"></span>@endif</td>
									<td>{{ date('M d Y', strtotime($investment->matures_at)) }}</td>
									<td>{{number_format($investment->amount)}}</td>
									<td class="text-success">{{number_format($investment->interest)}}</td>
								</tr>
								@endforeach
								</tbody>
							</table>
						@else
							<span class="alert alert-danger text-center col-sm-12">No update! Come back later</span>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection