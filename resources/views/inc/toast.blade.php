@if(session('error'))
	<script>
		toast('Test','error');
	</script>
@endif

@if(session('success'))
	<script>
		toast('Test','success');
	</script>
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

