@extends("admin.master")

@section("content")

    <div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Home Settings</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Add Advance coupan Details</li>
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
            <h6 class="mb-0 text-uppercase">Frontend</h6>
            <hr/>
            <div class="card border-top border-0 border-4 border-primary">
              <div class="card-body p-9">
                <div class="card-title d-flex align-items-center">
                  <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                  </div>
                  <h5 class="mb-0 text-primary">coupan</h5>
                </div>
                <hr>
                <form class="row g-3" method="post" action="{{url('admin/advancecoupan/save')}}" enctype="multipart/form-data" >
                  @csrf
                  <div class="col-md-4">
                  <label for="sel1">Amount IN %</label>
                  <input type="text" class="form-control" id="" name="advance_discount_percent" required="">
                  </div>
               <br>
               <div class="col-md-4">
                  <label for="sel1">Start Date</label>
                  <input type="date" class="form-control" id="" name="advance_start_date" required>
                  </div>
               <br>
               <div class="col-md-4">
                  <label for="sel1">Expiry Date</label>
                  <input type="date" class="form-control" id="" name="advance_expiry_date" required>
                  </div>
               <br><br><br><br>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary px-5">Save</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <h6 class="mb-0 text-uppercase">Coupan</h6>
        <hr/>
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
      <th>sd</th>
     <th>Amount IN %</th>
     <th>Coupan Code</th>
     <th>Start Date</th>
     <th>Expiry Date</th>
    <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($advancecoupan as $v)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$v->advance_discount_percent}}</td>
        <td>{{$v->advance_coupan_code}}</td>
        <td>{{$v->advance_start_date}}</td>
        <td>{{$v->advance_expiry_date}}</td>
         <td>
          <a href="{{url('admin/edit_advancecoupan/'.$v->id)}}"><button  style="font-size:15px" class="btn btn-warning">Edit</button></a>&nbsp;
          <a href="{{url('admin/delete_advancecoupan/'.$v->id)}}"><button  style="font-size:15px" class="btn btn-danger">Delete</button></a>&nbsp;
          
          </td>
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