@extends('layouts.app')
@section('content')
	<!-- start page title -->
	<div class="row">
		<div class="col-12">
			<div class="page-title-box d-flex align-items-center justify-content-between">
				<h4 class="mb-0 font-size-18">Light Sidebar</h4>

				<div class="page-title-right">
					<ol class="breadcrumb m-0">
						<li class="breadcrumb-item"><a href="javascript: void(0);">Apaxy</a></li>
						<li class="breadcrumb-item"><a href="javascript: void(0);">Layouts</a></li>
						<li class="breadcrumb-item active">Light Sidebar</li>
					</ol>
				</div>

			</div>
		</div>
	</div>
	<!-- end page title -->

	<div class="row">
		<div class="col-sm-6 col-xl-3">
			<div class="card">
				<div class="card-body">
					<div class="media">
						<div class="media-body">
							<h5 class="font-size-14">Number of Sales</h5>
						</div>
						<div class="avatar-xs">
                                                <span class="avatar-title rounded-circle bg-primary">
                                                    <i class="dripicons-box"></i>
                                                </span>
						</div>
					</div>
					<h4 class="m-0 align-self-center">1,753</h4>
					<p class="mb-0 mt-3 text-muted"><span class="text-success">1.23 % <i class="mdi mdi-trending-up mr-1"></i></span> From previous period</p>
				</div>
			</div>
		</div>

		<div class="col-sm-6 col-xl-3">
			<div class="card">
				<div class="card-body">
					<div class="media">
						<div class="media-body">
							<h5 class="font-size-14">Sales Revenue</h5>
						</div>
						<div class="avatar-xs">
                                                <span class="avatar-title rounded-circle bg-primary">
                                                    <i class="dripicons-briefcase"></i>
                                                </span>
						</div>
					</div>
					<h4 class="m-0 align-self-center">$45,253</h4>
					<p class="mb-0 mt-3 text-muted"><span class="text-success">2.73 % <i class="mdi mdi-trending-up mr-1"></i></span> From previous period</p>
				</div>
			</div>
		</div>

		<div class="col-sm-6 col-xl-3">
			<div class="card">
				<div class="card-body">
					<div class="media">
						<div class="media-body">
							<h5 class="font-size-14">Average Price</h5>
						</div>
						<div class="avatar-xs">
                                                <span class="avatar-title rounded-circle bg-primary">
                                                    <i class="dripicons-tags"></i>
                                                </span>
						</div>
					</div>
					<h4 class="m-0 align-self-center">$12.74</h4>
					<p class="mb-0 mt-3 text-muted"><span class="text-danger">4.35 % <i class="mdi mdi-trending-down mr-1"></i></span> From previous period</p>
				</div>
			</div>
		</div>

		<div class="col-sm-6 col-xl-3">
			<div class="card">
				<div class="card-body">
					<div class="media">
						<div class="media-body">
							<h5 class="font-size-14">Product Sold</h5>
						</div>
						<div class="avatar-xs">
                                                <span class="avatar-title rounded-circle bg-primary">
                                                    <i class="dripicons-cart"></i>
                                                </span>
						</div>
					</div>
					<h4 class="m-0 align-self-center">20,781</h4>
					<p class="mb-0 mt-3 text-muted"><span class="text-success">7.21 % <i class="mdi mdi-trending-up mr-1"></i></span> From previous period</p>
				</div>
			</div>
		</div>

	</div>
	<!-- end row -->

	<div class="row">
		<div class="col-xl-8">
			<div class="card">
				<div class="card-body">
					<h4 class="header-title mb-4">Sales Analytics</h4>
					<div class="row justify-content-center">
						<div class="col-sm-4">
							<div class="text-center">
								<p>This Month</p>
								<h4>$ 46,543</h4>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="text-center">
								<p>This Week</p>
								<h4>$ 7,842</h4>
							</div>
						</div>
					</div>
					<div id="revenue-chart" class="apex-charts" dir="ltr"></div>
				</div>
			</div>
		</div>

		<div class="col-xl-4">
			<div class="card">
				<div class="card-body">
					<h4 class="header-title mb-4">Marketplaces Earning</h4>

					<div dir="ltr">

						<div class="slick-slider slider-for hori-timeline-desc pt-0">
							<div>
								<p class="font-size-16">Daily Earning</p>
								<h4 class="mb-4">$ 1,452</h4>
								<div id="earning-day-chart" class="apex-charts"></div>
							</div>
							<div>
								<p class="font-size-16">Weekly Earning</p>
								<h4 class="mb-4">$ 6,536</h4>
								<div id="earning-weekly-chart" class="apex-charts"></div>
							</div>
							<div>
								<p class="font-size-16">Monthly Earning</p>
								<h4 class="mb-4">$ 24,562</h4>
								<div id="earning-monthly-chart" class="apex-charts"></div>
							</div>
							<div>
								<p class="font-size-16">Yearly Earning</p>
								<h4 class="mb-4">$ 2,82,562</h4>
								<div id="earning-yearly-chart" class="apex-charts"></div>
							</div>
						</div>

						<div class="row justify-content-center mb-3">
							<div class="col-lg-11">
								<div class="slick-slider slider-nav hori-timeline-nav">
									<div class="slider-nav-item">
										<h5 class="nav-title font-size-14 mb-0">Day</h5>
									</div>
									<div class="slider-nav-item">
										<h5 class="nav-title font-size-14 mb-0">Week</h5>
									</div>
									<div class="slider-nav-item">
										<h5 class="nav-title font-size-14 mb-0">Month</h5>
									</div>
									<div class="slider-nav-item">
										<h5 class="nav-title font-size-14 mb-0">Year</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end row -->

	<div class="row">
		<div class="col-xl-4">
			<div class="card">
				<div class="card-body">
					<h4 class="header-title">Social Source</h4>
					<div id="social-source-chart" class="apex-charts" dir="ltr"></div>

					<div class="row">
						<div class="col-lg-6">
							<div class="text-center mt-2">
								<i class="mdi mdi-facebook h2 text-primary"></i>

								<p class="mt-3 mb-2">Facebook</p>
								<h5>1245</h5>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="text-center mt-2">
								<i class="mdi mdi-twitter h2 text-info"></i>

								<p class="mt-3 mb-2">Twitter</p>
								<h5>852</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4">
			<div class="card">
				<div class="card-body">
					<h4 class="header-title mb-4">Clients Review</h4>

					<ul class="verti-timeline list-unstyled mb-0" data-simplebar style="max-height: 393px;">
						<li class="event-list">
							<div class="media">
								<div class="avatar-xs mr-3">
                                                        <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                            D
                                                        </span>
								</div>
								<div class="media-body">
									<h5 class="font-size-14 mb-1">Danny Campbell</h5>
									<p class="text-muted mb-0 font-size-13">To an English person, it will seem like simplified.</p>
								</div>
							</div>
						</li>
						<li class="event-list">
							<div class="media">
								<div class="avatar-xs mr-3">
                                                        <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                            R
                                                        </span>
								</div>
								<div class="media-body">
									<h5 class="font-size-14 mb-1">Ralph Merkel</h5>
									<p class="text-muted mb-0 font-size-13">At solmen va esser necessi far sommun paroles.</p>
								</div>
							</div>
						</li>
						<li class="event-list">
							<div class="media">
								<div class="avatar-xs mr-3">
                                                        <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                            M
                                                        </span>
								</div>
								<div class="media-body">
									<h5 class="font-size-14 mb-1">Marcus Smith</h5>
									<p class="text-muted mb-0 font-size-13">Everyone realizes why a new common language.</p>
								</div>
							</div>
						</li>
						<li class="event-list">
							<div class="media">
								<div class="avatar-xs mr-3">
                                                        <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                            J
                                                        </span>
								</div>
								<div class="media-body">
									<h5 class="font-size-14 mb-1">James Denson</h5>
									<p class="text-muted mb-0 font-size-13">For science, music, sport, etc, europe vocabulary.</p>
								</div>
							</div>
						</li>

						<li class="event-list">
							<div class="media">
								<div class="avatar-xs mr-3">
                                                        <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                            D
                                                        </span>
								</div>
								<div class="media-body">
									<h5 class="font-size-14 mb-1">Danny Campbell</h5>
									<p class="text-muted mb-0 font-size-13">To an English person, it will seem like simplified.</p>
								</div>
							</div>
						</li>
						<li class="event-list">
							<div class="media">
								<div class="avatar-xs mr-3">
                                                        <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                            R
                                                        </span>
								</div>
								<div class="media-body">
									<h5 class="font-size-14 mb-1">Ralph Merkel</h5>
									<p class="text-muted mb-0 font-size-13">At solmen va esser necessi far sommun paroles.</p>
								</div>
							</div>
						</li>
						<li class="event-list">
							<div class="media">
								<div class="avatar-xs mr-3">
                                                        <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                            M
                                                        </span>
								</div>
								<div class="media-body">
									<h5 class="font-size-14 mb-1">Marcus Smith</h5>
									<p class="text-muted mb-0 font-size-13">Everyone realizes why a new common language.</p>
								</div>
							</div>
						</li>
						<li class="event-list">
							<div class="media">
								<div class="avatar-xs mr-3">
                                                        <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                            J
                                                        </span>
								</div>
								<div class="media-body">
									<h5 class="font-size-14 mb-1">James Denson</h5>
									<p class="text-muted mb-0 font-size-13">For science, music, sport, etc, europe vocabulary.</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="col-xl-4">
			<div class="card">
				<div class="card-body">
					<h4 class="header-title mb-4">Revenue by Location</h4>
					<div id="usa" style="height: 200px"></div>

					<div class="mt-5">
						<div class="position-relative">
							<div class="progress-label text-primary border-primary mb-2">California</div>
							<div class="progress progress-sm progress-animate mb-4">
								<div class="progress-bar" role="progressbar" style="width: 86%" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
									<div class="progress-value">
										<h5 class="mb-1 text-dark font-size-14">86%</h5>
									</div>
								</div>
							</div>
						</div>
						<div class="position-relative">
							<div class="progress-label text-primary border-primary mb-2">Montana</div>
							<div class="progress progress-sm progress-animate mb-4">
								<div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100">
									<div class="progress-value">
										<h5 class="mb-1 text-dark font-size-14">72%</h5>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="text-center">
						<a href="#" class="btn btn-primary btn-sm">View More</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end row -->


	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<h4 class="header-title mb-4">Latest Transaction</h4>

					<div class="table-responsive">
						<table class="table table-centered table-nowrap mb-0">
							<thead>
							<tr>
								<th scope="col"  style="width: 50px;">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheckall">
										<label class="custom-control-label" for="customCheckall"></label>
									</div>
								</th>
								<th scope="col"  style="width: 60px;"></th>
								<th scope="col">ID & Name</th>
								<th scope="col">Date</th>
								<th scope="col">Price</th>
								<th scope="col">Quantity</th>
								<th scope="col">Amount</th>
								<th scope="col">Status</th>
								<th scope="col">Action</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1"></label>
									</div>
								</td>
								<td>
									<img src="assets/images/users/avatar-2.jpg" alt="user" class="avatar-xs rounded-circle" />
								</td>
								<td>
									<p class="mb-1 font-size-12">#AP1234</p>
									<h5 class="font-size-15 mb-0">David Wiley</h5>
								</td>
								<td>02 Nov, 2019</td>
								<td>$ 1,234</td>
								<td>1</td>

								<td>
									$ 1,234
								</td>
								<td>
									<i class="mdi mdi-checkbox-blank-circle text-success mr-1"></i> Confirm
								</td>
								<td>
									<button type="button" class="btn btn-outline-success btn-sm">Edit</button>
									<button type="button" class="btn btn-outline-danger btn-sm">Cancel</button>
								</td>
							</tr>
							<tr>
								<td>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck2">
										<label class="custom-control-label" for="customCheck2"></label>
									</div>
								</td>
								<td>
									<div class="avatar-xs">
                                                                <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                                    W
                                                                </span>
									</div>
								</td>
								<td>
									<p class="mb-1 font-size-12">#AP1235</p>
									<h5 class="font-size-15 mb-0">Walter Jones</h5>
								</td>
								<td>04 Nov, 2019</td>
								<td>$ 822</td>
								<td>2</td>

								<td>
									$ 1,644
								</td>
								<td>
									<i class="mdi mdi-checkbox-blank-circle text-success mr-1"></i> Confirm
								</td>
								<td>
									<button type="button" class="btn btn-outline-success btn-sm">Edit</button>
									<button type="button" class="btn btn-outline-danger btn-sm">Cancel</button>
								</td>
							</tr>
							<tr>
								<td>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck3">
										<label class="custom-control-label" for="customCheck3"></label>
									</div>
								</td>
								<td>
									<img src="assets/images/users/avatar-3.jpg" alt="user" class="avatar-xs rounded-circle" />
								</td>
								<td>
									<p class="mb-1 font-size-12">#AP1236</p>
									<h5 class="font-size-15 mb-0">Eric Ryder</h5>
								</td>
								<td>05 Nov, 2019</td>
								<td>$ 1,153</td>
								<td>1</td>

								<td>
									$ 1,153
								</td>
								<td>
									<i class="mdi mdi-checkbox-blank-circle text-danger mr-1"></i> Cancel
								</td>
								<td>
									<button type="button" class="btn btn-outline-success btn-sm">Edit</button>
									<button type="button" class="btn btn-outline-danger btn-sm">Cancel</button>
								</td>
							</tr>
							<tr>
								<td>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck4">
										<label class="custom-control-label" for="customCheck4"></label>
									</div>
								</td>
								<td>
									<img src="assets/images/users/avatar-6.jpg" alt="user" class="avatar-xs rounded-circle" />
								</td>
								<td>
									<p class="mb-1 font-size-12">#AP1237</p>
									<h5 class="font-size-15 mb-0">Kenneth Jackson</h5>
								</td>
								<td>06 Nov, 2019</td>
								<td>$ 1,365</td>
								<td>1</td>

								<td>
									$ 1,365
								</td>
								<td>
									<i class="mdi mdi-checkbox-blank-circle text-success mr-1"></i> Confirm
								</td>
								<td>
									<button type="button" class="btn btn-outline-success btn-sm">Edit</button>
									<button type="button" class="btn btn-outline-danger btn-sm">Cancel</button>
								</td>
							</tr>
							<tr>
								<td>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck5">
										<label class="custom-control-label" for="customCheck5"></label>
									</div>
								</td>
								<td>
									<div class="avatar-xs">
                                                                <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                                    R
                                                                </span>
									</div>
								</td>
								<td>
									<p class="mb-1 font-size-12">#AP1238</p>
									<h5 class="font-size-15 mb-0">Ronnie Spiller</h5>
								</td>
								<td>08 Nov, 2019</td>
								<td>$ 740</td>
								<td>2</td>

								<td>
									$ 1,480
								</td>
								<td>
									<i class="mdi mdi-checkbox-blank-circle text-warning mr-1"></i> Pending
								</td>
								<td>
									<button type="button" class="btn btn-outline-success btn-sm">Edit</button>
									<button type="button" class="btn btn-outline-danger btn-sm">Cancel</button>
								</td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end row -->
@endsection