@extends("user.master")

@section("content")
<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Welcome Letter</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Welcome Letter</li>
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
				<hr/>
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Welcome Letter</h5><br>
								<p class="left">Dear Bussiness,</p>
								<p>Member ID :{{Auth::user()->user_id}},</p>
								<p>Register Date:{{Auth::user()->created_at->toDateString()}}</p>
								<br><br><br>
								<p class="card-text">It is with great joy that extend this warm welcome on behalf of our company's management and Team.I hope your journey with us remain fruitful.<br></p>
								<p class="card-text">I assure you of complete support from the team in executing works as directed by you.I will glad to assist you during your setting period.
								<p class="card-text">I welcome you once again and hope you have a memorable work stint at our organization.</p>
								</p>
								<br>
								Regards,<br>
								Team
								<br>
								Term and Conditions	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>




@endsection