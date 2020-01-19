@if(session('error'))
	<div class="alert alert-danger alert-dismissible col-sm-12 text-center">
		{!! session('error') !!}
	</div>
@endif

@if(session('success'))
	<div class="alert alert-success alert-dismissible col-sm-12 text-center">
		{{ session('success') }}
	</div>
@endif

@if(session('info'))
	<div class="alert alert-info alert-dismissible col-sm-12 text-center">
		{{ session('info') }}
	</div>
@endif

@if(session('warning'))
	<div class="alert alert-warning alert-dismissible col-sm-12 text-center">
		{{ session('warning') }}
	</div>
@endif

