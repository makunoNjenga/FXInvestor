@extends('layouts.app')
@section('content')
    <div class="row">
	    <span class="alert alert-info text-center">
		    <label>Guide</label><br>
		    We have made top up so easy. Just add the amount and click deposit. A pop up message will be sent to your. Input the pin to complete transaction.
		    <br>
		    <br>
		    <label>Your current balance is <span class="text-success">KES {{ number_format((new \App\Http\Controllers\HomeController())->getBalance($user->id)) }}</span> </label>
	    </span>

        <div class="col-sm-12 col-xl-12">
            <div class="card">
                <div class="card-body">
                    <form>
	                    <div class="form-group">
		                    <label>Amount: </label>
		                    <input class="form-control border-radius-20" type="number" name="amount" required>
	                    </div>
	                    <div class="form-group">
		                    <input class="btn btn-success border-radius-20" type="submit" value="Deposit">
	                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection