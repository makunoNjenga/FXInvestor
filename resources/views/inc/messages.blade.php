@if(session('error'))
	<div class="alert alert-danger alert-dismissible col-sm-12">
		{{ session('error') }}
	</div>
@endif

@if(session('success'))
	<div class="alert alert-success alert-dismissible col-sm-12">
		{{ session('success') }}
	</div>
@endif

@if(session('info'))
	<div class="alert alert-info alert-dismissible col-sm-12">
		{{ session('info') }}
	</div>
@endif

@if(session('warning'))
	<div class="alert alert-warning alert-dismissible col-sm-12">
		{{ session('warning') }}
	</div>
@endif

