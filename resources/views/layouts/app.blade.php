<?php
$user = auth()->user();
$notifications = \App\Notif::query()->where('user_id',$user->id)->orderByDesc('created_at')->get();
$notificationsCount = $notifications->where('read',false)->count();
$bettingOdds = (new \App\Http\Controllers\CacheController())->bettingOdds();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>{{ env('APP_NAME') }}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="finance money funds online" name="description"/>
	<meta content="Themesdesign" name="author"/>
	<!-- App favicon -->
	<link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

	<!-- slick css -->
	<link href="{{ asset('assets/libs/slick-slider/slick/slick.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ asset('assets/libs/slick-slider/slick/slick-theme.css') }}" rel="stylesheet" type="text/css"/>

	<!-- jvectormap -->
	<link href="{{ asset('assets/libs/jqvmap/jqvmap.min.css') }}" rel="stylesheet"/>

	<!-- Bootstrap Css -->
	<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
	<!-- Icons Css -->
	<link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css"/>
	<!-- App Css-->
	<link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css"/>
</head>

<body data-topbar="colored">

<div class="loader"></div>

<!-- Begin page -->
<div id="layout-wrapper">

	<header id="page-topbar">
		<div class="navbar-header">
			<div class="d-flex">
				<button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect"
				        id="vertical-menu-btn">
					<i class="mdi mdi-backburger"></i>
				</button>

			</div>

			<div class="d-flex">
				<div class="dropdown d-inline-block">
					<button type="button" onclick="markNotificationsAsRead()" class="btn header-item noti-icon waves-effect"
					        id="page-header-notifications-dropdown"
					        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="mdi mdi-bell-outline"></i>

						@if($notificationsCount>0)
						<span class="badge badge-danger badge-pill" id="badge-display">{{ number_format($notificationsCount) }}</span>
							@endif
					</button>
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
					     aria-labelledby="page-header-notifications-dropdown">
						<div class="p-3">
							<div class="row align-items-center">
								<div class="col">
									<h6 class="m-0 font-weight-medium text-uppercase"> Notifications </h6>
								</div>
								@if($notificationsCount>0)
								<div class="col-auto">
									<span class="badge badge-pill badge-danger" id="badge-display">New {{number_format($notificationsCount)}}</span>
								</div>
								@endif
							</div>
						</div>
						<div data-simplebar style="max-height: 230px;">
							@if($notificationsCount>0)
								@foreach($notifications as $notification)
							<a href="#" class="text-reset notification-item">
								<div class="media">
									<div class="avatar-xs mr-3">
                                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                    <i class="mdi mdi-cart"></i>
                                                </span>
									</div>
									<div class="media-body">
										<h6 class="mt-0 mb-1">{{$notification->title}}</h6>
										<div class="font-size-12 text-muted">
											<p class="mb-1">{{ $notification->message }}</p>
											<p class="mb-0"><i class="mdi mdi-clock-outline"></i> {{ \App\Http\Controllers\PageController::preciseTime($notification->created_at) }}</p>
										</div>
									</div>
								</div>
							</a>
								@endforeach
							@endif
						</div>
						@if($notificationsCount>0)
						<div class="p-2 border-top">
							<a class="btn-link btn btn-block text-center" href="javascript:void(0)">
								<i class="mdi mdi-arrow-down-circle mr-1"></i> Load More..
							</a>
						</div>
							@endif
					</div>
				</div>

			</div>
		</div>
	</header>

	<!-- ========== Left Sidebar Start ========== -->
	<div class="vertical-menu">

		<div data-simplebar class="h-100">

			<!--- Sidemenu -->
			<div id="sidebar-menu">
				<!-- Left Menu Start -->
				<ul class="metismenu list-unstyled" id="side-menu">
					<li class="menu-title">Finance</li>

					<li>
						<a href="{{ route('top.up') }}" class="waves-effect">
							<i class="mdi mdi-currency-usd"></i>
							<span>Top Up</span>
						</a>
					</li>

					<li>
						<a href="{{ route('statements') }}" class="waves-effect">
							<i class="mdi mdi-server"></i>
							<span>Statement</span>
						</a>
					</li>
					<li class="menu-title">Investments</li>

					<li>
						<a href="{{ route('sport.betting') }}" class="waves-effect">
							<i class="mdi mdi-bank"></i>
							@if($bettingOdds->count() > 0)
							<span class="badge badge-pill badge-success float-right">{{ number_format($bettingOdds->count()) }}</span>
							@endif
							<span>Invest</span>
						</a>
					</li>


					<li>
						<a href="{{ route('sport.betting') }}" class="waves-effect">
							<i class="mdi mdi-view-dashboard"></i>
							@if($bettingOdds->count() > 0)
							<span class="badge badge-pill badge-success float-right">{{ number_format($bettingOdds->count()) }}</span>
							@endif
							<span>Sport Betting</span>
						</a>
					</li>

					<li>
						<a href="{{ route('trading.signals') }}" class="waves-effect">
							<i class="mdi mdi-poll"></i><span
									class="badge badge-pill badge-success float-right">3</span>
							<span>Trading Signals</span>
						</a>
					</li>

					<li>
						<a href="{{ route('history') }}" class="waves-effect">
							<i class="mdi mdi-content-save"></i>
							<span>History</span>
						</a>
					</li>

					<li class="menu-title">Info Panel</li>

					<li>
						<a href="{{ route('profile') }}" class="waves-effect">
							<i class="mdi mdi-face-profile"></i>
							<span>Profile</span>
						</a>
					</li>
					<li>
						<a href="{{ route('contact.support') }}" class="waves-effect">
							<i class="mdi mdi-bullhorn"></i>
							<span>Contact Support</span>
						</a>
					</li>
					<div class="dropdown-divider"></div>
					<li>
						<a href="{{ route('custom.logout') }}" class="waves-effect">
							<i class="mdi mdi-logout"></i>
							<span>Logout</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- Left Sidebar End -->

	<!-- ============================================================== -->
	<!-- Start right Content here -->
	<!-- ============================================================== -->
	<div class="main-content">

		<div class="page-content">
			<div class="container-fluid">
				@yield('content')
			</div>
		</div>
		<footer class="footer footer-fixed">
			<div class="container-fluid">
				{{--<div class="col-sm-12">--}}
					<div class="row">
						<div class="col-sm-12">
							<a href="{{route('home')}}" ><i class="mdi mdi-home mdi-24px margin-right-20 "></i> </a>
							<a href="{{route('trading.signals')}}" ><i class="mdi mdi-bank mdi-24px margin-right-20"></i> </a>
							<a href="{{route('trading.signals')}}" ><i class="mdi mdi-chart-line mdi-24px margin-right-20"></i> </a>
							<a href="{{route('sport.betting')}}" ><i class="mdi mdi-soccer mdi-24px text-black"></i> </a>
						</div>
					</div>
				{{--</div>--}}
			</div>
		</footer>
	</div>
</div>

<div class="modal fade" id="loadingModal" role="dialog" style="margin-top: 300px;" data-backdrop="static"
     data-keyboard="false">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-body">
				<center><h4>Preparing information <i class="mdi mdi-loading mdi-spin mdi-36px text-primary" ></i> </h4></center>
			</div>
		</div>
	</div>
</div>

<script>
	window.onload = function(){
		$(".loader").fadeOut("slow");
	};

	$(window).load(function() {
		$(".loader").fadeOut("slow");
	});
</script>

<!-- JAVASCRIPT -->
<script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>

<!-- apexcharts -->
<script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<script src="{{ asset('assets/libs/slick-slider/slick/slick.min.js') }}"></script>

<!-- Jq vector map -->
<script src="{{ asset('assets/libs/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('assets/libs/jqvmap/maps/jquery.vmap.usa.js') }}"></script>

<script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script>

<script src="{{ asset('assets/js/app.js') }}"></script>

<script src="{{ asset('js/axios.js') }}"></script>
<script>
	function markNotificationsAsRead() {
		let userID = "{{ $user->id }}";

		axios.post('{{ route('notifications.read') }}', {
			userID: userID,
		}).then(function (response) {
			console.log(response);
			document.getElementById('badge-display').style.display="none";
		}).catch(function (error) {
				console.log(error);
			});
	}
	</script>

@include('sweetalert::alert')
</body>
</html>
