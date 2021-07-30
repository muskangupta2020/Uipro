@extends('admin.master')
@section('content')

<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Reward</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Reward Setting</li>
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
						<h6 class="mb-0 text-uppercase">Rewards</h6>
						<hr/>
						<div class="card border-top border-0 border-4 border-primary">
							<div class="card-body p-5">
								<div class="card-title d-flex align-items-center">
									<div><i class="bx bxs-user me-1 font-22 text-primary"></i>
									</div>
									<h5 class="mb-0 text-primary">Rewards Setting</h5>
								</div>
								<hr>
								<form class="row g-3" method="post" action="{{url('admin/reward_setting/save')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="col-md-6">
                    <label for="inputState" class="form-label">Plan*</label>
                    <select id="inputState" class="form-select" name="plan_type">
                      <option selected>Plan A</option>
                      <option selected>Plan B</option>
                      <option selected>Plan C</option>
                      <option selected>Plan D</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="inputFirstName" class="form-label">Rank Name</label>
                    <input type="text" class="form-control" id="inputFirstName" name="plan_name">
                  </div>
                  <div class="col-md-6">
                    <label for="inputLastName" class="form-label">Rank Based On</label>
                    <input type="text" class="form-control" id="inputLastName" name="joining_fee">
                  </div>
                  <div class="col-6">
                    <label for="inputAddress" class="form-label">Count Based ON</label>
                    <input class="form-control" id="inputAddress" placeholder="" name="gst_tax"></input>
                  </div>
                  <div class="col-md-6">
                    <label for="inputEmail" class="form-label">Achieve Duration</label>
                    <input type="text" class="form-control" id="inputEmail" name="direct_referral_comission" value="" placeholder="(Within how many days he/she achieve this? 0 for no duration)">
                  </div>
                
                  <br>
                  <h6 class="text-primary">Target Value</h6><br>
                  <div class="col-md-6">
                    <label >Total People/PV at A side</label>
                    <input type="text" class="form-control" name="select_product_purchase_commission" placeholder="How many People/Pv at A side?">
                  </div>
                         <div class="col-md-6">
                            <label >Total People/PV at B side</label>
                            <input type="text" class="form-control" type="text" name="level_1" placeholder="How many People/Pv at B side?">
                          </div>
                        <div class="col-md-6">
                            <label >Direct Referrals</label>
                            <input type="text" class="form-control" type="text" name="level_2">
                        </div>
                          <div class="col-md-6">
                            <label >Level No</label>
                            <input type="text" class="form-control" type="text" name="level_3">
                          </div>
                          <div class="col-md-6">
                          <label >Total Member On Level</label>
                          <input type="text" class="form-control" type="text" name="level_4">
                          </div>
                    <div class="col-12">
                    <button type="submit" class="btn btn-primary px-5">Submit</button>
                    </div>
        		</form>
							</div>
						</div>
          </div>
        </div>
            <h6 class="mb-0 text-uppercase">Pay Achieved Rewards</h6>
        <hr/>
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table id="example2" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                     <th>SN</th>
                    <th>Rank Name</th>
                    <th>Plan Id</th>
                    <th>Rank Based On</th>
                    <th>Count Based On</th>
                    <th>Total People/PV at A Side</th>
                    <th>Total People/PV at B Side</th>
                    <th>Direct Referrals</th>
                    <th>Duartion</th>
                    <th>Achievers</th>
                    <th>#</th>
                  </tr>
                </thead>
                <tbody>
                 
        <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                      <td></td>
                    <td></td>
                    <td></td> 
                    <td></td>
                    <td></td>            
        </tr>
       
    </tbody>
              </table>
            </div>
          </div>
      

@endsection

@section('script')

<script src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>
  <!--plugins-->
  <script src="{{url('assets/js/jquery.min.js')}}"></script>
  <script src="{{url('assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
  <script src="{{url('assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
  <script src="{{url('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
  <script src="{{url('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{url('assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
  <script>
    $(document).ready(function() {
      $('#example').DataTable();
      } );
  </script>
  <script>
    $(document).ready(function() {
      var table = $('#example2').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'print']
      } );
     
      table.buttons().container()
        .appendTo( '#example2_wrapper .col-md-6:eq(0)' );
    } );
  </script>
  <!--app JS-->


		
		<!--end page wrapper -->
@endsection