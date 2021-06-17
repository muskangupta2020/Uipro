@extends("admin.master")

@section("content")

        <!--start page wrapper -->
    <div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Tables</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Data Table</li>
              </ol>
            </nav>
          </div>
          <div class="ms-auto">
            <div class="btn-group">
              <button type="button" class="btn btn-primary">Settings</button>
              <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
              </button>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">  <a class="dropdown-item" href="javascript:;">Action</a>
                <a class="dropdown-item" href="javascript:;">Another action</a>
                <a class="dropdown-item" href="javascript:;">Something else here</a>
                <div class="dropdown-divider"></div>  <a class="dropdown-item" href="javascript:;">Separated link</a>
              </div>
            </div>
          </div>
        </div>
        <!--end breadcrumb-->
        <h6 class="mb-0 text-uppercase">Generate Payout</h6>
        <hr/>
<div class="alert alert-danger border-0 bg-danger alert-dismissible fade show py-2">
									<div class="d-flex align-items-center">
										<div class="font-35 text-white">
										</div>
										<div class="ms-3">
											<h4 class="mb-0 text-white"><strong>Warning!</strong>Payout must be Configured to Generate Payouts.<br><br>Payout is not configured for all the plans.Please <a href="" class="text-white">Click Here-> </a> to configure payouts.</h4>
										</div>
									</div>
								</div>
@endsection