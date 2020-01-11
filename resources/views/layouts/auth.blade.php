<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>{{ env('APP_NAME')  }}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="Hullaa" name="description" />
	<meta content="Themesdesign" name="author" />
	<!-- App favicon -->
	<link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

	<!-- Bootstrap Css -->
	<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
	<!-- Icons Css -->
	<link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
	<!-- App Css-->
	<link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />

</head>

<body class="bg-primary bg-pattern">
<div class="account-pages">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="text-center mb-5">
					<a href="" class="logo"><img src="{{ asset('assets/images/logo-light.png') }}" height="24" alt="logo"></a>
					<h5 class="font-size-16 text-white-50 mb-4">{{ env('APP_TAG_LINE') }}</h5>
				</div>
			</div>
		</div>
		<!-- end row -->

		<div class="row justify-content-center">
			<div class="col-lg-5">
				<div class="card">
					<div class="card-body p-4">
						@yield('content')
					</div>
				</div>
			</div>
		</div>
		<!-- end row -->
	</div>
</div>

<!-- JAVASCRIPT -->
<script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>
