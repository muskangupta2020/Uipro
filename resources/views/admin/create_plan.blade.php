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
								<li class="breadcrumb-item active" aria-current="page">Create Plan</li>
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
				<div class="row">
					<div class="col-xl-7 mx-auto">
						<h6 class="mb-0 text-uppercase">Manage Plan Form</h6>
						<hr/>
						<div class="card border-top border-0 border-4 border-primary">
							<div class="card-body p-5">
								<div class="card-title d-flex align-items-center">
									<div><i class="bx bxs-user me-1 font-22 text-primary"></i>
									</div>
									<h5 class="mb-0 text-primary">Create Plan</h5>
								</div>
								<hr>
								<form class="row g-3" method="post" action="{{url('admin/create_plan/save')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="col-md-7">
                    <label for="inputState" class="form-label">Plan Type</label>
                    <select id="inputState" class="form-select" name="plan_type">
                      <option selected>Registration</option>
                      <option>Non Registration</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="inputFirstName" class="form-label">Plan Name</label>
                    <input type="text" class="form-control" id="inputFirstName" name="plan_name">
                  </div>
                  <div class="col-md-6">
                    <label for="inputLastName" class="form-label">Joining Fee (In Rs.)-Inclusive of Tax</label>
                    <input type="text" class="form-control" id="inputLastName" name="joining_fee">
                  </div>
                  <div class="col-7">
                    <label for="inputAddress" class="form-label">GST/Tax (in %)</label>
                    <input class="form-control" id="inputAddress" placeholder="" name="gst_tax"></input>
                  </div>
                  <div class="col-md-6">
                    <label for="inputEmail" class="form-label">Direct Referral Commission(In Rs.)</label>
                    <input type="text" class="form-control" id="inputEmail" name="direct_referral_comission">
                  </div>
                  <div class="col-md-6">
                    <label for="inputPassword" class="form-label">Sponsor Matching Commission(In %)</label>
                    <input type="text" class="form-control" id="inputPassword" name="sponsor_matching_commission">
                  </div>
                  <div class="col-md-6">
                    <label for="inputState" class="form-label">First Pair Matching Ratio</label>
                    <select id="inputState" class="form-select" name="first_pair">
                      <option selected>1:2/2:1</option>
                      <option>2:1</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="inputState" class="form-label">Second Pair on wards Matching ratio</label>
                    <select id="inputState" class="form-select" name="second_pair">
                      <option selected>1:1</option>
                      <option>1:2</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="inputEmail" class="form-label">First Pair Matching Commission(In Rs.)</label>
                    <input type="text" class="form-control" id="inputEmail" name="firstpair_matching_commission">
                  </div>
                  <div class="col-md-6">
                    <label for="inputPassword" class="form-label">Second Pair on wards Matching Commission(In Rs.)</label>
                    <input type="text" class="form-control" id="inputPassword" name="secondpair_matching_commission">
                  </div>
                  <div class="col-md-6">
                    <label for="inputState" class="form-label">Capping Period:(Weekly Payout:Sunday to Saturday)</label>
                    <select id="inputState" class="form-select" name="capping_period_weekly">
                      <option selected>Daily</option>
                      <option>Sunday</option>
                      <option>Monday</option>
                      <option>Tuesday</option>
                      <option>Wednesday</option>
                      <option>Thursday</option>
                      <option>Friday</option>
                      <option>Saturday</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="inputState" class="form-label">Weak Leg Carry Forward:</label>
                    <select id="inputState" class="form-select" name="weak_leg">
                      <option selected>yes</option>
                      <option>No</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="inputEmail" class="form-label">Capping Period(0 to No limit):</label>
                    <input type="text" class="form-control" id="inputEmail" name="capping_period_limit">
                  </div>
                  <div class="col-md-6">
                    <label for="inputPassword" class="form-label">Capping Period In Rs.(0 to No limit):</label>
                    <input type="text" class="form-control" id="inputPassword" name="sponsor_pair_matching">
                  </div>
                  <div class="col-md-6">
                    <label for="inputPassword" class="form-label">Sponsor Pair Matching(in %)</label>
                    <input type="text" class="form-control" id="inputPassword" name="configure_commission">
                  </div>
                  <br><h6>Commision Mode:weak Leg pay</h6><br>
                  <h6 class="text-primary">Product Sales Commission</h6><br>
                  <div class="col-md-6">
                    <label for="inputState" class="form-label">Configure Commission values as: </label>
                    <select id="inputState" class="form-select" name="configure_commission">
                      <option selected>Amount</option>
                      <option>Non Amount</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label >Self Product Purchase Commission</label>
                    <input type="text" class="form-control" name="select_product_purchase_commission">
                  </div>
                   <br><h6 class="text-primary">Product Purchase Commission</h6><br>
                         <div class="col-md-6">
                            <label >Level 1</label>
                            <input type="text" class="form-control" type="text" name="level_1">
                          </div>
                        <div class="col-md-6">
                            <label >Level 2</label>
                            <input type="text" class="form-control" type="text" name="level_2">
                        </div>
                          <div class="col-md-6">
                            <label >Level 3</label>
                            <input type="text" class="form-control" type="text" name="level_3">
                          </div>
                          <div class="col-md-6">
                          <label >Level 4</label>
                          <input type="text" class="form-control" type="text" name="level_4">
                          </div>
                          <div class="col-md-6">
                          <label >Level 5</label>
                          <input type="text" class="form-control" type="text" name="level_5">
                          </div>
                          <div class="col-md-6">
                          <label >Level 6</label>
                          <input type="text" class="form-control" type="text" name="level_6">
                          </div>
                          <div class="col-md-6">
                        <label >Level 7</label>
                        <input type="text" class="form-control" type="text" name="level_7">
                        </div>
                        <div class="col-md-6">
                        <label >Level 8</label>
                        <input type="text" class="form-control" type="text" name="level_8">
                        </div>
                        <div class="col-md-6">
                        <label >Level 9</label>
                        <input type="text" class="form-control" type="text" name="level_9">
                        </div>
                        <div class="col-md-6">
                        <label >Level 10</label>
                        <input type="text" class="form-control" type="text" name="level_10">
                        </div>
                        <div class="col-md-6">
                        <label >Level 11</label>
                        <input type="text" class="form-control" type="text" name="level_11">
                        </div>
                        <div class="col-md-6">
                        <label >Level 12</label>
                        <input type="text" class="form-control" type="text" name="level_12">
                        </div>
                        <div class="col-md-6">
                        <label >Level 13</label>
                        <input type="text" class="form-control" type="text" name="level_13">
                        </div>
                        <div class="col-md-6">
                        <label >Level 14</label>
                        <input type="text" class="form-control" type="text" name="level_14">
                        </div>
                        <div class="col-md-7">
                        <label for="usr">Level 15</label>
                        <input type="text" class="form-control" type="text" name="level_15">
                        </div>
                        <div class="col-md-7">
                        <label for="usr">Level Completion Income</label>
                        <input type="text" class="form-control" type="text" name="level_completion_income">
                        </div>
                        <div class="col-md-6">
                        <label for="inputState" class="form-label">Show Plan on Registration Form</label>
                        <select id="inputState" class="form-select" name="show_plan">
                      <option selected>yes</option>
                      <option>no</option>
                    </select>
                        </div>
                        <div class="col-md-6">
                        <h6 class="mb-0 text-uppercase">Select Image for Plan</h6>
                        <div class="card">
                        <div class="card-body">
                        <input id="fancy-file-upload" type="file" name="image" accept=".jpg, .png, image/jpeg, image/png" multiple >
                      </div>
                        </div>
                      </div>
                      <div class="col-md-7">
                        <label for="usr">Invoice</label>
                        <input type="text" class="form-control" type="text" name="invoice">
                        </div>
                    <div class="col-12">
                    <label for="inputAddress2" class="form-label">Plan Description</label>
                    <textarea class="form-control" id="inputAddress2" placeholder="description" rows="3" name="description"></textarea>
                  </div>
                    <div class="col-12">
                    <button type="submit" class="btn btn-primary px-5">Submit</button>
                    </div>
        		</form>
							</div>
						</div>
					</div>
				</div>
      </div>
    </div>

		<!--end page wrapper -->
@endsection
