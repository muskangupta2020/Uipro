@extends('admin.master')
@section('content')
                        
<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Bussiness Setting</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Payout Settings</li>
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
            <h6 class="mb-0 text-uppercase"></h6>
            <hr/>
            <div class="card border-top border-0 border-4 border-primary">
              <div class="card-body p-9">
                <div class="card-title d-flex align-items-center">
                  <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                  </div>
                  <h5 class="mb-0 text-primary">Payout Settings</h5>
                </div>
                <hr>
                <form class="row g-3" method="post" action="{{url('admin/payout_setting/save')}}" enctype="multipart/form-data">
                  @csrf
                  <div  class="col-md-6" style="width: 50%">
      				<label for="sel1">Plan Commission</label>
      				<select class="form-control" type="slecct" name="plan_commission">
      				<option selected>Plan A</option>
      				<option selected>Plan B</option>
              <option selected>Plan C</option>
              <option selected>Plan D</option>
      				</select> 
                  </div>
      			     <div class="col-md-6">
        				<label >Payout Tax/TDS(%)</label>
        				<input class="form-control" type="text" name="selling_price"></div>
                <div class="col-md-6">
                <label >Admin Service Charge</label>
                <input class="form-control" type="text" name="selling_price"></div>
                <div  class="col-md-6" style="width: 50%">
              <label for="sel1">Deduct Admin Service Charge</label>
              <select class="form-control" type="slecct" name="plan_commission">
              <option selected>Plan A</option>
              <option selected>Plan B</option>
              <option selected>Plan C</option>
              <option selected>Plan D</option>
              </select> 
                  </div>
                  <div  class="col-md-6" style="width: 50%">
              <label for="sel1">Allow User To Withdraw Fund</label>
              <select class="form-control" type="slecct" name="plan_commission">
              <option selected>yes</option>
              <option selected>no</option>
              </select> 
                  </div>
                  <div class="col-md-6">
                <label >Minimum Amount To Witdraw(in Rs.)</label>
                <input class="form-control" type="text" name="selling_price"></div>
                <div class="col-md-6">
                <label >Daily Capping(in Rs.)</label>
                <input class="form-control" type="text" name="selling_price"></div>
                <div class="col-md-6">
                <label >Min Direct Sponsor To Withdraw</label>
                <input class="form-control" type="text" name="selling_price"></div>
                <div class="col-md-6">
                <label >% Deduction To Reprchase Wallet</label>
                <input class="form-control" type="text" name="selling_price"></div>
                <div  class="col-md-6" style="width: 50%">
              <label for="sel1">Allow Member To Member Fund Transfer</label>
              <select class="form-control" type="slecct" name="plan_commission">
              <option selected>yes</option>
              <option selected>no</option>
              </select> 
                  </div>
                  <div  class="col-md-6" style="width: 50%">
              <label for="sel1">Allow User To Generate Epin</label>
              <select class="form-control" type="slecct" name="plan_commission">
              <option selected>yes</option>
              <option selected>no</option>
              </select> 
                  </div>
                   <div class="col-md-6">
                <label >Admin Charge For Epin (%)</label>
                <input class="form-control" type="text" name="selling_price"></div>
                 <div class="col-md-6">
                <label >Epin Cashback</label>
                <input class="form-control" type="text" name="selling_price"></div>
                 <div class="col-md-6">
                <label >Epin- Plus Offer</label>
                <input class="form-control" type="text" name="selling_price"></div>
                 <div  class="col-md-6" style="width: 50%">
              <label for="sel1">Withdraw Timings:</label>
              <select class="form-control" type="slecct" name="plan_commission">
              <option selected>yes</option>
              <option selected>no</option>
              </select> 
                  </div>
                  <br><br>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary px-5">Create</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--start page wrapper -->

        <h6 class="mb-0 text-uppercase">Payout Settings</h6>
        <hr/>
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table id="example2" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th>SN</th>
                    <th>Plan Id</th>
                    <th>Payout/TDS TAX(%)</th>
                    <th>Admin Charge(%)</th>
                    <th>Dealer Price</th>
                    <th>Allow User Withdraw</th>
                    <th>Withdraw-Min Amount</th>
                    <th>Withdraw Daily Capping</th>
                    <th>Withdraw-Min Sponsor</th>
                    <th>Withdraw - DEDUCT TO REPURACHSE(%)</th>
                    <th>Generate Epin-Charge</th>
                    <th>Allow User To Generate Epin</th>
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
         <td></td>
         <td>
          <a href=""><button  style="font-size:15px" class="btn btn-danger">Delete</button></a>&nbsp;
          
          </td>
      </tr>
    
    </tbody>
              </table>
            </div>
          </div>
        </div>
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

@endsection