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
                  
<h6 class="mb-0 text-uppercase">Fund Withdrawal Request</h6>
        <hr/>
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table id="example2" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                     <th>SN</th>
                    <th>User ID</th>
                    <th>Amount</th>
                    <th>Admin Charge(%)</th>
                    <th>Tax(%)</th>
                    <th>Net Payable</th>
                    <th>Date</th>
                    <th>Mode</th>
                    <th>Account Detail</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($withdraw as $w)

        <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$w->user_id}}</td>
                    <td>{{$w->withdrawal_amount}}</td>
                    <td>5</td>
                    <td>8</td>
                    <td><?php   $min=($w->withdrawal_amount*13)/100; 

                    echo  $w->withdrawal_amount - $min;
                  ?></td>
                    <td>{{$w->created_at}}</td>
                    <td>razor pay</td>
                    <td><p>Beneficiary Name: {{$w->user_name}}</p>
                <p>KYC: Compliance</p>
                <p>PAN : {{$w->pan_no}}</p>
                <p>Bank Name : {{$w->bank_name}}</p>
                <p>IFSC CODE: {{$w->bank_ifsc}}</p>
                <p>Account No: {{$w->bank_account_no}}</p>
                <p>Bank Branch: {{$w->pan_branch}}</p></td>
                    <td><a href="{{url('admin/withdraw_pay/'.$w->w_id)}}"><button  style="font-size:15px" class="btn btn-danger"@if($w->withdrawal_status!='approve')  @endif >Pay</button></a>&nbsp;
                    <a href=""><button  style="font-size:15px" class="btn btn-success">Hold</button></a>&nbsp;
                   <a href=""><button  style="font-size:15px" class="btn btn-secondary">Delete</button></a>&nbsp;</td>

              
        </tr>
        @endforeach
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
        lengthChange: true,
        buttons: [ 'copy', 'excel', 'pdf', 'print']
      } );
     
      table.buttons().container()
        .appendTo( '#example2_wrapper .col-md-6:eq(0)' );
    } );
  </script>
  <!--app JS-->

@endsection