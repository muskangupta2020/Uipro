@extends("user.master")

@section("content")
<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Forms</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Form Layouts</li>
							</ol>
						</nav>
					</div>
					@if (session('message') != null)
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <p class="alert alert-success">
                                {{ session('message') }}
                            </p>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                    @endif
                    @if (session('notmessage') != null)
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <p class="alert alert-danger">
                                {{ session('notmessage') }}
                            </p>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                    @endif
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
				<h6 class="mb-0 text-uppercase">Login Form</h6>
						<hr/>
						<div class="card border-top border-0 border-4 border-success">
							<div class="card-body p-5">
								<div class="card-title text-center"><img src="{{ url('assets/images/logo.jfif') }}" width="100px">
									<h5 class="mb-5 mt-2 text-dark">User Reset Password Login</h5>
								</div>
								<hr>
								<form class="row g-3" action="{{url('user/check')}}" method="post">
									@csrf
									<div class="col-12">
										<label for="inputEmail" class="form-label">Enter EMail</label>
										<div class="input-group input-group-lg"> <span class="input-group-text bg-transparent"><i class='bx bxs-user'></i></span>
											<input type="text" class="form-control border-start-0" id="inputLastEnterUsername" placeholder="Enter email ID" / required name="email" value="">
										</div>
									</div>
									<div class="col-12">
										<label for="inputLastEnterPassword" class="form-label">Enter Password</label>
										<div class="input-group input-group-lg"> <span class="input-group-text bg-transparent"><i class='bx bxs-lock-open'></i></span>
											<input type="text" class="form-control border-start-0" id="inputLastEnterPassword" placeholder="Enter Password" / required name="password" value="">
										</div>
									</div>
									<div class="col-12">
										<div class="d-grid">
											<button type="submit" class="btn btn-success btn-lg px-5"><i></i>Reset Password</button>
										</div>
									</div>
									<hr/>
								</form>
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>
@endsection