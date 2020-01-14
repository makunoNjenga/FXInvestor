@extends('layouts.admin')
@section('content')
    <div class="row">
	    <span class="alert alert-info text-center col-sm-12">
		    <label>Todays Pick</label><br>
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
						    <input class="btn btn-success border-radius-20" onclick="toast('test','success')" type="submit" value="Post ODD">
					    </div>
				    </form>
			    </div>
		    </div>
	    </div>
    </div>
@endsection