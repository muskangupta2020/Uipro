@extends("user.master")

@section("content")
<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">BANK Deposit</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">BANK Deposit</li>
              </ol>
            </nav>
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
        <div class="row">
          <div class="col-xl-8 mx-auto">
            <div class="alert alert-primary border-0 bg-primary alert-dismissible fade show py-2">
          <div class="d-flex align-items-center">
                    <div class="font-35 text-white">
                    </div>
                    <div class="ms-3">
                      <h4 class="mb-0 text-white">Deposit Through Bank Transfer</h4>
                    </div>
                  </div>
                </div>
            <hr/>
            <div class="card border-top border-0 border-4 border-primary">
              <div class="card-body p-9">
                <div class="card-title d-flex align-items-center">
                  <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                  </div>
                  <h5 class="mb-0 text-primary">Fund My Wallet</h5>&nbsp;<h5 class="text-danger" style="margin-left: 35px;"></h5><br>
                </div><br>
              <p class="text-danger">KYC REQUEST : {{$data->request_status}}</p>
              <br>
                <form class="row g-3" method="post" action="{{url('user/check_kyc_details')}}" enctype="multipart/form-data">
                  @csrf
              <img src="{{url('../user/assets/images/292f9663-97a8-4f6b-84f8-73e7e801738a.jfif')}}" style="width:200px" class="logo-icon" alt="logo icon" >

            <div class="col-md-6">
              <label  style="font-size: 1.5rem;font-style: bolder;">Amount(INR):</label>
              <input type="text" class="form-control" name="ad_money" value="" required>
              </div><br><br>
              </div>
              <br><br> <br>
                  <div class="col-12">
                   <center> <button type="submit"  name="submit" class="btn btn-info px-5">Proceed</button> </center>
                  </div>
                  <br> <br><br>
                </form>
              </div>
            </div>
          </div>
        </div>
       

@endsection
        <!--start page wrapper -->




