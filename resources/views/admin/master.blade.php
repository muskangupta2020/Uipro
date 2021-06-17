<!doctype html>
<html lang="en" class="light">

	<!-- Re
<head>quired meta tags -->
	
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{url('assets/images/favicon-32x32.png')}}" type="image/png" />
	<!--plugins-->
	<link href="{{url('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{url('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{url('assets/plugins/highcharts/css/highcharts.css')}}" rel="stylesheet" />
	<link href="{{url('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
	<link href="{{url('assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{url('assets/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{url('assets/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{url('assets/css/app.css')}}" rel="stylesheet">
	<link href="{{url('assets/css/icons.css')}}" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{url('assets/css/dark-theme.css')}}" />
	<link rel="stylesheet" href="{{url('assets/css/semi-dark.css')}}" />
	<link rel="stylesheet" href="{{url('assets/css/header-colors.css')}}" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<title>Dashkote</title>
</head>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="{{url('../assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Uipro</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li >
					<a href="{{url('admin/index')}}" >
						<div class="parent-icon"><i style="font-size:24px" class="fa">&#xf0e4;</i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>

				</li>
				<li >
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="fa fa-tasks" aria-hidden="true"></i>
						</div>
						<div class="menu-title">Manage Plans</div>
					</a>
					<ul>
						<li> <a href="{{url('admin/create_plan')}}"><i class="bx bx-right-arrow-alt"></i>Create Plans</a>
						</li>
						<li> <a href="{{url('admin/display_plan')}}"><i class="bx bx-right-arrow-alt"></i>View/Edit Plans</a>
						</li>
						<li> <a href="{{url('admin/level_completion_income')}}"><i class="bx bx-right-arrow-alt"></i>Level Completion Income</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
						</div>
						<div class="menu-title">Product & Services</div>
					</a>
					<ul>
						<li> <a href="{{url('admin/manage_categories')}}"><i class="bx bx-right-arrow-alt"></i>Manage Categories</a>
						</li>
						<li> <a href="{{url('admin/add_product')}}"><i class="bx bx-right-arrow-alt"></i>Add Products</a>
						</li>
						<li> <a href="{{url('admin/add_variation')}}"><i class="bx bx-right-arrow-alt"></i>Manage Variation</a>
						</li>
						<li> <a href="{{url('admin/search_product')}}"><i class="bx bx-right-arrow-alt"></i>Search Product/Services</a>
						</li>
						<li> <a href="{{url('admin/pending_order')}}"><i class="bx bx-right-arrow-alt"></i>Pending Orders</a>
						</li>
						<li> <a href="{{url('admin/delivered_order')}}"><i class="bx bx-right-arrow-alt"></i>Delivered Orders</a>
						</li>
						<li> <a href="{{url('admin/completed_order')}}"><i class="bx bx-right-arrow-alt"></i>Completed Orders</a>
						</li>
						<li> <a href="{{url('admin/all_order')}}"><i class="bx bx-right-arrow-alt"></i>All Orders</a>
						</li>
					</ul>
				</li>
								<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="fa fa-users" aria-hidden="true"></i>
						</div>
						<div class="menu-title">Manage Members</div>
					</a>
					<ul>
						<li> <a href="{{url('admin/list_member')}}"><i class="bx bx-right-arrow-alt"></i>View/Manage Members</a>
						</li>
						<li> <a href="{{url('admin/search_member')}}"><i class="bx bx-right-arrow-alt"></i>Search Members</a>
						</li>
						<li> <a href="{{url('admin/blocked_member')}}"><i class="bx bx-right-arrow-alt"></i>Blocked & Activate Members</a>
						</li>
						<li> <a href="{{url('admin/latest_member')}}"><i class="bx bx-right-arrow-alt"></i>Latest Members</a>
						</li>
					</ul>
				</li>

								<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="fa fa-sitemap" aria-hidden="true"></i>
						</div>
						<div class="menu-title">Network</div>
					</a>

				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="fa fa-cubes" aria-hidden="true"></i>
						</div>
						<div class="menu-title">Manage e-pin</div>
					</a>

					<ul>
						<li> <a href="{{url('admin/generate_epin')}}"><i class="bx bx-right-arrow-alt"></i>Generate E-Pin</a>
						</li>
						<li> <a href="{{url('admin/request_epin')}}"><i class="bx bx-right-arrow-alt"></i>Request E-Pin</a>
						</li>
						<li> <a href="{{url('admin/unused_epin')}}"><i class="bx bx-right-arrow-alt"></i>Unused E-Pin</a>
						</li>
						<li> <a href="{{url('admin/used_epin')}}"><i class="bx bx-right-arrow-alt"></i>Used E-Pin</a>
						</li>
						<li> <a href="{{url('admin/transfer_epin')}}"><i class="bx bx-right-arrow-alt"></i>Transfer E-Pin</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="fa fa-money" aria-hidden="true"></i>
						</div>
						<div class="menu-title">Earrings & Payout</div>
					</a>
					<ul>
						<li> <a href="{{url('admin/view_earning')}}"><i class="bx bx-right-arrow-alt"></i>View Earnings</a>
						</li>
						<li> <a href="{{url('admin/search_earning')}}"><i class="bx bx-right-arrow-alt"></i>Search Earnings</a>
						</li>
						<li> <a href="{{url('admin/fund_request')}}"><i class="bx bx-right-arrow-alt"></i>Fund Request Withdrawal </a>
						</li>
						<li> <a href="{{url('admin/hold_payment')}}"><i class="bx bx-right-arrow-alt"></i>Hold Payments</a>
						</li>
						<li> <a href="{{url('admin/generate_payout')}}"><i class="bx bx-right-arrow-alt"></i>Generate Payout</a>
						</li>
					</ul>
				</li>
			    <li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="fa fa-cc-visa" aria-hidden="true"></i>
						</div>
						<div class="menu-title">Memeber E-Wallet</div>
					</a>
					<ul>
						<li> <a href="{{url('admin/view_wallet')}}"><i class="bx bx-right-arrow-alt"></i>View Wallet</a>
						</li>
						<li> <a href="{{url('admin/topup_wallet')}}"><i class="bx bx-right-arrow-alt"></i>Top up Wallet</a>
						</li>
						<li> <a href="{{url('admin/transfer_fund')}}"><i class="bx bx-right-arrow-alt"></i>
						Transfer Wallet Funds </a>
						</li>
						<li> <a href="{{url('admin/wallet_transaction')}}"><i class="bx bx-right-arrow-alt"></i>Wallet Transactions </a>
						</li>
						<li> <a href="{{url('admin/withdraw_fund')}}"><i class="bx bx-right-arrow-alt"></i>Withdraw Wallet Fund</a>
						</li>
					</ul>

				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="fa fa-university" aria-hidden="true"></i>
						</div>
						<div class="menu-title">Deposit</div>
					</a>

				</li>
								<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="fa fa-file" aria-hidden="true"></i>
						</div>
						<div class="menu-title">Reports</div>
					</a>

				</li>
								<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="fa fa-briefcase" aria-hidden="true"></i>
						</div>
						<div class="menu-title">Business Settings</div>
					</a>

				</li>
								<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="fa fa-users" aria-hidden="true"></i>
						</div>
						<div class="menu-title">KYC Compliance</div>
					</a>

				</li>
								<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="fa fa-gift" aria-hidden="true"></i>
						</div>
						<div class="menu-title">Rewards</div>
					</a>

				</li>
								<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="fa fa-bullhorn" aria-hidden="true"></i>
						</div>
						<div class="menu-title">Advt Income</div>
					</a>

				</li>
												<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="fa fa-print" aria-hidden="true"></i>
						</div>
						<div class="menu-title">Invoice</div>
					</a>

				</li>
												<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<div class="menu-title">Support Tickects</div>
					</a>

				</li>
												<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="fa fa-cog" aria-hidden="true"></i>
						</div>
						<div class="menu-title">My Profile & Settings</div>
					</a>

				</li>
				<li class="menu-label">Important Tools</li>
						<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="fa fa-sign-out" aria-hidden="true"></i>
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
                        <input type="text" class="form-control search-control" placeholder="Type to search..."> <span
                            class="position-absolute top-50 search-show translate-middle-y"><i
                                class='bx bx-search'></i></span>
                        <span class="position-absolute top-50 search-close translate-middle-y"><i
                                class='bx bx-x'></i></span>
                    </div>
                </div>
                <div class="top-menu ms-auto">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item mobile-search-icon">
                            <a class="nav-link" href="#"> <i class='bx bx-search'></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown dropdown-large">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false"> <i class='bx bx-category'></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <div class="row row-cols-3 g-3 p-3">
                                    <div class="col text-center">
                                        <div class="app-box mx-auto bg-gradient-cosmic text-white"><i
                                                class='bx bx-group'></i>
                                        </div>
                                        <div class="app-title">Teams</div>
                                    </div>
                                    <div class="col text-center">
                                        <div class="app-box mx-auto bg-gradient-burning text-white"><i
                                                class='bx bx-atom'></i>
                                        </div>
                                        <div class="app-title">Projects</div>
                                    </div>
                                    <div class="col text-center">
                                        <div class="app-box mx-auto bg-gradient-lush text-white"><i
                                                class='bx bx-shield'></i>
                                        </div>
                                        <div class="app-title">Tasks</div>
                                    </div>
                                    <div class="col text-center">
                                        <div class="app-box mx-auto bg-gradient-kyoto text-dark"><i
                                                class='bx bx-notification'></i>
                                        </div>
                                        <div class="app-title">Feeds</div>
                                    </div>
                                    <div class="col text-center">
                                        <div class="app-box mx-auto bg-gradient-blues text-dark"><i class='bx bx-file'></i>
                                        </div>
                                        <div class="app-title">Files</div>
                                    </div>
                                    <div class="col text-center">
                                        <div class="app-box mx-auto bg-gradient-moonlit text-white"><i
                                                class='bx bx-filter-alt'></i>
                                        </div>
                                        <div class="app-title">Alerts</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown dropdown-large">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span
                                    class="alert-count">7</span>
                                <i class='bx bx-bell'></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="javascript:;">
                                    <div class="msg-header">
                                        <p class="msg-header-title">Notifications</p>
                                        <p class="msg-header-clear ms-auto">Marks all as read</p>
                                    </div>
                                </a>
                                <div class="header-notifications-list">
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify bg-light-primary text-primary"><i class="bx bx-group"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">New Customers<span class="msg-time float-end">14 Sec
                                                        ago</span></h6>
                                                <p class="msg-info">5 new user registered</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify bg-light-danger text-danger"><i class="bx bx-cart-alt"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">New Orders <span class="msg-time float-end">2 min
                                                        ago</span></h6>
                                                <p class="msg-info">You have recived new orders</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify bg-light-success text-success"><i class="bx bx-file"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">24 PDF File<span class="msg-time float-end">19 min
                                                        ago</span></h6>
                                                <p class="msg-info">The pdf files generated</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify bg-light-warning text-warning"><i class="bx bx-send"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Time Response <span class="msg-time float-end">28 min
                                                        ago</span></h6>
                                                <p class="msg-info">5.1 min avarage time response</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify bg-light-info text-info"><i class="bx bx-home-circle"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">New Product Approved <span class="msg-time float-end">2
                                                        hrs ago</span></h6>
                                                <p class="msg-info">Your new product has approved</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify bg-light-danger text-danger"><i
                                                    class="bx bx-message-detail"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">New Comments <span class="msg-time float-end">4 hrs
                                                        ago</span></h6>
                                                <p class="msg-info">New customer comments recived</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify bg-light-success text-success"><i
                                                    class='bx bx-check-square'></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Your item is shipped <span class="msg-time float-end">5
                                                        hrs
                                                        ago</span></h6>
                                                <p class="msg-info">Successfully shipped your item</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify bg-light-primary text-primary"><i class='bx bx-user-pin'></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">New 24 authors<span class="msg-time float-end">1 day
                                                        ago</span></h6>
                                                <p class="msg-info">24 new authors joined last week</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify bg-light-warning text-warning"><i
                                                    class='bx bx-door-open'></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Defense Alerts <span class="msg-time float-end">2 weeks
                                                        ago</span></h6>
                                                <p class="msg-info">45% less alerts last 4 weeks</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <a href="javascript:;">
                                    <div class="text-center msg-footer">View All Notifications</div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown dropdown-large">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span
                                    class="alert-count">8</span>
                                <i class='bx bx-comment'></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="javascript:;">
                                    <div class="msg-header">
                                        <p class="msg-header-title">Messages</p>
                                        <p class="msg-header-clear ms-auto">Marks all as read</p>
                                    </div>
                                </a>
                                <div class="header-message-list">
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="user-online">
                                                <img src="https://via.placeholder.com/110x110" class="msg-avatar"
                                                    alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Daisy Anderson <span class="msg-time float-end">5 sec
                                                        ago</span></h6>
                                                <p class="msg-info">The standard chunk of lorem</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="user-online">
                                                <img src="https://via.placeholder.com/110x110" class="msg-avatar"
                                                    alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Althea Cabardo <span class="msg-time float-end">14
                                                        sec ago</span></h6>
                                                <p class="msg-info">Many desktop publishing packages</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="user-online">
                                                <img src="https://via.placeholder.com/110x110" class="msg-avatar"
                                                    alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Oscar Garner <span class="msg-time float-end">8 min
                                                        ago</span></h6>
                                                <p class="msg-info">Various versions have evolved over</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="user-online">
                                                <img src="https://via.placeholder.com/110x110" class="msg-avatar"
                                                    alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Katherine Pechon <span class="msg-time float-end">15
                                                        min ago</span></h6>
                                                <p class="msg-info">Making this the first true generator</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="user-online">
                                                <img src="https://via.placeholder.com/110x110" class="msg-avatar"
                                                    alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Amelia Doe <span class="msg-time float-end">22 min
                                                        ago</span></h6>
                                                <p class="msg-info">Duis aute irure dolor in reprehenderit</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="user-online">
                                                <img src="https://via.placeholder.com/110x110" class="msg-avatar"
                                                    alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Cristina Jhons <span class="msg-time float-end">2 hrs
                                                        ago</span></h6>
                                                <p class="msg-info">The passage is attributed to an unknown</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="user-online">
                                                <img src="https://via.placeholder.com/110x110" class="msg-avatar"
                                                    alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">James Caviness <span class="msg-time float-end">4 hrs
                                                        ago</span></h6>
                                                <p class="msg-info">The point of using Lorem</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="user-online">
                                                <img src="https://via.placeholder.com/110x110" class="msg-avatar"
                                                    alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Peter Costanzo <span class="msg-time float-end">6 hrs
                                                        ago</span></h6>
                                                <p class="msg-info">It was popularised in the 1960s</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="user-online">
                                                <img src="https://via.placeholder.com/110x110" class="msg-avatar"
                                                    alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">David Buckley <span class="msg-time float-end">2 hrs
                                                        ago</span></h6>
                                                <p class="msg-info">Various versions have evolved over</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="user-online">
                                                <img src="https://via.placeholder.com/110x110" class="msg-avatar"
                                                    alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Thomas Wheeler <span class="msg-time float-end">2 days
                                                        ago</span></h6>
                                                <p class="msg-info">If you are going to use a passage</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="user-online">
                                                <img src="https://via.placeholder.com/110x110" class="msg-avatar"
                                                    alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Johnny Seitz <span class="msg-time float-end">5 days
                                                        ago</span></h6>
                                                <p class="msg-info">All the Lorem Ipsum generators</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <a href="javascript:;">
                                    <div class="text-center msg-footer">View All Messages</div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="user-box dropdown">
                    <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://via.placeholder.com/110x110" class="user-img" alt="user avatar">
                        <div class="user-info ps-3">
                            <p class="user-name mb-0">Muskan Gupta</p>
                            <p class="designattion mb-0">Admin</p>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="javascript:;"><i class="bx bx-user"></i><span>Profile</span></a>
                        </li>
                        <li><a class="dropdown-item" href="javascript:;"><i class="bx bx-cog"></i><span>Settings</span></a>
                        </li>
                        <li><a class="dropdown-item" href="javascript:;"><i
                                    class='bx bx-home-circle'></i><span>Dashboard</span></a>
                        </li>
                        <li><a class="dropdown-item" href="javascript:;"><i
                                    class='bx bx-dollar-circle'></i><span>Earnings</span></a>
                        </li>
                        <li><a class="dropdown-item" href="javascript:;"><i
                                    class='bx bx-download'></i><span>Downloads</span></a>
                        </li>
                        <li>
                            <div class="dropdown-divider mb-0"></div>
                        </li>
                        <li><a class="dropdown-item" href="javascript:;"><i
                                    class='bx bx-log-out-circle'></i><span>Logout</span></a>
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
<!-- 		@yield('totalDown') -->
	 <script src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>
	
	 <script src="{{url('assets/js/jquery.min.js')}}"></script>
	<script src="{{url('assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{url('assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{url('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<script src="{{url('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
	<script src="{{url('assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
	<script src="{{url('assets/plugins/highcharts/js/highcharts.js')}}"></script>
	<script src="{{url('assets/plugins/highcharts/js/exporting.js')}}"></script>
	<script src="{{url('assets/plugins/highcharts/js/variable-pie.js')}}"></script>
	<script src="{{url('assets/plugins/highcharts/js/export-data.js')}}"></script>
	<script src="{{url('assets/plugins/highcharts/js/accessibility.js')}}"></script>
	<script src="{{url('assets/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
	<script src="{{url('assets/js/index.js')}}"></script> 
<!-- 	app JS
 -->	<script src="{{url('assets/js/app.js')}}"></script>
 	<!-- <script>
		new PerfectScrollbar('.customers-list');
		new PerfectScrollbar('.store-metrics');
		new PerfectScrollbar('.product-list');
	</script> -->
	<!-- @yield('script') -->
</body>

</html>