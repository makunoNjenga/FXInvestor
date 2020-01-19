@extends('layouts.app')
@section('content')
	@if($user->investments()->count() > 0)
		<div class="row">
			<div class="col-sm-12 col-xl-12">
				<a href="{{ route('invest.statement') }}" class="btn-sm btn btn-primary float-right"><i
							class="mdi mdi-bank"></i> My Investments</a>
			</div>
		</div>
		<br>
	@endif

    <div class="row">
	    <span class="alert alert-info text-center col-sm-12">
		    <label>Note</label><br>
		    Invest and Earn 50 % interest. <br><br> By clicking <strong>"make an investment"</strong> button means that you have agreed to our <a href="">terms and conditions</a>.
		    <br>
		    <br>
		    <label>Your current balance is <span class="text-success">KES {{ number_format((new \App\Http\Controllers\HomeController())->getBalance($user->id)) }}</span> </label>
	    </span>
@include('inc.messages')
        <div class="col-sm-12 col-xl-12">
            <div class="card">
                <div class="card-body">
                    <form action="" method="post">
	                    @csrf
	                    <div class="form-group">
		                    <label>Amount: </label>
		                    <select class="form-control border-radius-20" name="amount" onchange="getInterest(this.value)">
			                    <option>--- select amount to invest on ---</option>
			                    <option value="1000">1,000</option>
			                    <option value="3000">3,000</option>
			                    <option value="5000">5,000</option>
			                    <option value="10000">10,000</option>
			                    <option value="15000">15,000</option>
			                    <option value="20000">20,000</option>
			                    <option value="30000">30,000</option>
			                    <option value="40000">40,000</option>
			                    <option value="50000">50,000</option>
			                    <option value="60000">60,000</option>
			                    <option value="70000">70,000</option>
		                    </select>
	                    </div>
	                    <div class="row">
		                    <span class="alert alert-primary text-center col-sm-12" id="interest" hidden></span>
	                    </div>
	                    <div class="form-group">
		                    <input class="btn btn-success border-radius-20" id="submit" type="submit" onclick="loading()" value="Make Investment">
		                    <span class="btn btn-primary border-radius-20" id="loading" hidden> <strong>Processing <i class="mdi mdi-loading mdi-spin mdi-18px"></i> </strong></span>
	                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
	<script type="text/javascript">
		function getInterest(amount) {
			if (amount > 0) {
				let interest = 0.5 * amount;
				let days = getDays(amount);

				document.getElementById('interest').innerText = "You will get an interest of KES "+interest+" after "+days+" working days.";
				document.getElementById('interest').removeAttribute("hidden");
			}else{
				document.getElementById('interest').setAttribute("style", "display: none;");
			}
		}

		/**
		 * calculates date to invest in
		 * @param amount
		 * @returns {number}
		 */
		function getDays(amount) {
			if (amount >= 1000 && amount <= 5000){
				return 3;
			}
			if (amount >= 10000 && amount <= 40000){
				return 7;
			}
			if (amount > 40000){
				return 21;
			}
		}

		function loading() {
			document.getElementById('loading').removeAttribute("hidden");
			document.getElementById('submit').setAttribute("style", "display: none;");
			}
	</script>
@endsection