@extends('layouts.admin')
@section('content')
	<div class="row">
	    <span class="alert alert-info text-center col-sm-12">
		    <label>Financial Statements</label>
		    <br>
		    <span>Your current balance is <span
					    class="text-success">KES {{ number_format((new \App\Http\Controllers\AdminController())->getBalance()) }}</span> </span>
	    </span>

		@if($statements->count() > 0)
		<div class="col-sm-12 col-xl-12">
			<div class="card">
				<div class="card-body">
					<div class="table-responsive">
							<table class="table table-centered table-nowrap mb-0">
								<thead>
								<tr>
									<th scope="col">Date</th>
									<th scope="col">amount</th>
									<th scope="col">Info</th>
								</tr>
								</thead>
								<tbody>
								@foreach($statements as $statement)
								<tr>
									<td>{{ \App\Http\Controllers\PageController::preciseTime($statement->created_at) }}</td>
									<td class="@if($statement->action > 0)text-success @else text-danger @endif">{{ number_format($statement->amount) }}</td>
									<td class="">
										{{$statement->description}}
									</td>
								</tr>
								@endforeach
								</tbody>
							</table>
					</div>
				</div>
			</div>
		</div>
		@else
			<span class="alert alert-danger text-center col-md-12">No update! Come back later</span>
		@endif
	</div>
@endsection