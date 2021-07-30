@extends("admin.master")
@section('content')
                    <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Dashboard</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Index</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="ms-auto">
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">Settings</button>
                            <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">    <a class="dropdown-item" href="javascript:;">Action</a>
                                <a class="dropdown-item" href="javascript:;">Another action</a>
                                <a class="dropdown-item" href="javascript:;">Something else here</a>
                                <div class="dropdown-divider"></div>    <a class="dropdown-item" href="javascript:;">Separated link</a>
                            </div>
                        </div>
                    </div>
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
                <!--end breadcrumb-->
                <h6 class="mb-0 text-uppercase">Dashboard</h6>
                <hr/>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-4">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{url('user/assets/images/user.png')}}" class="card-img-top" alt="..." style="width:50px">
                                <h5 class="card-title">Left Count</h5>
                                <p class="card-text" class="text-primary">{{$left}}</p> 
                                <hr><a href="javascript:;" >just Updated</a>
                            </div>
                            
                        </div>
                    </div>
                     <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{url('user/assets/images/user.png')}}" class="card-img-top" alt="..." style="width:50px">
                                <h5 class="card-title">Right Count</h5>
                                <p class="card-text" class="text-primary">{{$right}}</p> 
                                <hr><a href="javascript:;" >just Updated</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{url('user/assets/images/download.png')}}" class="card-img-top" alt="..." style="width:50px">
                                <h5 class="card-title">Admin Income</h5>
                                <p class="card-text" class="text-primary">{{$income}}</p> 
                                <hr><a href="javascript:;" >just Updated</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{url('user/assets/images/download (1).png')}}" class="card-img-top" alt="..." style="width:50px">
                                <h5 class="card-title">Today's Income</h5>
                                <p class="card-text" class="text-primary">{{$latestincome}}</p> 
                                <hr><a href="javascript:;" >just Updated</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{url('user/assets/images/download.png')}}" class="card-img-top" alt="..." style="width:50px">
                                <h5 class="card-title">Referrals Paid</h5>
                                <p class="card-text" class="text-primary">2</p> 
                                <hr><a href="javascript:;" >just Updated</a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                 <img src="{{url('user/assets/images/download (1).png')}}" class="card-img-top" alt="..." style="width:50px">
                                <h5 class="card-title">Member Income</h5>
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
                                <img src="{{url('user/assets/images/download (1).png')}}" class="card-img-top" alt="..." style="width:50px">
                                <h5 class="card-title">First Pair Payout</h5>
                                <p class="card-text" class="text-primary">2</p> 
                                <hr><a href="javascript:;" >just Updated</a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{url('user/assets/images/download (1).png')}}" class="card-img-top" alt="..." style="width:50px">
                                <h5 class="card-title">Matching Paid</h5>
                                <p class="card-text" class="text-primary">2</p> 
                                <hr><a href="javascript:;" >just Updated</a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{url('user/assets/images/download.png')}}" class="card-img-top" alt="..." style="width:50px">
                                <h5 class="card-title">Member Wallet</h5>
                                <p class="card-text" class="text-primary">{{$wallet}}</p> 
                                <hr><a href="javascript:;" >just Updated</a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{url('user/assets/images/user.png')}}" class="card-img-top" alt="..." style="width:50px">
                                <h5 class="card-title">Active Team</h5>
                                <p class="card-text" class="text-primary">{{$activate}}</p> 
                                <hr><a href="javascript:;" >just Updated</a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{url('user/assets/images/user.png')}}" class="card-img-top" alt="..." style="width:50px">
                                <h5 class="card-title">InActive Team</h5>
                                <p class="card-text" class="text-primary">{{$deactivate}}</p> 
                                <hr><a href="javascript:;" >just Updated</a>
                            </div>
                            
                        </div>
                    </div>
                    </div>
                    <div class="col-12 col-xl-12 d-flex">
                    <div class="card radius-10 w-100 overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h5 class="mb-0">Package Overview</h5>
                                </div>
                                <div class="font-22 ms-auto">
                                </div>
                            </div>
                        </div>

                        <div class="store-metrics p-3 mb-3">
                            
                            <div class="card mt-3 radius-10 border shadow-none">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h4 class="mb-0">Plan A</h4>
                                            <p class="mb-0 text-secondary">You have 95 plan A package purchases in your team</p>
                                        </div>
                                        <div class="widgets-icons bg-light-primary text-primary ms-auto">{{$plana}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card radius-10 border shadow-none">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h4 class="mb-0">Plan B <b class="text-danger"> (Payout not configured for this Plan.<a href="">Click Here</a>To Update)</b></h4>
                                            <p class="mb-0 text-secondary">You have 0 plan A package purchases in your team</p>
                                        </div>
                                        <br>
                                         <div class="widgets-icons bg-light-danger text-danger ms-auto">{{$planb}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card radius-10 border shadow-none">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h4 class="mb-0">Plan C <b class="text-danger"> (Payout not configured for this Plan.<a href="">Click Here</a>To Update)</b></h4>
                                            <p class="mb-0 text-secondary">You have 0 plan A package purchases in your team</p>
                                        </div>
                                        <div class="widgets-icons bg-light-success text-success ms-auto">{{$planc}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card radius-10 border shadow-none">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h4 class="mb-0">Plan D <b class="text-danger"> (Payout not configured for this Plan.<a href="">Click Here</a>To Update)</b></h4>
                                            <p class="mb-0 text-secondary">You have 0 plan A package purchases in your team</p>
                                        </div>
                                        <div class="widgets-icons bg-light-info text-info ms-auto">{{$pland}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
                 <div class="alert alert-primary border-0 bg-primary alert-dismissible fade show py-2">
                  <div class="d-flex align-items-center">
                    <div class="font-35 text-white">
                    </div>
                    <div class="ms-3">
                      <h6 class="mb-0 text-white">Latest Joinings<br><br>Here is the list of members who have recently joined</h6>
                    </div>
                  </div>
                </div>
        <hr/>
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table id="example2" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                     <th>SN</th>
                    <th>User ID</th>
                    <th>User Name</th>
                    <th>Sponsor ID</th>
                    <th>Income</th>
                    <th>Phone</th>
                    <th>Join Start Date</th>
                    <th>Total Downline</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($data as $s)
                 <tr>
                    <td>{{$s->id}}</td>
                     <td>{{$s->user_id}}</td>
                    <td>{{$s->name}}</td>
                    <td>{{$s->sponser_id}}</td>
                    <td>{{$income}}</td>
                    <td>{{$s->phone_no}}</td>
                    <td>{{$s->created_at}}</td>
                    <td>2</td>
                   </tr>
                     @endforeach
            </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

        </div>
    </div>



    
@endsection
