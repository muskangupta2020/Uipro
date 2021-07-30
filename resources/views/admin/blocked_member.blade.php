

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
        </div>
        <!--end breadcrumb-->

  <h6 class="mb-0 text-uppercase">Blocked Member</h6>
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
                    <th>Login Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach($data as $s)

        <tr>
         <td>{{$loop->iteration}}</td>
                    <td>{{$s->user_id}}</td>
                    <td>{{$s->name}}</td>
                    <td>{{$s->sponser_id}}</td>
                    <td>600</td>
                    <td>{{$s->phone_no}}</td>
                    <td>{{$s->created_at}}</td>
                    <td>2</td>
                    <td><span class="badge bg-light-danger text-danger w-100">{{$s->login_status}}</span></td>
                    <td><a href="{{url('admin/display_blocked_member/'.$s->user_id)}}"><button  style="font-size:15px" class="btn btn-danger">Blocked</button></a>&nbsp;
                    <a href="{{url('admin/display_activate_member/'.$s->user_id)}}"><button  style="font-size:15px" class="btn btn-success">Activate</button></a>&nbsp;</td>
                
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
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'print']
      } );
     
      table.buttons().container()
        .appendTo( '#example2_wrapper .col-md-6:eq(0)' );
    } );
  </script>
  <!--app JS-->

@endsection