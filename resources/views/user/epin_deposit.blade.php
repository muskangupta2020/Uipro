@extends("user.master")

@section("content")
<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">EPIN Deposit</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">EPIN Deposit</li>
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
                      <h4 class="mb-0 text-white">Fund My Wallet</h4>
                    </div>
                  </div>
                </div>
            <hr/>
            <div class="card border-top border-0 border-4 border-primary">
              <div class="card-body p-9">
                <div class="card-title d-flex align-items-center">
                  <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                  </div>
                  <h5 class="mb-0 text-primary">Fund My Wallet</h5>
                </div>
                <hr>
                <form class="row g-3" method="post" action="{{ url('user/funwallet') }}" enctype="multipart/form-data">
                  @csrf
                   <div class="col-md-6">
                      
              <label >Available Wallet Balance</label>
              <input type="text" class="form-control" name="wallet_balance" value="{{$data->wallet_balance}}" readonly>
              
              </div>
              <hr>
               <div class="col-md-6">
              <label >Enter E-pin to redeem</label>
              <input type="text" class="form-control" name="ad_money" value="" required>
              </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-info px-5">Proceed</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <h6 class="mb-0 text-uppercase">Bank Deposit</h6>
        <hr/>
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
      <th>sd</th>
     <th>user name</th>
     <th>user id</th>
     <th>ad_money</th>
     <th>request status</th>
     <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
$i=1;
      ?>
      @foreach($query as $v)
      <?php $cu=$i++;?>
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$v->user_name}}</td>
        <td>{{$v->user_id}}</td>
        <td>{{$v->ad_money}}</td>
        <td>{{$v->request_status}}</td>
        <td>
          <button class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#parentModal{{$cu}}" @if($v->request_status !='approve') disabled @endif ''>Make Payment</button>
        </td>
      </tr>
      <div class="modal fade" id="parentModal{{$cu}}" tabindex="-1" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Make Payment</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div><br>
                          <div class="modal-body">
                          <form action="{{url('/payment-initiate-request')}}" method="post">
                            @csrf
                            <div class="row">
                              <div class="col">
                                 <label for="name">Name</label> : 
                                <input type="text" name="name"  class="form-control">
                              </div>
                            </div><br>
                            <div class="row">
                              <div class="col">
                                 <label for="name">Email</label> : 
                                <input type="text" name="email"  class="form-control">
                              </div>
                            </div><br>
                            <div class="row">
                              <div class="col">
                                 <label for="name">Contact Number</label> : 
                                <input type="text" name="contactNumber"  class="form-control">
                              </div>
                            </div><br>
                            <div class="row">
                              <div class="col">
                                 <label for="name">Address</label> : 
                                <input type="text" name="address"  class="form-control">
                              </div>
                            </div><br>
                            <div class="row">
                              <div class="col">
                                 <label for="name">Amount</label> : 
                                <input type="text" name="amount"  class="form-control" value="{{$v->ad_money}}"> 
                              </div>
                            </div>
                            </br>
                        <button type="submit"  class="btn btn-primary">Submit</button><br>
                          </form>
                        </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
      @endforeach
    </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
       

@endsection
        <!--start page wrapper -->




