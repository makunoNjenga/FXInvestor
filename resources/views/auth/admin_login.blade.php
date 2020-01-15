@extends('layouts.auth')

@section('content')
	<div class="p-2">
		<h5 class="mb-5 text-center">Administrator Login.</h5>
		<form class="form-horizontal" action="{{ route('admin.login') }}" method="post">
			@csrf
			<div class="row">
				<div class="col-md-12">
					@include('inc.messages')
				</div>
				<div class="col-md-12">
					<div class="form-group mb-4">
						<label for="userpassword">Phonenumber</label>
						<input type="number" name="phone_number" class="form-control border-radius-20" id="phonenumber"
						       placeholder="Enter phonenumber">
					</div>

					<div class="form-group mb-4">
						<label for="userpassword">Password</label>
						<input type="password" name="password" class="form-control border-radius-20" id="password"
						       placeholder="Enter password">
					</div>

					<div class="mt-4">
						<button class="btn btn-success btn-block waves-effect waves-light border-radius-20"
						        type="submit">Log In
						</button>
					</div>

				</div>
			</div>
		</form>
	</div>
@endsection
