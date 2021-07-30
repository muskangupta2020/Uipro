@extends('admin.master')
@section('content')
<!-- wrapper -->
	<div class="wrapper">
		<div class="authentication-reset-password d-flex align-items-center justify-content-center">
			<div class="row">
				<div class="col-12 col-lg-10 mx-auto">
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
                                {{ session('message') }}
                            </p>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                    @endif
					<div class="card">
						<div class="row g-0">
							<div class="col-lg-5 border-end">
								<div class="card-body">
									<div class="p-5">
										<div class="text-start">
											<img src="assets/images/logo-img.png" width="180" alt="">
										</div>
										<form action="{{url('admin/new_password')}}" method="post">
											@csrf
										<h4 class="mt-5 font-weight-bold">Genrate New Password</h4>
										<p class="text-muted">We received your reset password request. Please enter your new password!</p>
										<input class="form-control" placeholder="Enter new password" name="email" hidden value="{{$e}}">
										<div class="mb-3 mt-5">
											<label class="form-label">New Password</label>
											<input type="text" class="form-control" placeholder="Enter new password" / name="password">
										</div>
										<div class="mb-3">
											<label class="form-label">Confirm Password</label>
											<input type="text" class="form-control" placeholder="Confirm password" / name="password">
										</div>
										<div class="d-grid gap-2">
											<button type="submit" class="btn btn-primary">Change Password</button> <a href="{{url('admin/logout')}}" class="btn btn-light"><i class='bx bx-arrow-back mr-1'></i>Back to Login</a>
										</div>
									</form>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<img src="{{url('assets/images/login-images/forgot-password-frent-img.jpg')}}" class="card-img login-img h-100" alt="...">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
@endsection