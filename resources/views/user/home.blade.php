<!DOCTYPE html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Mintos I CRM Dashboard</title>
	<meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

	<!-- vector map CSS -->
	<link href="{{asset('dist/css/hencework.com/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" type="text/css" />

	<!-- Toggles CSS -->
	<link href="{{ asset('dist/css/hencework.com/toggles.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('dist/css/hencework.com/toggles-light.css') }}" rel="stylesheet" type="text/css">

	<!-- Toastr CSS -->
	<link href="{{ asset('dist/css/hencework.com/jquery.toast.min.css') }}" rel="stylesheet" type="text/css">

	<!-- Custom CSS -->
	<link href="{{ asset('dist/css/style.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
<!-- Preloader -->
<div class="preloader-it">
	<div class="loader-pendulums"></div>
</div>
<!-- /Preloader -->

<!-- HK Wrapper -->
<div class="hk-wrapper hk-vertical-nav">

	<!-- Top Navbar -->
	<nav class="navbar navbar-expand-xl navbar-dark fixed-top hk-navbar">
		<a id="navbar_toggle_btn" class="navbar-toggle-btn nav-link-hover" href="javascript:void(0);"><span class="feather-icon"><i data-feather="menu"></i></span></a>
		<a class="navbar-brand" href="dashboard1.html">
			<img class="brand-img d-inline-block" src="{{ assert('dist/img/logo-dark.png') }}" alt="brand" />
		</a>
		<ul class="navbar-nav hk-navbar-content">
			<li class="nav-item">
				<a id="navbar_search_btn" class="nav-link nav-link-hover" href="javascript:void(0);"><span class="feather-icon"><i data-feather="search"></i></span></a>
			</li>
			<li class="nav-item">
				<a id="settings_toggle_btn" class="nav-link nav-link-hover" href="javascript:void(0);"><span class="feather-icon"><i data-feather="settings"></i></span></a>
			</li>
			<li class="nav-item dropdown dropdown-notifications">
				<a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="feather-icon"><i data-feather="bell"></i></span><span class="badge-wrap"><span class="badge badge-primary badge-indicator badge-indicator-sm badge-pill pulse"></span></span></a>
				<div class="dropdown-menu dropdown-menu-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
					<h6 class="dropdown-header">Notifications <a href="javascript:void(0);" class="">View all</a></h6>
					<div class="notifications-nicescroll-bar">
						<a href="javascript:void(0);" class="dropdown-item">
							<div class="media">
								<div class="media-img-wrap">
									<div class="avatar avatar-sm">
										<img src="{{ asset('dist/img/avatar1.jpg') }}" alt="user" class="avatar-img rounded-circle">
									</div>
								</div>
								<div class="media-body">
									<div>
										<div class="notifications-text"><span class="text-dark text-capitalize">Evie Ono</span> accepted your invitation to join the team</div>
										<div class="notifications-time">12m</div>
									</div>
								</div>
							</div>
						</a>
						<div class="dropdown-divider"></div>
						<a href="javascript:void(0);" class="dropdown-item">
							<div class="media">
								<div class="media-img-wrap">
									<div class="avatar avatar-sm">
										<img src="{{ assert('dist/img/avatar2.jpg') }}" alt="user" class="avatar-img rounded-circle">
									</div>
								</div>
								<div class="media-body">
									<div>
										<div class="notifications-text">New message received from <span class="text-dark text-capitalize">Misuko Heid</span></div>
										<div class="notifications-time">1h</div>
									</div>
								</div>
							</div>
						</a>
						<div class="dropdown-divider"></div>
						<a href="javascript:void(0);" class="dropdown-item">
							<div class="media">
								<div class="media-img-wrap">
									<div class="avatar avatar-sm">
                                            <span class="avatar-text avatar-text-primary rounded-circle">
													<span class="initial-wrap"><span><i class="zmdi zmdi-account font-18"></i></span></span>
                                            </span>
									</div>
								</div>
								<div class="media-body">
									<div>
										<div class="notifications-text">You have a follow up with<span class="text-dark text-capitalize"> Mintos head</span> on <span class="text-dark text-capitalize">friday, dec 19</span> at <span class="text-dark">10.00 am</span></div>
										<div class="notifications-time">2d</div>
									</div>
								</div>
							</div>
						</a>
						<div class="dropdown-divider"></div>
						<a href="javascript:void(0);" class="dropdown-item">
							<div class="media">
								<div class="media-img-wrap">
									<div class="avatar avatar-sm">
                                            <span class="avatar-text avatar-text-success rounded-circle">
													<span class="initial-wrap"><span>A</span></span>
                                            </span>
									</div>
								</div>
								<div class="media-body">
									<div>
										<div class="notifications-text">Application of <span class="text-dark text-capitalize">Sarah Williams</span> is waiting for your approval</div>
										<div class="notifications-time">1w</div>
									</div>
								</div>
							</div>
						</a>
						<div class="dropdown-divider"></div>
						<a href="javascript:void(0);" class="dropdown-item">
							<div class="media">
								<div class="media-img-wrap">
									<div class="avatar avatar-sm">
                                            <span class="avatar-text avatar-text-warning rounded-circle">
													<span class="initial-wrap"><span><i class="zmdi zmdi-notifications font-18"></i></span></span>
                                            </span>
									</div>
								</div>
								<div class="media-body">
									<div>
										<div class="notifications-text">Last 2 days left for the project</div>
										<div class="notifications-time">15d</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
			</li>
			<li class="nav-item dropdown dropdown-authentication">
				<a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<div class="media">
						<div class="media-img-wrap">
							<div class="avatar">
								<img src="dist/img/avatar12.jpg" alt="user" class="avatar-img rounded-circle">
							</div>
							<span class="badge badge-success badge-indicator"></span>
						</div>
						<div class="media-body">
							<span>Madelyn Shane<i class="zmdi zmdi-chevron-down"></i></span>
						</div>
					</div>
				</a>
				<div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
					<a class="dropdown-item" href="profile.html"><i class="dropdown-icon zmdi zmdi-account"></i><span>Profile</span></a>
					<a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-card"></i><span>My balance</span></a>
					<a class="dropdown-item" href="inbox.html"><i class="dropdown-icon zmdi zmdi-email"></i><span>Inbox</span></a>
					<a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-settings"></i><span>Settings</span></a>
					<div class="dropdown-divider"></div>
					<div class="sub-dropdown-menu show-on-hover">
						<a href="#" class="dropdown-toggle dropdown-item no-caret"><i class="zmdi zmdi-check text-success"></i>Online</a>
						<div class="dropdown-menu open-left-side">
							<a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-check text-success"></i><span>Online</span></a>
							<a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-circle-o text-warning"></i><span>Busy</span></a>
							<a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-minus-circle-outline text-danger"></i><span>Offline</span></a>
						</div>
					</div>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-power"></i><span>Log out</span></a>
				</div>
			</li>
		</ul>
	</nav>
	<form role="search" class="navbar-search">
		<div class="position-relative">
			<a href="javascript:void(0);" class="navbar-search-icon"><span class="feather-icon"><i data-feather="search"></i></span></a>
			<input type="text" name="example-input1-group2" class="form-control" placeholder="Type here to Search">
			<a id="navbar_search_close" class="navbar-search-close" href="#"><span class="feather-icon"><i data-feather="x"></i></span></a>
		</div>
	</form>
	<!-- /Top Navbar -->

	<!-- Vertical Nav -->
	<nav class="hk-nav hk-nav-light">
		<a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
		<div class="nicescroll-bar">
			<div class="navbar-nav-wrap">
				<ul class="navbar-nav flex-column">
					<li class="nav-item active">
						<a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#dash_drp">
							<span class="feather-icon"><i data-feather="activity"></i></span>
							<span class="nav-link-text">Dashboard</span>
						</a>
						<ul id="dash_drp" class="nav flex-column collapse collapse-level-1">
							<li class="nav-item">
								<ul class="nav flex-column">
									<li class="nav-item active">
										<a class="nav-link" href="dashboard1.html">CRM</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="dashboard2.html">Project</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="dashboard3.html">Statistics</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="dashboard4.html">Classic</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="dashboard5.html">Analytics</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link link-with-badge" href="javascript:void(0);" data-toggle="collapse" data-target="#app_drp">
							<span class="feather-icon"><i data-feather="package"></i></span>
							<span class="nav-link-text">Application</span>
							<span class="badge badge-primary badge-pill">4</span>
						</a>
						<ul id="app_drp" class="nav flex-column collapse collapse-level-1">
							<li class="nav-item">
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link" href="chats.html">Chat</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="calendar.html">Calendar</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="email.html">Email</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="file-manager.html">File Manager</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#auth_drp">
							<span class="feather-icon"><i data-feather="zap"></i></span>
							<span class="nav-link-text">Authentication</span>
						</a>
						<ul id="auth_drp" class="nav flex-column collapse collapse-level-1">
							<li class="nav-item">
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#signup_drp">
											Sign Up
										</a>
										<ul id="signup_drp" class="nav flex-column collapse collapse-level-2">
											<li class="nav-item">
												<ul class="nav flex-column">
													<li class="nav-item">
														<a class="nav-link" href="signup.html">Cover</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="signup-simple.html">Simple</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#signin_drp">
											Login
										</a>
										<ul id="signin_drp" class="nav flex-column collapse collapse-level-2">
											<li class="nav-item">
												<ul class="nav flex-column">
													<li class="nav-item">
														<a class="nav-link" href="login.html">Cover</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="login-simple.html">Simple</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#recover_drp">
											Recover Password
										</a>
										<ul id="recover_drp" class="nav flex-column collapse collapse-level-2">
											<li class="nav-item">
												<ul class="nav flex-column">
													<li class="nav-item">
														<a class="nav-link" href="forgot-password.html">Forgot Password</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="reset-password.html">Reset Password</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="lock-screen.html">Lock Screen</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="404.html">Error 404</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="maintenance.html">Maintenance</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#pages_drp">
							<span class="feather-icon"><i data-feather="file-text"></i></span>
							<span class="nav-link-text">Pages</span>
						</a>
						<ul id="pages_drp" class="nav flex-column collapse collapse-level-1">
							<li class="nav-item">
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link" href="profile.html">Profile</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="invoice.html">Invoice</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="gallery.html">Gallery</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="activity.html">Activity</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="faq.html">Faq</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
				<hr class="nav-separator">
				<div class="nav-header">
					<span>User Interface</span>
					<span>UI</span>
				</div>
				<ul class="navbar-nav flex-column">
					<li class="nav-item">
						<a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#Components_drp">
							<span class="feather-icon"><i data-feather="layout"></i></span>
							<span class="nav-link-text">Components</span>
						</a>
						<ul id="Components_drp" class="nav flex-column collapse collapse-level-1">
							<li class="nav-item">
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link" href="alerts.html">Alerts</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="avatar.html">Avatar</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="badge.html">Badge</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="buttons.html">Buttons</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="cards.html">Cards</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="carousel.html">Carousel</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="collapse.html">Collapse</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="dropdowns.html">Dropdown</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="list-group.html">List Group</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="modal.html">Modal</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="nav.html">Nav</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="navbar.html">Navbar</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="nestable.html">Nestable</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="pagination.html">Pagination</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="popovers.html">Popovers</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="progress.html">Progress</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="tooltip.html">Tooltip</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#content_drp">
							<span class="feather-icon"><i data-feather="type"></i></span>
							<span class="nav-link-text">Content</span>
						</a>
						<ul id="content_drp" class="nav flex-column collapse collapse-level-1">
							<li class="nav-item">
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link" href="typography.html">Typography</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="images.html">Images</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="media-object.html">Media Object</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#utilities_drp">
							<span class="feather-icon"><i data-feather="anchor"></i></span>
							<span class="nav-link-text">Utilities</span>
						</a>
						<ul id="utilities_drp" class="nav flex-column collapse collapse-level-1">
							<li class="nav-item">
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link" href="background.html">Background</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="border.html">Border</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="colors.html">Colors</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="embeds.html">Embeds</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="icons.html">Icons</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="shadow.html">Shadow</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="sizing.html">Sizing</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="spacing.html">Spacing</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#forms_drp">
							<span class="feather-icon"><i data-feather="server"></i></span>
							<span class="nav-link-text">Forms</span>
						</a>
						<ul id="forms_drp" class="nav flex-column collapse collapse-level-1">
							<li class="nav-item">
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link" href="form-element.html">Form Elements</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="input-groups.html">Input Groups</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="form-layout.html">Form Layout</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="form-mask.html">Form Mask</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="form-validation.html">Form Validation</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="form-wizard.html">Form Wizard</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="file-upload.html">File Upload</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="editor.html">Editor</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#tables_drp">
							<span class="feather-icon"><i data-feather="list"></i></span>
							<span class="nav-link-text">Tables</span>
						</a>
						<ul id="tables_drp" class="nav flex-column collapse collapse-level-1">
							<li class="nav-item">
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link" href="basic-table.html">Basic Table</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="data-table.html">Data Table</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="responsive-table.html">Responsive Table</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="editable-table.html">Editable Table</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#charts_drp">
							<span class="feather-icon"><i data-feather="pie-chart"></i></span>
							<span class="nav-link-text">Charts</span>
						</a>
						<ul id="charts_drp" class="nav flex-column collapse collapse-level-1">
							<li class="nav-item">
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link" href="line-charts.html">Line Chart</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="area-charts.html">Area Chart</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="bar-charts.html">Bar Chart</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="pie-charts.html">Pie Chart</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="realtime-charts.html">Realtime Chart</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="mini-charts.html">Mini Chart</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#maps_drp">
							<span class="feather-icon"><i data-feather="map"></i></span>
							<span class="nav-link-text">Maps</span>
						</a>
						<ul id="maps_drp" class="nav flex-column collapse collapse-level-1">
							<li class="nav-item">
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link" href="google-map.html">Google Map</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="vector-map.html">Vector Map</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
				<hr class="nav-separator">
				<div class="nav-header">
					<span>Getting Started</span>
					<span>GS</span>
				</div>
				<ul class="navbar-nav flex-column">
					<li class="nav-item">
						<a class="nav-link" href="documentation.html" >
							<span class="feather-icon"><i data-feather="book"></i></span>
							<span class="nav-link-text">Documentation</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link link-with-badge" href="#">
							<span class="feather-icon"><i data-feather="eye"></i></span>
							<span class="nav-link-text">Changelog</span>
							<span class="badge badge-sm badge-danger badge-pill">v 1.0</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							<span class="feather-icon"><i data-feather="headphones"></i></span>
							<span class="nav-link-text">Support</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
	<!-- /Vertical Nav -->

	<!-- Setting Panel -->
	<div class="hk-settings-panel">
		<div class="nicescroll-bar position-relative">
			<div class="settings-panel-wrap">
				<div class="settings-panel-head">
					<img class="brand-img d-inline-block align-top" src="dist/img/logo-light.png" alt="brand" />
					<a href="javascript:void(0);" id="settings_panel_close" class="settings-panel-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
				</div>
				<hr>
				<h6 class="mb-5">Layout</h6>
				<p class="font-14">Choose your preferred layout</p>
				<div class="layout-img-wrap">
					<div class="row">
						<a href="javascript:void(0);" class="col-6 mb-30 active">
							<img class="rounded opacity-70" src="dist/img/layout1.png" alt="layout">
							<i class="zmdi zmdi-check"></i>
						</a>
						<a href="dashboard2.html" class="col-6 mb-30">
							<img class="rounded opacity-70" src="dist/img/layout2.png" alt="layout">
							<i class="zmdi zmdi-check"></i>
						</a>
						<a href="dashboard3.html" class="col-6 mb-30">
							<img class="rounded opacity-70" src="dist/img/layout3.png" alt="layout">
							<i class="zmdi zmdi-check"></i>
						</a>
						<a href="dashboard4.html" class="col-6 mb-30">
							<img class="rounded opacity-70" src="dist/img/layout4.png" alt="layout">
							<i class="zmdi zmdi-check"></i>
						</a>
						<a href="dashboard5.html" class="col-6">
							<img class="rounded opacity-70" src="dist/img/layout5.png" alt="layout">
							<i class="zmdi zmdi-check"></i>
						</a>
					</div>
				</div>
				<hr>
				<h6 class="mb-5">Navigation</h6>
				<p class="font-14">Menu comes in two modes: dark & light</p>
				<div class="button-list hk-nav-select mb-10">
					<button type="button" id="nav_light_select" class="btn btn-outline-primary btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span></button>
					<button type="button" id="nav_dark_select" class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
				</div>
				<hr>
				<h6 class="mb-5">Top Nav</h6>
				<p class="font-14">Choose your liked color mode</p>
				<div class="button-list hk-navbar-select mb-10">
					<button type="button" id="navtop_light_select" class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span></button>
					<button type="button" id="navtop_dark_select" class="btn btn-outline-primary btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
				</div>
				<hr>
				<div class="d-flex justify-content-between align-items-center">
					<h6>Scrollable Header</h6>
					<div class="toggle toggle-sm toggle-simple toggle-light toggle-bg-primary scroll-nav-switch"></div>
				</div>
				<button id="reset_settings" class="btn btn-primary btn-block btn-reset mt-30">Reset</button>
			</div>
		</div>
		<img class="d-none" src="dist/img/logo-light.png" alt="brand" />
		<img class="d-none" src="dist/img/logo-dark.png" alt="brand" />
	</div>
	<!-- /Setting Panel -->

	<!-- Main Content -->
	<div class="hk-pg-wrapper">
		<!-- Container -->
		<div class="container mt-xl-50 mt-sm-30 mt-15">
			<!-- Title -->
			<div class="hk-pg-header align-items-top">
				<div>
					<h2 class="hk-pg-title font-weight-600 mb-10">Customer Management</h2>
					<p>Questions about onboarding lead data? <a href="#">Learn more.</a></p>
				</div>
				<div class="d-flex w-500p">
					<select class="form-control custom-select custom-select-sm mr-15">
						<option selected="">Latest Products</option>
						<option value="1">CRM</option>
						<option value="2">Projects</option>
						<option value="3">Statistics</option>
					</select>
					<select class="form-control custom-select custom-select-sm mr-15">
						<option selected="">USA</option>
						<option value="1">USA</option>
						<option value="2">India</option>
						<option value="3">Australia</option>
					</select>
					<select class="form-control custom-select custom-select-sm">
						<option selected="">December</option>
						<option value="1">January</option>
						<option value="2">February</option>
						<option value="3">March</option>
						<option value="1">April</option>
						<option value="2">May</option>
						<option value="3">June</option>
						<option value="1">July</option>
						<option value="2">August</option>
						<option value="3">September</option>
						<option value="1">October</option>
						<option value="2">November</option>
						<option value="3">December</option>
					</select>
				</div>
			</div>
			<!-- /Title -->

			<!-- Row -->
			<div class="row">
				<div class="col-xl-12">
					<div class="hk-row">
						<div class="col-sm-12">
							<div class="card-group hk-dash-type-2">
								<div class="card card-sm">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-5">
											<div>
												<span class="d-block font-15 text-dark font-weight-500">Users</span>
											</div>
											<div>
												<span class="text-success font-14 font-weight-500">+10%</span>
											</div>
										</div>
										<div>
											<span class="d-block display-4 text-dark mb-5">168M</span>
											<small class="d-block">172,458 Target Users</small>
										</div>
									</div>
								</div>

								<div class="card card-sm">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-5">
											<div>
												<span class="d-block font-15 text-dark font-weight-500">Campaign Leads</span>
											</div>
											<div>
												<span class="text-success font-14 font-weight-500">+12.5%</span>
											</div>
										</div>
										<div>
											<span class="d-block display-4 text-dark mb-5"><span class="counter-anim">168,856</span></span>
											<small class="d-block">472,458 Targeted</small>
										</div>
									</div>
								</div>

								<div class="card card-sm">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-5">
											<div>
												<span class="d-block font-15 text-dark font-weight-500">New Contacts</span>
											</div>
											<div>
												<span class="text-warning font-14 font-weight-500">-2.8%</span>
											</div>
										</div>
										<div>
											<span class="d-block display-4 text-dark mb-5">73</span>
											<small class="d-block">100 Targeted</small>
										</div>
									</div>
								</div>

								<div class="card card-sm">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-5">
											<div>
												<span class="d-block font-15 text-dark font-weight-500">Win/Loss Ratio</span>
											</div>
											<div>
												<span class="text-danger font-14 font-weight-500">-75%</span>
											</div>
										</div>
										<div>
											<span class="d-block display-4 text-dark mb-5">48:65</span>
											<small class="d-block">42:32 Targeted</small>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="hk-row">
						<div class="col-lg-6">
							<div class="card card-refresh">
								<div class="refresh-container">
									<div class="loader-pendulums"></div>
								</div>
								<div class="card-header card-header-action">
									<h6>Youtube Subscribers</h6>
									<div class="d-flex align-items-center card-action-wrap">
										<a href="#" class="inline-block refresh mr-15">
											<i class="ion ion-md-radio-button-off"></i>
										</a>
										<div class="inline-block dropdown">
											<a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ion ion-md-more"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="hk-legend-wrap mb-20">
										<div class="hk-legend">
											<span class="d-10 bg-neon rounded-circle d-inline-block"></span><span>Desktop</span>
										</div>
										<div class="hk-legend">
											<span class="d-10 bg-neon-light-1 rounded-circle d-inline-block"></span><span>Mobile</span>
										</div>
									</div>
									<div id="area_chart" style="height: 240px;"></div>
								</div>
							</div>
							<div class="card">
								<div class="card-header card-header-action">
									<h6>Country Stats</h6>
									<div class="d-flex align-items-center card-action-wrap">
										<a href="#" class="inline-block refresh mr-15">
											<i class="ion ion-md-arrow-down"></i>
										</a>
										<a href="#" class="inline-block full-screen">
											<i class="ion ion-md-expand"></i>
										</a>
									</div>
								</div>
								<div class="card-body pa-0">
									<div class="pa-20">
										<div id="world_map_marker_1" style="height: 300px"></div>
									</div>
									<div class="table-wrap">
										<div class="table-responsive">
											<table class="table table-sm table-hover mb-0">
												<thead>
												<tr>
													<th class="w-25">Country</th>
													<th>Sessions</th>
													<th>Goals</th>
													<th>Goals Rate</th>
													<th>Bounce Rate</th>
												</tr>
												</thead>
												<tbody>
												<tr>
													<td>Canada</td>
													<td>55,555</td>
													<td>210</td>
													<td>2.46%</td>
													<td>0.26%</td>
												</tr>
												<tr>
													<td>India</td>
													<td>24,152</td>
													<td>135</td>
													<td>0.58%</td>
													<td>0.43%</td>
												</tr>
												<tr>
													<td>UK</td>
													<td>15,640</td>
													<td>324</td>
													<td>5.15%</td>
													<td>2.47%</td>
												</tr>
												<tr>
													<td>Botswana</td>
													<td>12,148</td>
													<td>854</td>
													<td>4.19%</td>
													<td>0.1%</td>
												</tr>
												<tr>
													<td>UAE</td>
													<td>11,258</td>
													<td>453</td>
													<td>8.15%</td>
													<td>0.14%</td>
												</tr>
												<tr>
													<td>Australia</td>
													<td>10,786</td>
													<td>376</td>
													<td>5.48%</td>
													<td>0.45%</td>
												</tr>
												<tr>
													<td>Phillipines</td>
													<td>9,485</td>
													<td>63</td>
													<td>3.51%</td>
													<td>0.9%</td>
												</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="card">
								<div class="card-header card-header-action">
									<h6>Linkedin Key Metrics</h6>
									<div class="d-flex align-items-center card-action-wrap">
										<a href="#" class="inline-block refresh mr-15">
											<i class="ion ion-md-arrow-down"></i>
										</a>
										<a href="#" class="inline-block full-screen mr-15">
											<i class="ion ion-md-expand"></i>
										</a>
										<a class="inline-block card-close" href="#" data-effect="fadeOut">
											<i class="ion ion-md-close"></i>
										</a>
									</div>
								</div>
								<div class="card-body pa-0">
									<div class="table-wrap">
										<div class="table-responsive">
											<table class="table table-sm table-hover mb-0">
												<thead>
												<tr>
													<th>Metrics</th>
													<th class="w-40">Period</th>
													<th class="w-25">Past</th>
													<th>Trend</th>
												</tr>
												</thead>
												<tbody>
												<tr>
													<td>Clicks</td>
													<td>
														<div class="progress-wrap lb-side-left mnw-125p">
															<div class="progress-lb-wrap">
																<label class="progress-label mnw-50p">1,184</label>
																<div class="progress progress-bar-rounded progress-bar-xs">
																	<div class="progress-bar bg-primary w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
														</div>
													</td>
													<td>1,234</td>
													<td><div id="sparkline_1"></div></td>
												</tr>
												<tr>
													<td>Visits</td>
													<td>
														<div class="progress-wrap lb-side-left mnw-125p">
															<div class="progress-lb-wrap">
																<label class="progress-label mnw-50p">1,425</label>
																<div class="progress progress-bar-rounded progress-bar-xs">
																	<div class="progress-bar bg-neon-light-3 w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
														</div>
													</td>
													<td>3,458</td>
													<td><div id="sparkline_2"></div></td>
												</tr>
												<tr>
													<td>Views</td>
													<td>
														<div class="progress-wrap lb-side-left mnw-125p">
															<div class="progress-lb-wrap">
																<label class="progress-label mnw-50p">5,623</label>
																<div class="progress progress-bar-rounded progress-bar-xs">
																	<div class="progress-bar bg-neon-light-4 w-60" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
														</div>
													</td>
													<td>53,637</td>
													<td><div id="sparkline_3"></div></td>
												</tr>
												<tr>
													<td>Returns</td>
													<td>
														<div class="progress-wrap lb-side-left mnw-125p">
															<div class="progress-lb-wrap">
																<label class="progress-label mnw-50p">4,851</label>
																<div class="progress progress-bar-rounded progress-bar-xs">
																	<div class="progress-bar bg-neon-light-1 w-55" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
														</div>
													</td>
													<td>20,596</td>
													<td><div id="sparkline_4"></div></td>
												</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header card-header-action">
									<h6>Users by Gendar & Age</h6>
									<div class="d-flex align-items-center card-action-wrap">
										<div class="inline-block dropdown">
											<a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ion ion-ios-more"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div id="m_chart_4" style="height:250px;"></div>
									<div class="hk-legend-wrap mt-20">
										<div class="hk-legend">
											<span class="d-10 bg-primary rounded-circle d-inline-block"></span><span>18-24</span>
										</div>
										<div class="hk-legend">
											<span class="d-10 bg-neon-light-1 rounded-circle d-inline-block"></span><span>25-34</span>
										</div>
										<div class="hk-legend">
											<span class="d-10 bg-neon-light-2 rounded-circle d-inline-block"></span><span>35-44</span>
										</div>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header card-header-action">
									<h6>Analytics Audience Matrics</h6>
									<div class="d-flex align-items-center card-action-wrap">
										<div class="inline-block dropdown">
											<a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ion ion-ios-more"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="hk-legend-wrap mb-20">
										<div class="hk-legend">
											<span class="d-10 bg-primary rounded-circle d-inline-block"></span><span>Users</span>
										</div>
										<div class="hk-legend">
											<span class="d-10 bg-neon-light-1 rounded-circle d-inline-block"></span><span>Sessions</span>
										</div>
									</div>
									<div id="e_chart_6" class="echart" style="height:225px;"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Row -->
		</div>
		<!-- /Container -->

		<!-- Footer -->
		<div class="hk-footer-wrap container">
			<footer class="footer">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<p>Pampered by<a href="https://hencework.com/" class="text-dark" target="_blank">Hencework</a> © 2019</p>
					</div>
					<div class="col-md-6 col-sm-12">
						<p class="d-inline-block">Follow us</p>
						<a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
						<a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-twitter"></i></span></a>
						<a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-google-plus"></i></span></a>
					</div>
				</div>
			</footer>
		</div>
		<!-- /Footer -->
	</div>
	<!-- /Main Content -->

</div>
<!-- /HK Wrapper -->

<!-- jQuery -->
<script src="https://hencework.com/theme/vendors4/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="https://hencework.com/theme/vendors4/popper.js/dist/umd/popper.min.js"></script>
<script src="https://hencework.com/theme/vendors4/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Slimscroll JavaScript -->
<script src="dist/js/jquery.slimscroll.js"></script>

<!-- Fancy Dropdown JS -->
<script src="dist/js/dropdown-bootstrap-extended.js"></script>

<!-- FeatherIcons JavaScript -->
<script src="dist/js/feather.min.js"></script>

<!-- Toggles JavaScript -->
<script src="https://hencework.com/theme/vendors4/jquery-toggles/toggles.min.js"></script>
<script src="dist/js/toggle-data.js"></script>

<!-- Counter Animation JavaScript -->
<script src="https://hencework.com/theme/vendors4/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="https://hencework.com/theme/vendors4/jquery.counterup/jquery.counterup.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="https://hencework.com/theme/vendors4/raphael/raphael.min.js"></script>
<script src="https://hencework.com/theme/vendors4/morris.js/morris.min.js"></script>

<!-- EChartJS JavaScript -->
<script src="https://hencework.com/theme/vendors4/echarts/dist/echarts-en.min.js"></script>

<!-- Sparkline JavaScript -->
<script src="https://hencework.com/theme/vendors4/jquery.sparkline/dist/jquery.sparkline.min.js"></script>

<!-- Vector Maps JavaScript -->
<script src="https://hencework.com/theme/vendors4/vectormap/jquery-jvectormap-2.0.3.min.js"></script>
<script src="https://hencework.com/theme/vendors4/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="dist/js/vectormap-data.js"></script>

<!-- Owl JavaScript -->
<script src="https://hencework.com/theme/vendors4/owl.carousel/dist/owl.carousel.min.js"></script>

<!-- Toastr JS -->
<script src="https://hencework.com/theme/vendors4/jquery-toast-plugin/dist/jquery.toast.min.js"></script>

<!-- Init JavaScript -->
<script src="dist/js/init.js"></script>
<script src="dist/js/dashboard-data.js"></script>

</body>


<!-- Mirrored from hencework.com/theme/mintos/dashboard1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jul 2019 07:41:03 GMT -->
</html><!DOCTYPE html>
<!--
Template Name: Mintos - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework
Contact: https://hencework.ticksy.com/

License: You must have a valid license purchased only from templatemonster to legally use the template for your project.
-->
<html lang="en">


<!-- Mirrored from hencework.com/theme/mintos/dashboard1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jul 2019 07:39:13 GMT -->
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Mintos I CRM Dashboard</title>
	<meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

	<!-- vector map CSS -->
	<link href="https://hencework.com/theme/vendors4/vectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" type="text/css" />

	<!-- Toggles CSS -->
	<link href="https://hencework.com/theme/vendors4/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
	<link href="https://hencework.com/theme/vendors4/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">

	<!-- Toastr CSS -->
	<link href="https://hencework.com/theme/vendors4/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">

	<!-- Custom CSS -->
	<link href="dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<!-- Preloader -->
<div class="preloader-it">
	<div class="loader-pendulums"></div>
</div>
<!-- /Preloader -->

<!-- HK Wrapper -->
<div class="hk-wrapper hk-vertical-nav">

	<!-- Top Navbar -->
	<nav class="navbar navbar-expand-xl navbar-dark fixed-top hk-navbar">
		<a id="navbar_toggle_btn" class="navbar-toggle-btn nav-link-hover" href="javascript:void(0);"><span class="feather-icon"><i data-feather="menu"></i></span></a>
		<a class="navbar-brand" href="dashboard1.html">
			<img class="brand-img d-inline-block" src="dist/img/logo-dark.png" alt="brand" />
		</a>
		<ul class="navbar-nav hk-navbar-content">
			<li class="nav-item">
				<a id="navbar_search_btn" class="nav-link nav-link-hover" href="javascript:void(0);"><span class="feather-icon"><i data-feather="search"></i></span></a>
			</li>
			<li class="nav-item">
				<a id="settings_toggle_btn" class="nav-link nav-link-hover" href="javascript:void(0);"><span class="feather-icon"><i data-feather="settings"></i></span></a>
			</li>
			<li class="nav-item dropdown dropdown-notifications">
				<a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="feather-icon"><i data-feather="bell"></i></span><span class="badge-wrap"><span class="badge badge-primary badge-indicator badge-indicator-sm badge-pill pulse"></span></span></a>
				<div class="dropdown-menu dropdown-menu-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
					<h6 class="dropdown-header">Notifications <a href="javascript:void(0);" class="">View all</a></h6>
					<div class="notifications-nicescroll-bar">
						<a href="javascript:void(0);" class="dropdown-item">
							<div class="media">
								<div class="media-img-wrap">
									<div class="avatar avatar-sm">
										<img src="dist/img/avatar1.jpg" alt="user" class="avatar-img rounded-circle">
									</div>
								</div>
								<div class="media-body">
									<div>
										<div class="notifications-text"><span class="text-dark text-capitalize">Evie Ono</span> accepted your invitation to join the team</div>
										<div class="notifications-time">12m</div>
									</div>
								</div>
							</div>
						</a>
						<div class="dropdown-divider"></div>
						<a href="javascript:void(0);" class="dropdown-item">
							<div class="media">
								<div class="media-img-wrap">
									<div class="avatar avatar-sm">
										<img src="dist/img/avatar2.jpg" alt="user" class="avatar-img rounded-circle">
									</div>
								</div>
								<div class="media-body">
									<div>
										<div class="notifications-text">New message received from <span class="text-dark text-capitalize">Misuko Heid</span></div>
										<div class="notifications-time">1h</div>
									</div>
								</div>
							</div>
						</a>
						<div class="dropdown-divider"></div>
						<a href="javascript:void(0);" class="dropdown-item">
							<div class="media">
								<div class="media-img-wrap">
									<div class="avatar avatar-sm">
                                            <span class="avatar-text avatar-text-primary rounded-circle">
													<span class="initial-wrap"><span><i class="zmdi zmdi-account font-18"></i></span></span>
                                            </span>
									</div>
								</div>
								<div class="media-body">
									<div>
										<div class="notifications-text">You have a follow up with<span class="text-dark text-capitalize"> Mintos head</span> on <span class="text-dark text-capitalize">friday, dec 19</span> at <span class="text-dark">10.00 am</span></div>
										<div class="notifications-time">2d</div>
									</div>
								</div>
							</div>
						</a>
						<div class="dropdown-divider"></div>
						<a href="javascript:void(0);" class="dropdown-item">
							<div class="media">
								<div class="media-img-wrap">
									<div class="avatar avatar-sm">
                                            <span class="avatar-text avatar-text-success rounded-circle">
													<span class="initial-wrap"><span>A</span></span>
                                            </span>
									</div>
								</div>
								<div class="media-body">
									<div>
										<div class="notifications-text">Application of <span class="text-dark text-capitalize">Sarah Williams</span> is waiting for your approval</div>
										<div class="notifications-time">1w</div>
									</div>
								</div>
							</div>
						</a>
						<div class="dropdown-divider"></div>
						<a href="javascript:void(0);" class="dropdown-item">
							<div class="media">
								<div class="media-img-wrap">
									<div class="avatar avatar-sm">
                                            <span class="avatar-text avatar-text-warning rounded-circle">
													<span class="initial-wrap"><span><i class="zmdi zmdi-notifications font-18"></i></span></span>
                                            </span>
									</div>
								</div>
								<div class="media-body">
									<div>
										<div class="notifications-text">Last 2 days left for the project</div>
										<div class="notifications-time">15d</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
			</li>
			<li class="nav-item dropdown dropdown-authentication">
				<a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<div class="media">
						<div class="media-img-wrap">
							<div class="avatar">
								<img src="dist/img/avatar12.jpg" alt="user" class="avatar-img rounded-circle">
							</div>
							<span class="badge badge-success badge-indicator"></span>
						</div>
						<div class="media-body">
							<span>Madelyn Shane<i class="zmdi zmdi-chevron-down"></i></span>
						</div>
					</div>
				</a>
				<div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
					<a class="dropdown-item" href="profile.html"><i class="dropdown-icon zmdi zmdi-account"></i><span>Profile</span></a>
					<a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-card"></i><span>My balance</span></a>
					<a class="dropdown-item" href="inbox.html"><i class="dropdown-icon zmdi zmdi-email"></i><span>Inbox</span></a>
					<a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-settings"></i><span>Settings</span></a>
					<div class="dropdown-divider"></div>
					<div class="sub-dropdown-menu show-on-hover">
						<a href="#" class="dropdown-toggle dropdown-item no-caret"><i class="zmdi zmdi-check text-success"></i>Online</a>
						<div class="dropdown-menu open-left-side">
							<a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-check text-success"></i><span>Online</span></a>
							<a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-circle-o text-warning"></i><span>Busy</span></a>
							<a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-minus-circle-outline text-danger"></i><span>Offline</span></a>
						</div>
					</div>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-power"></i><span>Log out</span></a>
				</div>
			</li>
		</ul>
	</nav>
	<form role="search" class="navbar-search">
		<div class="position-relative">
			<a href="javascript:void(0);" class="navbar-search-icon"><span class="feather-icon"><i data-feather="search"></i></span></a>
			<input type="text" name="example-input1-group2" class="form-control" placeholder="Type here to Search">
			<a id="navbar_search_close" class="navbar-search-close" href="#"><span class="feather-icon"><i data-feather="x"></i></span></a>
		</div>
	</form>
	<!-- /Top Navbar -->

	<!-- Vertical Nav -->
	<nav class="hk-nav hk-nav-light">
		<a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
		<div class="nicescroll-bar">
			<div class="navbar-nav-wrap">
				<ul class="navbar-nav flex-column">
					<li class="nav-item active">
						<a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#dash_drp">
							<span class="feather-icon"><i data-feather="activity"></i></span>
							<span class="nav-link-text">Dashboard</span>
						</a>
						<ul id="dash_drp" class="nav flex-column collapse collapse-level-1">
							<li class="nav-item">
								<ul class="nav flex-column">
									<li class="nav-item active">
										<a class="nav-link" href="dashboard1.html">CRM</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="dashboard2.html">Project</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="dashboard3.html">Statistics</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="dashboard4.html">Classic</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="dashboard5.html">Analytics</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link link-with-badge" href="javascript:void(0);" data-toggle="collapse" data-target="#app_drp">
							<span class="feather-icon"><i data-feather="package"></i></span>
							<span class="nav-link-text">Application</span>
							<span class="badge badge-primary badge-pill">4</span>
						</a>
						<ul id="app_drp" class="nav flex-column collapse collapse-level-1">
							<li class="nav-item">
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link" href="chats.html">Chat</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="calendar.html">Calendar</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="email.html">Email</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="file-manager.html">File Manager</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#auth_drp">
							<span class="feather-icon"><i data-feather="zap"></i></span>
							<span class="nav-link-text">Authentication</span>
						</a>
						<ul id="auth_drp" class="nav flex-column collapse collapse-level-1">
							<li class="nav-item">
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#signup_drp">
											Sign Up
										</a>
										<ul id="signup_drp" class="nav flex-column collapse collapse-level-2">
											<li class="nav-item">
												<ul class="nav flex-column">
													<li class="nav-item">
														<a class="nav-link" href="signup.html">Cover</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="signup-simple.html">Simple</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#signin_drp">
											Login
										</a>
										<ul id="signin_drp" class="nav flex-column collapse collapse-level-2">
											<li class="nav-item">
												<ul class="nav flex-column">
													<li class="nav-item">
														<a class="nav-link" href="login.html">Cover</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="login-simple.html">Simple</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#recover_drp">
											Recover Password
										</a>
										<ul id="recover_drp" class="nav flex-column collapse collapse-level-2">
											<li class="nav-item">
												<ul class="nav flex-column">
													<li class="nav-item">
														<a class="nav-link" href="forgot-password.html">Forgot Password</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="reset-password.html">Reset Password</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="lock-screen.html">Lock Screen</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="404.html">Error 404</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="maintenance.html">Maintenance</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#pages_drp">
							<span class="feather-icon"><i data-feather="file-text"></i></span>
							<span class="nav-link-text">Pages</span>
						</a>
						<ul id="pages_drp" class="nav flex-column collapse collapse-level-1">
							<li class="nav-item">
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link" href="profile.html">Profile</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="invoice.html">Invoice</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="gallery.html">Gallery</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="activity.html">Activity</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="faq.html">Faq</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
				<hr class="nav-separator">
				<div class="nav-header">
					<span>User Interface</span>
					<span>UI</span>
				</div>
				<ul class="navbar-nav flex-column">
					<li class="nav-item">
						<a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#Components_drp">
							<span class="feather-icon"><i data-feather="layout"></i></span>
							<span class="nav-link-text">Components</span>
						</a>
						<ul id="Components_drp" class="nav flex-column collapse collapse-level-1">
							<li class="nav-item">
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link" href="alerts.html">Alerts</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="avatar.html">Avatar</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="badge.html">Badge</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="buttons.html">Buttons</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="cards.html">Cards</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="carousel.html">Carousel</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="collapse.html">Collapse</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="dropdowns.html">Dropdown</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="list-group.html">List Group</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="modal.html">Modal</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="nav.html">Nav</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="navbar.html">Navbar</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="nestable.html">Nestable</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="pagination.html">Pagination</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="popovers.html">Popovers</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="progress.html">Progress</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="tooltip.html">Tooltip</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#content_drp">
							<span class="feather-icon"><i data-feather="type"></i></span>
							<span class="nav-link-text">Content</span>
						</a>
						<ul id="content_drp" class="nav flex-column collapse collapse-level-1">
							<li class="nav-item">
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link" href="typography.html">Typography</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="images.html">Images</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="media-object.html">Media Object</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#utilities_drp">
							<span class="feather-icon"><i data-feather="anchor"></i></span>
							<span class="nav-link-text">Utilities</span>
						</a>
						<ul id="utilities_drp" class="nav flex-column collapse collapse-level-1">
							<li class="nav-item">
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link" href="background.html">Background</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="border.html">Border</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="colors.html">Colors</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="embeds.html">Embeds</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="icons.html">Icons</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="shadow.html">Shadow</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="sizing.html">Sizing</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="spacing.html">Spacing</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#forms_drp">
							<span class="feather-icon"><i data-feather="server"></i></span>
							<span class="nav-link-text">Forms</span>
						</a>
						<ul id="forms_drp" class="nav flex-column collapse collapse-level-1">
							<li class="nav-item">
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link" href="form-element.html">Form Elements</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="input-groups.html">Input Groups</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="form-layout.html">Form Layout</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="form-mask.html">Form Mask</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="form-validation.html">Form Validation</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="form-wizard.html">Form Wizard</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="file-upload.html">File Upload</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="editor.html">Editor</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#tables_drp">
							<span class="feather-icon"><i data-feather="list"></i></span>
							<span class="nav-link-text">Tables</span>
						</a>
						<ul id="tables_drp" class="nav flex-column collapse collapse-level-1">
							<li class="nav-item">
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link" href="basic-table.html">Basic Table</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="data-table.html">Data Table</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="responsive-table.html">Responsive Table</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="editable-table.html">Editable Table</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#charts_drp">
							<span class="feather-icon"><i data-feather="pie-chart"></i></span>
							<span class="nav-link-text">Charts</span>
						</a>
						<ul id="charts_drp" class="nav flex-column collapse collapse-level-1">
							<li class="nav-item">
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link" href="line-charts.html">Line Chart</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="area-charts.html">Area Chart</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="bar-charts.html">Bar Chart</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="pie-charts.html">Pie Chart</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="realtime-charts.html">Realtime Chart</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="mini-charts.html">Mini Chart</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#maps_drp">
							<span class="feather-icon"><i data-feather="map"></i></span>
							<span class="nav-link-text">Maps</span>
						</a>
						<ul id="maps_drp" class="nav flex-column collapse collapse-level-1">
							<li class="nav-item">
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link" href="google-map.html">Google Map</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="vector-map.html">Vector Map</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
				<hr class="nav-separator">
				<div class="nav-header">
					<span>Getting Started</span>
					<span>GS</span>
				</div>
				<ul class="navbar-nav flex-column">
					<li class="nav-item">
						<a class="nav-link" href="documentation.html" >
							<span class="feather-icon"><i data-feather="book"></i></span>
							<span class="nav-link-text">Documentation</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link link-with-badge" href="#">
							<span class="feather-icon"><i data-feather="eye"></i></span>
							<span class="nav-link-text">Changelog</span>
							<span class="badge badge-sm badge-danger badge-pill">v 1.0</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							<span class="feather-icon"><i data-feather="headphones"></i></span>
							<span class="nav-link-text">Support</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
	<!-- /Vertical Nav -->

	<!-- Setting Panel -->
	<div class="hk-settings-panel">
		<div class="nicescroll-bar position-relative">
			<div class="settings-panel-wrap">
				<div class="settings-panel-head">
					<img class="brand-img d-inline-block align-top" src="dist/img/logo-light.png" alt="brand" />
					<a href="javascript:void(0);" id="settings_panel_close" class="settings-panel-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
				</div>
				<hr>
				<h6 class="mb-5">Layout</h6>
				<p class="font-14">Choose your preferred layout</p>
				<div class="layout-img-wrap">
					<div class="row">
						<a href="javascript:void(0);" class="col-6 mb-30 active">
							<img class="rounded opacity-70" src="dist/img/layout1.png" alt="layout">
							<i class="zmdi zmdi-check"></i>
						</a>
						<a href="dashboard2.html" class="col-6 mb-30">
							<img class="rounded opacity-70" src="dist/img/layout2.png" alt="layout">
							<i class="zmdi zmdi-check"></i>
						</a>
						<a href="dashboard3.html" class="col-6 mb-30">
							<img class="rounded opacity-70" src="dist/img/layout3.png" alt="layout">
							<i class="zmdi zmdi-check"></i>
						</a>
						<a href="dashboard4.html" class="col-6 mb-30">
							<img class="rounded opacity-70" src="dist/img/layout4.png" alt="layout">
							<i class="zmdi zmdi-check"></i>
						</a>
						<a href="dashboard5.html" class="col-6">
							<img class="rounded opacity-70" src="dist/img/layout5.png" alt="layout">
							<i class="zmdi zmdi-check"></i>
						</a>
					</div>
				</div>
				<hr>
				<h6 class="mb-5">Navigation</h6>
				<p class="font-14">Menu comes in two modes: dark & light</p>
				<div class="button-list hk-nav-select mb-10">
					<button type="button" id="nav_light_select" class="btn btn-outline-primary btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span></button>
					<button type="button" id="nav_dark_select" class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
				</div>
				<hr>
				<h6 class="mb-5">Top Nav</h6>
				<p class="font-14">Choose your liked color mode</p>
				<div class="button-list hk-navbar-select mb-10">
					<button type="button" id="navtop_light_select" class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span></button>
					<button type="button" id="navtop_dark_select" class="btn btn-outline-primary btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
				</div>
				<hr>
				<div class="d-flex justify-content-between align-items-center">
					<h6>Scrollable Header</h6>
					<div class="toggle toggle-sm toggle-simple toggle-light toggle-bg-primary scroll-nav-switch"></div>
				</div>
				<button id="reset_settings" class="btn btn-primary btn-block btn-reset mt-30">Reset</button>
			</div>
		</div>
		<img class="d-none" src="dist/img/logo-light.png" alt="brand" />
		<img class="d-none" src="dist/img/logo-dark.png" alt="brand" />
	</div>
	<!-- /Setting Panel -->

	<!-- Main Content -->
	<div class="hk-pg-wrapper">
		<!-- Container -->
		<div class="container mt-xl-50 mt-sm-30 mt-15">
			<!-- Title -->
			<div class="hk-pg-header align-items-top">
				<div>
					<h2 class="hk-pg-title font-weight-600 mb-10">Customer Management</h2>
					<p>Questions about onboarding lead data? <a href="#">Learn more.</a></p>
				</div>
				<div class="d-flex w-500p">
					<select class="form-control custom-select custom-select-sm mr-15">
						<option selected="">Latest Products</option>
						<option value="1">CRM</option>
						<option value="2">Projects</option>
						<option value="3">Statistics</option>
					</select>
					<select class="form-control custom-select custom-select-sm mr-15">
						<option selected="">USA</option>
						<option value="1">USA</option>
						<option value="2">India</option>
						<option value="3">Australia</option>
					</select>
					<select class="form-control custom-select custom-select-sm">
						<option selected="">December</option>
						<option value="1">January</option>
						<option value="2">February</option>
						<option value="3">March</option>
						<option value="1">April</option>
						<option value="2">May</option>
						<option value="3">June</option>
						<option value="1">July</option>
						<option value="2">August</option>
						<option value="3">September</option>
						<option value="1">October</option>
						<option value="2">November</option>
						<option value="3">December</option>
					</select>
				</div>
			</div>
			<!-- /Title -->

			<!-- Row -->
			<div class="row">
				<div class="col-xl-12">
					<div class="hk-row">
						<div class="col-sm-12">
							<div class="card-group hk-dash-type-2">
								<div class="card card-sm">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-5">
											<div>
												<span class="d-block font-15 text-dark font-weight-500">Users</span>
											</div>
											<div>
												<span class="text-success font-14 font-weight-500">+10%</span>
											</div>
										</div>
										<div>
											<span class="d-block display-4 text-dark mb-5">168M</span>
											<small class="d-block">172,458 Target Users</small>
										</div>
									</div>
								</div>

								<div class="card card-sm">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-5">
											<div>
												<span class="d-block font-15 text-dark font-weight-500">Campaign Leads</span>
											</div>
											<div>
												<span class="text-success font-14 font-weight-500">+12.5%</span>
											</div>
										</div>
										<div>
											<span class="d-block display-4 text-dark mb-5"><span class="counter-anim">168,856</span></span>
											<small class="d-block">472,458 Targeted</small>
										</div>
									</div>
								</div>

								<div class="card card-sm">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-5">
											<div>
												<span class="d-block font-15 text-dark font-weight-500">New Contacts</span>
											</div>
											<div>
												<span class="text-warning font-14 font-weight-500">-2.8%</span>
											</div>
										</div>
										<div>
											<span class="d-block display-4 text-dark mb-5">73</span>
											<small class="d-block">100 Targeted</small>
										</div>
									</div>
								</div>

								<div class="card card-sm">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-5">
											<div>
												<span class="d-block font-15 text-dark font-weight-500">Win/Loss Ratio</span>
											</div>
											<div>
												<span class="text-danger font-14 font-weight-500">-75%</span>
											</div>
										</div>
										<div>
											<span class="d-block display-4 text-dark mb-5">48:65</span>
											<small class="d-block">42:32 Targeted</small>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="hk-row">
						<div class="col-lg-6">
							<div class="card card-refresh">
								<div class="refresh-container">
									<div class="loader-pendulums"></div>
								</div>
								<div class="card-header card-header-action">
									<h6>Youtube Subscribers</h6>
									<div class="d-flex align-items-center card-action-wrap">
										<a href="#" class="inline-block refresh mr-15">
											<i class="ion ion-md-radio-button-off"></i>
										</a>
										<div class="inline-block dropdown">
											<a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ion ion-md-more"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="hk-legend-wrap mb-20">
										<div class="hk-legend">
											<span class="d-10 bg-neon rounded-circle d-inline-block"></span><span>Desktop</span>
										</div>
										<div class="hk-legend">
											<span class="d-10 bg-neon-light-1 rounded-circle d-inline-block"></span><span>Mobile</span>
										</div>
									</div>
									<div id="area_chart" style="height: 240px;"></div>
								</div>
							</div>
							<div class="card">
								<div class="card-header card-header-action">
									<h6>Country Stats</h6>
									<div class="d-flex align-items-center card-action-wrap">
										<a href="#" class="inline-block refresh mr-15">
											<i class="ion ion-md-arrow-down"></i>
										</a>
										<a href="#" class="inline-block full-screen">
											<i class="ion ion-md-expand"></i>
										</a>
									</div>
								</div>
								<div class="card-body pa-0">
									<div class="pa-20">
										<div id="world_map_marker_1" style="height: 300px"></div>
									</div>
									<div class="table-wrap">
										<div class="table-responsive">
											<table class="table table-sm table-hover mb-0">
												<thead>
												<tr>
													<th class="w-25">Country</th>
													<th>Sessions</th>
													<th>Goals</th>
													<th>Goals Rate</th>
													<th>Bounce Rate</th>
												</tr>
												</thead>
												<tbody>
												<tr>
													<td>Canada</td>
													<td>55,555</td>
													<td>210</td>
													<td>2.46%</td>
													<td>0.26%</td>
												</tr>
												<tr>
													<td>India</td>
													<td>24,152</td>
													<td>135</td>
													<td>0.58%</td>
													<td>0.43%</td>
												</tr>
												<tr>
													<td>UK</td>
													<td>15,640</td>
													<td>324</td>
													<td>5.15%</td>
													<td>2.47%</td>
												</tr>
												<tr>
													<td>Botswana</td>
													<td>12,148</td>
													<td>854</td>
													<td>4.19%</td>
													<td>0.1%</td>
												</tr>
												<tr>
													<td>UAE</td>
													<td>11,258</td>
													<td>453</td>
													<td>8.15%</td>
													<td>0.14%</td>
												</tr>
												<tr>
													<td>Australia</td>
													<td>10,786</td>
													<td>376</td>
													<td>5.48%</td>
													<td>0.45%</td>
												</tr>
												<tr>
													<td>Phillipines</td>
													<td>9,485</td>
													<td>63</td>
													<td>3.51%</td>
													<td>0.9%</td>
												</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="card">
								<div class="card-header card-header-action">
									<h6>Linkedin Key Metrics</h6>
									<div class="d-flex align-items-center card-action-wrap">
										<a href="#" class="inline-block refresh mr-15">
											<i class="ion ion-md-arrow-down"></i>
										</a>
										<a href="#" class="inline-block full-screen mr-15">
											<i class="ion ion-md-expand"></i>
										</a>
										<a class="inline-block card-close" href="#" data-effect="fadeOut">
											<i class="ion ion-md-close"></i>
										</a>
									</div>
								</div>
								<div class="card-body pa-0">
									<div class="table-wrap">
										<div class="table-responsive">
											<table class="table table-sm table-hover mb-0">
												<thead>
												<tr>
													<th>Metrics</th>
													<th class="w-40">Period</th>
													<th class="w-25">Past</th>
													<th>Trend</th>
												</tr>
												</thead>
												<tbody>
												<tr>
													<td>Clicks</td>
													<td>
														<div class="progress-wrap lb-side-left mnw-125p">
															<div class="progress-lb-wrap">
																<label class="progress-label mnw-50p">1,184</label>
																<div class="progress progress-bar-rounded progress-bar-xs">
																	<div class="progress-bar bg-primary w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
														</div>
													</td>
													<td>1,234</td>
													<td><div id="sparkline_1"></div></td>
												</tr>
												<tr>
													<td>Visits</td>
													<td>
														<div class="progress-wrap lb-side-left mnw-125p">
															<div class="progress-lb-wrap">
																<label class="progress-label mnw-50p">1,425</label>
																<div class="progress progress-bar-rounded progress-bar-xs">
																	<div class="progress-bar bg-neon-light-3 w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
														</div>
													</td>
													<td>3,458</td>
													<td><div id="sparkline_2"></div></td>
												</tr>
												<tr>
													<td>Views</td>
													<td>
														<div class="progress-wrap lb-side-left mnw-125p">
															<div class="progress-lb-wrap">
																<label class="progress-label mnw-50p">5,623</label>
																<div class="progress progress-bar-rounded progress-bar-xs">
																	<div class="progress-bar bg-neon-light-4 w-60" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
														</div>
													</td>
													<td>53,637</td>
													<td><div id="sparkline_3"></div></td>
												</tr>
												<tr>
													<td>Returns</td>
													<td>
														<div class="progress-wrap lb-side-left mnw-125p">
															<div class="progress-lb-wrap">
																<label class="progress-label mnw-50p">4,851</label>
																<div class="progress progress-bar-rounded progress-bar-xs">
																	<div class="progress-bar bg-neon-light-1 w-55" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
														</div>
													</td>
													<td>20,596</td>
													<td><div id="sparkline_4"></div></td>
												</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header card-header-action">
									<h6>Users by Gendar & Age</h6>
									<div class="d-flex align-items-center card-action-wrap">
										<div class="inline-block dropdown">
											<a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ion ion-ios-more"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div id="m_chart_4" style="height:250px;"></div>
									<div class="hk-legend-wrap mt-20">
										<div class="hk-legend">
											<span class="d-10 bg-primary rounded-circle d-inline-block"></span><span>18-24</span>
										</div>
										<div class="hk-legend">
											<span class="d-10 bg-neon-light-1 rounded-circle d-inline-block"></span><span>25-34</span>
										</div>
										<div class="hk-legend">
											<span class="d-10 bg-neon-light-2 rounded-circle d-inline-block"></span><span>35-44</span>
										</div>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header card-header-action">
									<h6>Analytics Audience Matrics</h6>
									<div class="d-flex align-items-center card-action-wrap">
										<div class="inline-block dropdown">
											<a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ion ion-ios-more"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="hk-legend-wrap mb-20">
										<div class="hk-legend">
											<span class="d-10 bg-primary rounded-circle d-inline-block"></span><span>Users</span>
										</div>
										<div class="hk-legend">
											<span class="d-10 bg-neon-light-1 rounded-circle d-inline-block"></span><span>Sessions</span>
										</div>
									</div>
									<div id="e_chart_6" class="echart" style="height:225px;"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Row -->
		</div>
		<!-- /Container -->

		<!-- Footer -->
		<div class="hk-footer-wrap container">
			<footer class="footer">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<p>Pampered by<a href="https://hencework.com/" class="text-dark" target="_blank">Hencework</a> © 2019</p>
					</div>
					<div class="col-md-6 col-sm-12">
						<p class="d-inline-block">Follow us</p>
						<a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
						<a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-twitter"></i></span></a>
						<a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-google-plus"></i></span></a>
					</div>
				</div>
			</footer>
		</div>
		<!-- /Footer -->
	</div>
	<!-- /Main Content -->

</div>
<!-- /HK Wrapper -->

<!-- jQuery -->
<script src="{{ asset('dist/css/hencework.com/js/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('dist/css/hencework.com/js/popper.min.js') }}"></script>
<script src="{{ asset('dist/css/hencework.com/js/bootstrap.min.js') }}"></script>

<!-- Slimscroll JavaScript -->
<script src="{{ asset('dist/js/jquery.slimscroll.js') }}"></script>

<!-- Fancy Dropdown JS -->
<script src="{{ asset('dist/js/dropdown-bootstrap-extended.js') }}"></script>

<!-- FeatherIcons JavaScript -->
<script src="{{ asset('dist/js/feather.min.js') }}"></script>

<!-- Toggles JavaScript -->
<script src="{{ asset('dist/css/hencework.com/js/toggles.min.js') }}"></script>
<script src="{{ asset('dist/js/toggle-data.js') }}"></script>

<!-- Counter Animation JavaScript -->
<script src="{{ asset('dist/css/hencework.com/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('dist/css/hencework.com/js/jquery.counterup.min.js') }}"></script>

<!-- Morris Charts JavaScript -->
<script src="{{ asset('dist/css/hencework.com/js/raphael.js') }}"></script>
<script src="{{ asset('dist/css/hencework.com/js/morris.js') }}"></script>

<!-- EChartJS JavaScript -->
<script src="{{ asset('dist/css/hencework.com/js/echarts-en.js') }}"></script>

<!-- Sparkline JavaScript -->
<script src="{{ asset('dist/css/hencework.com/js/jquery.sparkline.min.js') }}"></script>

<!-- Vector Maps JavaScript -->
<script src="{{ asset('dist/css/hencework.com/js/jquey-vectormap-2.0.3.min.js') }}"></script>
<script src="{{ asset('dist/css/hencework.com/js/world-mill.js') }}"></script>
<script src="{{ asset('dist/js/vectormap-data.js') }}"></script>

<!-- Owl JavaScript -->
<script src="{{ asset('dist/css/hencework.com/js/carousel.js') }}"></script>

<!-- Toastr JS -->
<script src="{{ asset('dist/css/hencework.com/js/jquery.toast.min.js') }}"></script>

<!-- Init JavaScript -->
<script src="{{ asset('dist/js/init.js') }}"></script>
<script src="{{ asset('dist/js/dashboard-data.js') }}"></script>

</body>
</html>