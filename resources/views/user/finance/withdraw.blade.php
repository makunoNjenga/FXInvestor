@extends('layouts.app')
@section('content')
    <div class="row">
	    <span class="alert alert-info text-center col-sm-12">
		    <label>Withdraw Info</label><br>
		    Withdrawal requests takes 1 ~ 3 days to be processed.
		    <br>
		    <br>
		    <label>Your current balance is <span class="text-success">KES {{ number_format((new \App\Http\Controllers\HomeController())->getBalance($user->id)) }}</span> </label>
	    </span>
@include('inc.messages')
        <div class="col-sm-12 col-xl-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('withdraw') }}" method="post">
	                    @csrf
	                    <div class="form-group">
		                    <label>Amount: </label>
		                    <label class="float-right" id="chargesView" hidden>Charges <span class="text-danger">KES <span id="charges">15</span></span></label>
		                    <input class="form-control border-radius-20" type="number" name="amount" required id="amount" min="100" onkeyup="transactionCharges(this.value)">
	                    </div>
	                    <div class="form-group">
		                    <input class="btn btn-success border-radius-20" id="submit" type="submit" onclick="loading()" value="Withdraw">
		                    <span class="btn btn-primary border-radius-20" id="loading" hidden> <strong>Processing <i class="mdi mdi-loading mdi-spin mdi-18px"></i> </strong></span>
	                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
	    function loading() {
	    	if (document.getElementById('amount').value >= 500) {
			    document.getElementById('loading').removeAttribute("hidden");
			    document.getElementById('submit').setAttribute("style", "display: none;");
		    }
	    }

	    function transactionCharges(amount) {
		    document.getElementById('chargesView').removeAttribute("hidden");
	    	let charges = amount*0.075 + 15;
		    document.getElementById('charges').innerHTML = charges;
	    }

    </script>
@endsection