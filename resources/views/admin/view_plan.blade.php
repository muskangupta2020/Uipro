@extends('admin.master')
@section('content')
<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Manage Plan</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Details</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">Settings</button>
							<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<div class="">
					<div class="">
						<div class="container py-2">
							<h2 class="font-weight-light text-center text-muted py-3">	Manage Plan View</h2>
							<!-- timeline item 1 -->
							<!-- timeline item 3 -->
							<div class="row">
								<div class="col-auto text-center flex-column d-none d-sm-flex">
									<div class="row h-50">
										<div class="col border-end">&nbsp;</div>
										<div class="col">&nbsp;</div>
									</div>
									<h5 class="m-2">
									<span class="badge rounded-pill bg-light border">&nbsp;</span>
								</h5>
									<div class="row h-50">
										<div class="col border-end">&nbsp;</div>
										<div class="col">&nbsp;</div>
									</div>
								</div>
								<div class="col py-2">
									<div class="card radius-15">
										<div class="card-body">
											<div class="float-end text-muted"></div>
											<h4 class="card-title">Plan Detail</h4>
											<div class="row">
										<div class="col">
										<h5>plan_type:- {{$view->plan_type}}</h5>
										</div>
										<br><div class="col">
										<h5>Plan Name:- {{$view->plan_name}}</h5>
										</div></div>
										<br>
										<div class="row">
										<div class="col">
										<h5>Joining Fee (In Rs.)-Inclusive of Tax:- {{$view->joining_fee}}</h5>
										</div>
										<br>
										<div class="col">
										<h5>GST/Tax (in %):- {{$view->gst_tax}}</h5></div></div>
										<br>
										<div class="row">
										<div class="col">
										<h5>Direct Referral Commission(In Rs.):- {{$view->direct_referral_comission}}</h5></div>
										<br>
										<div class="col">
										<h5>Sponsor Matching Commission(In %):- {{$view->sponsor_matching_commission}}</h5></div></div>
										<br><div class="row">
										<div class="col">
										<h5>First Pair Matching Ratio:- {{$view->first_pair}}</h5></div>
										<br>
										<div class="col">
										<h5>Second Pair on wards Matching ratio:- {{$view->second_pair}}</h5></div></div>
										<br>
										<div class="row">
										<div class="col">
										<h5>First Pair Matching Commission(In Rs.):- {{$view->firstpair_matching_commission}}</h5></div>
										<br>
										<div class="col">
										<h5>Second Pair on wards Matching Commission(In Rs.):- {{$view->secondpair_matching_commission}}</h5></div></div>
										<br>
										<div class="row">
										<div class="col">
										<h5>Capping Period:(Weekly Payout:Sunday to Saturday):- {{$view->capping_period_weekly}}</h5></div>
										<br>
										<div class="col">
										<h5>Weak Leg Carry Forward::- {{$view->weak_leg}}</h5></div></div>
										<br>
										<div class="row">
										<div class="col">
										<h5>Capping Period(0 to No limit):- {{$view->capping_period_limit}}</h5></div>
										<br><div class="col">
										<h5>Capping Period In Rs.(0 to No limit):- {{$view->capping_period_in_rs}}</h5></div></div>
										<br><div class="row">
										<div class="col">
										<h5>Sponsor Pair Matching(in %):- {{$view->sponsor_pair_matching}}</h5></div>
										<br><div class="col">
										<h6>Product Sales Commission</h6><br>
										<h5>Configure Commission values as: - {{$view->configure_commission}}</h5>
										<br>
										<h5>Self Product Purchase Commission:- {{$view->select_product_purchase_commission}}</h5></div></div>
										<hr style="color: black"></hr>
										<h6>Product Purchase Commission</h6><br>
										<div class="row">
										<div class="col">
										<h5>level 1:- {{$view->level_1}}</h5></div>
										<br><div class="col">
										<h5>level_2:- {{$view->level_2}}</h5>
										</div></div>
										<br>
										<div class="row">
										<div class="col">
										<h5>level_3:- {{$view->level_3}}</h5></div>
										<br><div class="col">
										<h5>level_4:- {{$view->level_4}}</h5></div></div>
										<br><div class="row">
										<div class="col">
										<h5>level_5:- {{$view->level_5}}</h5></div>
										<br><div class="col">
										<h5>level_6:- {{$view->level_6}}</h5></div></div>
										<br><div class="row">
										<div class="col">
										<h5>level_7:- {{$view->level_7}}</h5></div>
										<br><div class="col">
										<h5>level_8:- {{$view->level_8}}</h5></div></div>
										<br><div class="row">
										<div class="col">
										<h5>level_9:- {{$view->level_9}}</h5></div>
										<br><div class="col">
										<h5>level_10:- {{$view->level_10}}</h5></div></div>
										<br><div class="row">
										<div class="col">
										<h5>level_11:- {{$view->level_11}}</h5></div>
										<br><div class="col">
										<h5>level_12:- {{$view->level_12}}</h5></div></div>
										<br><div class="row">
										<div class="col">
										<h5>level_13:- {{$view->level_13}}</h5></div>
										<br><div class="col">
										<h5>level_14:- {{$view->level_14}}</h5></div></div>
										<br>
										<div class="row">
										<div class="col">
										<h5 class="text-left">level_15:- {{$view->level_15}}</h5> </div> </div> <br>
										<div class="row">
										<div class="col">
										<h5>level Completion Income:- {{$view->level_completion_income}}</h5></div>	
										<div class="col">	<br>
										<h5>Invoice Name:- {{$view->invoice}}</h5></div></div>		<br>
										<div class="row">
										<div class="col">
										<h5>Image For Plan:- <img src="/upload/{{$view->image}}" width="100px" height="100px"></h5></div>
										<div class="col">		<br>
										<h5>Plan Description:- {{$view->description}}</h5></div></div>
										</div>
										</div>
										</div>
										</div>
										</div>
										</div>
										</div>
										</div>
										</div>
	@endsection