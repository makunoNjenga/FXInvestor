@extends('layouts.app')
@section('content')
    <div class="row">
	    <span class="alert alert-info text-center col-sm-12">
		    <label>Financial Statements</label>
		    <br>
		    <label>Your current balance is <span class="text-success">KES 10,000</span> </label>
	    </span>

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
			                <tr>
				                <td>12 hrs ago</td>
				                <td>100</td>
				                <td class="text-success">
					                Deposit to wallet
				                </td>
			                </tr>
			                <tr>
				                <td>12 hrs ago</td>
				                <td>100</td>
				                <td class="text-danger">
					                Purchased ODDs
				                </td>
			                </tr>
			                </tbody>
		                </table>
	                </div>
                </div>
            </div>
        </div>
    </div>
@endsection