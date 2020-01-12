@extends('layouts.app')
@section('content')
    <div class="row">
	    <span class="alert alert-info text-center col-sm-12">
		    <label>Contact to administration about anything</label><br>
	    </span>

	    @include('inc.messages')

        <div class="col-sm-12 col-xl-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('contact.support') }}" id="form" method="post">
	                    @csrf
	                    <div class="form-group">
		                    <label>Subject: </label>
		                    <select class="form-control border-radius-20" name="subject">
			                    <option>--- Select a Subject ---</option>
			                    <option>Complaints</option>
			                    <option>Comment</option>
			                    <option>Compliment</option>
			                    <option>Report Abuse</option>
		                    </select>
		                    <input name="user_id" value="{{ $user->id }}" hidden>
	                    </div>
	                    <div class="form-group">
		                    <label>Message: </label>
		                    <textarea name="message" class="form-control"></textarea>
	                    </div>
	                    <div class="form-group">
		                    <button class="btn btn-success border-radius-20" type="submit">Submit Message</button>
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