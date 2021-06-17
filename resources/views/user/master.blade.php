<!doctype html>
<html lang="en" class="light">

	<!-- Re
<head>quired meta tags -->
	
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{url('user/assets/images/favicon-32x32.png')}}" type="image/png" />
	<!--plugins-->
	<link href="{{url('user/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{url('user/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{url('user/assets/plugins/highcharts/css/highcharts.css')}}" rel="stylesheet" />
	<link href="{{url('user/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
	<link href="{{url('user/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{url('user/assets/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{url('user/assets/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{url('user/assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{url('user/assets/css/app.css')}}" rel="stylesheet">
	<link href="{{url('user/assets/css/icons.css')}}" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{url('user/assets/css/dark-theme.css')}}" />
	<link rel="stylesheet" href="{{url('user/assets/css/semi-dark.css')}}" />
	<link rel="stylesheet" href="{{url('user/assets/css/header-colors.css')}}" />
  	<title>Dashkote</title>
</head>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="{{url('../user/assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Uipro</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="{{url('user/index')}}" href="javascript:;">
						<div class="parent-icon"><i style="font-size:24px" class="fa">&#xf0e4;</i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>

				</li>
				<li>
					<a href="widgets.html" href="javascript:;">
						<div class="parent-icon"><i class="fa fa-file" aria-hidden="true"></i>
						</div>
						<div class="menu-title">Welcome Letter</div>
					</a>
				</li>
				<li>
				<li>
					<a href="widgets.html" href="javascript:;" >
						<div class="parent-icon"><i class="fa fa-print" aria-hidden="true"></i>
						</div>
						<div class="menu-title">My Invoices</div>
					</a>
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="fa fa-cubes" aria-hidden="true"></i>
						</div>
						<div class="menu-title">My e-Pins</div>
					</a>
					<ul>
						<li> <a href=""><i class="bx bx-right-arrow-alt"></i>Un-Used e-Pins</a>
						</li>
						<li> <a href=""><i class="bx bx-right-arrow-alt"></i>Used e-Pins</a>
						</li>
						<li> <a href=""><i class="bx bx-right-arrow-alt"></i>Transfer e-Pins</a>
						</li>
						<li> <a href=""><i class="bx bx-right-arrow-alt"></i>Generate e-Pins</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="fa fa-money" aria-hidden="true"></i>
						</div>
						<div class="menu-title">My Earnings</div>
					</a>
					<ul>
						<li> <a href=""><i class="bx bx-right-arrow-alt"></i>My Earnings</a>
						</li>
						<li> <a href=""><i class="bx bx-right-arrow-alt"></i>My Deductions</a>
						</li>
						<li> <a href=""><i class="bx bx-right-arrow-alt"></i>Search Earnings</a>
						</li>
						<li> <a href=""><i class="bx bx-right-arrow-alt"></i>My Rewards</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="fa fa-university" aria-hidden="true"></i>
						</div>
						<div class="menu-title">Deposit</div>
					</a>
					<ul>
						<li> <a href=""><i class="bx bx-right-arrow-alt"></i>Epin Deposit</a>
						</li>
						<li> <a href=""><i class="bx bx-right-arrow-alt"></i>Bank Deposit</a>
						</li>
						<li> <a href=""><i class="bx bx-right-arrow-alt"></i>Deposit History</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="fa fa-money" aria-hidden="true"></i>
						</div>
						<div class="menu-title">Withdraw</div>
					</a>
					<ul>
						<li> <a href=""><i class="bx bx-right-arrow-alt"></i>Withdraw Payouts</a>
						</li>
					</ul>
				</li>
								<li>
					<a class="has-arrow" href="{{url('user/registration')}}">
						<div class="parent-icon"><i class='bx bx-message-square-edit'></i>
						</div>
						<div class="menu-title">Registration Form</div>
					</a>
				</li>
				<li>
					<a class="has-arrow" href="{{url('user/vendor')}}">
						<div class="parent-icon"><i class='bx bx-message-square-edit'></i>
						</div>
						<div class="menu-title">Vendor Form</div>
					</a>
				</li>
								<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="fa fa-file" aria-hidden="true"></i>
						</div>
						<div class="menu-title">Reports</div>
					</a>
					<ul>
						<li> <a href=""><i class="bx bx-right-arrow-alt"></i>Wallet Transactions</a>
						</li>
						<li> <a href=""><i class="bx bx-right-arrow-alt"></i>Payout Report</a>
						</li>
					</ul>
				</li>
								<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="fa fa-sitemap" aria-hidden="true"></i>
						</div>
						<div class="menu-title">Tree & Downline</div>
					</a>
					<ul>
						<li> <a href=""><i class="bx bx-right-arrow-alt"></i>My Downline Tree</a>
						</li>
						<li> <a href=""><i class="bx bx-right-arrow-alt"></i>Direct Referral List</a>
						</li>
						<li> <a href=""><i class="bx bx-right-arrow-alt"></i>Add Member</a>
						</li>
					</ul>
				</li>
								<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
						</div>
						<div class="menu-title">My Purchases</div>
					</a>
					<ul>
						<li> <a href=""><i class="bx bx-right-arrow-alt"></i></a>
						</li>
						<li> <a href=""><i class="bx bx-right-arrow-alt"></i>Payout Report</a>
						</li>
					</ul>
				</li>

								
				<li class="menu-label">Important Tools</li>
						<li>
					<a class="has-arrow" href="{{url('/logout')}}">
						<div class="parent-icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
						</div>
						<div class="menu-title">Logout</div>
					</a>
				</li>			
			</ul>
					</div>
				</nav>
			</div>
			<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>
					<div class="top-menu-left d-none d-lg-block">
						<ul class="nav">
						  <li class="nav-item">
							<a class="nav-link" href="app-emailbox.html"><i class='bx bx-envelope'></i></a>
						  </li>
						  <li class="nav-item">
							<a class="nav-link" href="app-chat-box.html"><i class='bx bx-message'></i></a>
						  </li>
						  <li class="nav-item">
							<a class="nav-link" href="app-fullcalender.html"><i class='bx bx-calendar'></i></a>
						  </li>
						  <li class="nav-item">
							  <a class="nav-link" href="app-to-do.html"><i class='bx bx-check-square'></i></a>
						  </li>
					  </ul>
					 </div>
					<div class="search-bar flex-grow-1">
						<div class="position-relative search-bar-box">
							<input type="text" class="form-control search-control" placeholder="Type to search..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
							<span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
						</div>
					</div>
					<div class="user-box dropdown">
						<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="https://via.placeholder.com/110x110" class="user-img" alt="user avatar">
							<div class="user-info ps-3">
								<p class="user-name mb-0"></p>
								<p class="designattion mb-0">Admin</p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li><a class="dropdown-item" href="javascript:;"><i class="bx bx-user"></i><span>Profile</span></a>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i class="bx bx-cog"></i><span>Settings</span></a>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i class='bx bx-home-circle'></i><span>Dashboard</span></a>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i class='bx bx-dollar-circle'></i><span>Earnings</span></a>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i class='bx bx-download'></i><span>Downloads</span></a>
							</li>
							<li>
								<div class="dropdown-divider mb-0"></div>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--end header -->

@section("content")
@show

<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2021. All right reserved.</p>
		</footer>
	</div>
	<!--end wraprpe-->
	
		<!-- Bootstrap JS -->
	<script src="{{url('user/assets/js/bootstrap.bundle.min.js')}}"></script>
	<!--plugins-->
	<script src="{{url('user/assets/js/jquery.min.js')}}"></script>
	<script src="{{url('user/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{url('user/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{url('user/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<script src="{{url('user/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
	<script src="{{url('user/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
	<script src="{{url('user/assets/plugins/highcharts/js/highcharts.js')}}"></script>
	<script src="{{url('user/assets/plugins/highcharts/js/exporting.js')}}"></script>
	<script src="{{url('user/assets/plugins/highcharts/js/variable-pie.js')}}"></script>
	<script src="{{url('user/assets/plugins/highcharts/js/export-data.js')}}"></script>
	<script src="{{url('user/assets/plugins/highcharts/js/accessibility.js')}}"></script>
	<script src="{{url('user/assets/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
	<script src="{{url('user/assets/js/index.js')}}"></script>
	<!--app JS-->
	<script src="{{url('user/assets/js/app.js')}}"></script>
	<!-- <script>
		new PerfectScrollbar('.customers-list');
		new PerfectScrollbar('.store-metrics');
		new PerfectScrollbar('.product-list');
	</script> -->
</body>

</html>