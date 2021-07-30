@extends("user.master")
@section("content")		
<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">User Profile</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">User Profile</li>
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
                                {{ session('message') }}
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
					<div class="container">
					<div class="main-body">
						<div class="row">
							<div class="col-lg-">
								<div class="card">
									<div class="card-body">
										<div class="d-flex flex-column align-items-center text-center">
											<img src="{{url('user/assets/images/2048px-User_icon_2.svg.png')}}" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
											<div class="mt-3">
												<h3>Bussiness</h3>
												<h5>{{Auth::user()->user_id}}</h5>
												<h5 class="text-secondary mb-1">Rank: <span style="font-style: bold;">Member</span></h5>
												<h5 class="text-muted font-size-sm"></h5>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="container">
					<div class="main-body">
						<div class="row">
							<div class="col-lg-">
								<div class="card">
									<div class="card-body">
										<div class="d-flex flex-column align-items-center text-center">
											<div class="mt-3">
												<h5><a href="http://127.0.0.1:8000/user/vendor" id="copy"><button class="btn btn-outline-primary">http://127.0.0.1:8000/user/vendor <br>Click </button></a></h5>
											</div>
										</div>
									</div>
								</div>
							</div>
							 <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-4">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                            	<img src="{{url('user/assets/images/user.png')}}" class="card-img-top" alt="..." style="width:50px">
                                <h5 class="card-title">Left Count</h5>
                                <p class="card-text" class="text-primary">2</p> 
                                <hr><a href="javascript:;" >just Updated</a>
                            </div>
                            
                        </div>
                    </div>
                     <div class="col">
                        <div class="card">
                            <div class="card-body">
                            	<img src="{{url('user/assets/images/user.png')}}" class="card-img-top" alt="..." style="width:50px">
                                <h5 class="card-title">Right Count</h5>
                                <p class="card-text" class="text-primary">2</p> 
                                <hr><a href="javascript:;" >just Updated</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                            	<img src="{{url('user/assets/images/user.png')}}" class="card-img-top" alt="..." style="width:50px">
                                <h5 class="card-title">Today's Pair</h5>
                                <p class="card-text" class="text-primary">2</p> 
                                <hr><a href="javascript:;" >just Updated</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                            	<img src="{{url('user/assets/images/download.png')}}" class="card-img-top" alt="..." style="width:50px">
                                <h5 class="card-title">Total Earned</h5>
                                <p class="card-text" class="text-primary">2</p> 
                                <hr><a href="javascript:;" >just Updated</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                            	<img src="{{url('user/assets/images/download.png')}}" class="card-img-top" alt="..." style="width:50px">
                                <h5 class="card-title">Referrals Income</h5>
                                <p class="card-text" class="text-primary">2</p> 
                                <hr><a href="javascript:;" >just Updated</a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                            	<img src="{{url('user/assets/images/download.png')}}" class="card-img-top" alt="..." style="width:50px">
                                <h5 class="card-title">Wallet Balance</h5>
                                <p class="card-text" class="text-primary">2</p> 
                                <hr><a href="javascript:;" >just Updated</a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                            	<img src="{{url('user/assets/images/download.png')}}" class="card-img-top" alt="..." style="width:50px">
                                <h5 class="card-title">Paid Payout</h5>
                                <p class="card-text" class="text-primary">2</p> 
                                <hr><a href="javascript:;" >just Updated</a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                            	<img src="{{url('user/assets/images/download.png')}}" class="card-img-top" alt="..." style="width:50px">
                                <h5 class="card-title">Pending Payout</h5>
                                <p class="card-text" class="text-primary">2</p> 
                                <hr><a href="javascript:;" >just Updated</a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                            	<img src="{{url('user/assets/images/download.png')}}" class="card-img-top" alt="..." style="width:50px">
                                <h5 class="card-title">Direct Left</h5>
                                <p class="card-text" class="text-primary">2</p> 
                                <hr><a href="javascript:;" >just Updated</a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                            	<img src="{{url('user/assets/images/download.png')}}" class="card-img-top" alt="..." style="width:50px">
                                <h5 class="card-title">Direct Right</h5>
                                <p class="card-text" class="text-primary">2</p> 
                                <hr><a href="javascript:;" >just Updated</a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                            	<img src="{{url('user/assets/images/download.png')}}" class="card-img-top" alt="..." style="width:50px">
                                <h5 class="card-title">Matching</h5>
                                <p class="card-text" class="text-primary">2</p> 
                                <hr><a href="javascript:;" >just Updated</a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                            	<img src="{{url('user/assets/images/user.png')}}" class="card-img-top" alt="..." style="width:50px">
                                <h5 class="card-title">Active Referral</h5>
                                <p class="card-text" class="text-primary">2</p> 
                                <hr><a href="javascript:;" >just Updated</a>
                            </div>
                          </div>  
                        </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                            	<img src="{{url('user/assets/images/user.png')}}" class="card-img-top" alt="..." style="width:50px">
                                <h5 class="card-title">InActive Referral</h5>
                                <p class="card-text" class="text-primary">2</p> 
                                <hr><a href="javascript:;" >just Updated</a>
                            </div>
                            </div>
                        </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                            	<img src="{{url('user/assets/images/user.png')}}" class="card-img-top" alt="..." style="width:50px">
                                <h5 class="card-title">Potent Income</h5>
                                <p class="card-text" class="text-primary">2</p> 
                                <hr><a href="javascript:;" >just Updated</a>
                            </div>
                         </div>
                    </div>
                </div>
                    <br><br><br>
                    <center><div class="col-lg-8">
                    <a href="http://127.0.0.1:8000/user/bank_deposit"><button class="btn btn-primary"><i style="font-size:24px" class="fa">&#xf156;</i>Deposit--></button></a>
                    &nbsp;&nbsp;&nbsp;
                    <a href="http://127.0.0.1:8000/user/withdraw_payouts"><button class="btn btn-danger"><i style="font-size:24px" class="fa">&#xf156;</i>Withdraw--></button></a>
                </div></center>
                <br><br><br>
                <div class="alert alert-primary border-0 bg-primary alert-dismissible fade show py-2">
                  <div class="d-flex align-items-center">
                    <div class="font-35 text-white">
                    </div>
                    <div class="ms-3">
                      <h6 class="mb-0 text-white">Latest Joinings<br><br>Here is the list of Latest earnings details</h6>
                    </div>
                  </div>
                </div>
						<hr/>
						<div class="card">
							<div class="card-body">
								<table class="table table-bordered mb-0">
									<thead>
										<tr>
											<th scope="col" class="text-info">Income Name</th>
											<th scope="col" class="text-info">Amount</th>
											<th scope="col" class="text-info">Details</th>
											<th scope="col" class="text-info">Date</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">1</th>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
										</tr>
									</tbody>
								</table>
							</div>
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