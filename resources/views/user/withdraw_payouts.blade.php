@extends("user.master")

@section("content")
<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Withdraw Wallet Funds</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Withdraw Wallet Funds</li>
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
            <h6 class="mb-0 text-uppercase">Withdraw Wallet Funds</h6>

            <hr/>
            <div class="card border-top border-0 border-4 border-primary">
              <div class="card-body p-9">
                <div class="card-title d-flex align-items-center">
                  <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                  </div>
                  <h5 class="mb-0 text-primary">Withdraw Wallet Funds</h5>
                </div>
                <div class="alert alert-primary border-0 bg-primary alert-dismissible fade show py-2">
                  <div class="d-flex align-items-center">
                    <div class="font-35 text-white">
                    </div>
                    <div class="ms-3">
                      <h6 class="mb-0 text-white">Daily Capping Alert!</h6>
                      <p class="mb-0 text-white">The Daily Capping Withdrawal is <i style="font-size:10px" class="fa">&#xf156;</i>1000.You are eligible to Withdraw <i style="font-size:10px" class="fa">&#xf156;</i>940 for Today.</p>
                    </div>
                  </div>
                </div>
                <hr>
                <form class="row g-3" method="post" action="{{url('user/save_withdraw')}}" enctype="multipart/form-data">
                  @csrf
                   <div class="col-md-8">
              <label >Available Wallet Balance</label>
              <input type="text" class="form-control" name="wallet_balance" value="{{$bank->wallet_balance}}" readonly>
              </div><hr>
               <div class="col-md-8">
              <label >Daily Capping</label>
              <input type="text" class="form-control" name="daily_capping" value="1000Rs"  readonly>
              </div><hr>
                    <div class="col-md-8">
       				<label >Minimum Amount</label>
        			<input type="text" class="form-control" name="minimum_amount" value="1rs" readonly>
       				</div><hr>
      				<div class="col-md-8">
        				<label >Withdrawal Mode</label>
        				<select class="form-control" type="select" name="withdrawal_mode" value="" required>
              <option selected>Bank</option>
              <option selected>Razor Pay</option>
              </select>
                </div><hr>
                    <div class="col-md-8">
        				<label style="font-size:1rem">Bank Details:</label>
                <br><br>
        				<p>Beneficiary Name: {{$query->user_name}}</p>
                <p>KYC: Compliance</p>
                <p>PAN : {{$query->pan_no}}</p>
                <p>Bank Name : {{$query->bank_name}}</p>
                <p>IFSC CODE: {{$query->bank_ifsc}}</p>
                <p>Account No: {{$query->bank_account_no}}</p>
                <p>Bank Branch: {{$query->pan_branch}}</p>
      				</div>
              <hr>
               <div class="col-md-8">
              <label >Withdrawal Amount</label>
              <input type="text" class="form-control" name="withdrawal_amount" >
              </div><hr>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary px-5">Withdraw</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
       </div>
     </div>
    

@endsection
        <!--start page wrapper -->




