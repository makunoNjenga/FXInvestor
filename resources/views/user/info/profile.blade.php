@extends('layouts.app')
@section('content')
    <div class="row">
	    <span class="alert alert-info text-center col-sm-12">
		    <label>Edit your profile if need be:</label><br>
	    </span>

	    @include('inc.messages')

        <div class="col-sm-12 col-xl-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('profile') }}" id="form" method="post">
	                    @csrf
	                    <div class="form-group">
		                    <label>Pin: </label>
		                    <input class="form-control border-radius-20 bg-light" type="number" value="{{ $user->pin }}" readonly>
		                    <input name="pin" value="{{ $user->pin }}" hidden>
	                    </div>
	                    <div class="form-group">
		                    <label>Name: </label>
		                    <input class="form-control border-radius-20" type="text" maxlength="10" minlength="10" value="{{ $user->name }}"  name="name" required>
	                    </div>
	                    <div class="form-group">
		                    <label>Phone number: </label>
		                    <input class="form-control border-radius-20" type="text" value="{{ $user->phone_number }}" name="phone_number">
	                    </div>
	                    <div class="form-group">
		                    <button class="btn btn-success border-radius-20" type="submit">Edit My Profile</button>
		                    <span class="float-right badge badge-success border-radius-20" id="load" hidden><strong><i class="mdi mdi-loading mdi-spin mdi-36px"></i></strong></span>
	                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
	<script type="text/javascript">
		document.querySelector('#form').addEventListener('submit', function (e) {
			e.preventDefault();
			document.getElementById('load').removeAttribute('hidden');
			this.submit();
		});
	</script>
@endsection