@extends("user.master")

@section("content")
<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">KYC COMPLIANCE</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">KYC COMPLIANCE</li>
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
            <h6 class="mb-0 text-uppercase">KYC COMPLIANCE</h6>
            <hr/>
            <div class="card border-top border-0 border-4 border-primary">
              <div class="card-body p-9">
                <div class="card-title d-flex align-items-center">
                  <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                  </div>
                  <h5 class="mb-0 text-primary">KYC COMPLIANCE</h5>
                </div>
                <hr>
                <form class="row g-3" method="post" action="{{url('user/save_kyc')}}" enctype="multipart/form-data">
                  @csrf
                   <div class="col-md-6">
              <label >User ID</label>
              <input type="text" class="form-control" name="user_id" value="{{Auth::user()->user_id}}" readonly>
              </div>
               <div class="col-md-6">
              <label >User Name</label>
              <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}" readonly>
              </div>
                    <div class="col-md-6">
       				<label >PAN Number</label>
        			<input type="text" class="form-control" name="pan_no" required>
       				</div>
               <div class="col-md-6">
              <label >Bank Name</label>
              <input type="text" class="form-control" name="bank_name" value="" required>
              </div>
                    <div class="col-md-6">
              <label >Bank Branch</label>
              <input type="text" class="form-control" name="bank_branch" required>
              </div>
      				<div class="col-md-6">
        				<label >Bank A/C Number</label>
        				<input class="form-control" type="text" name="bank_account_no" required></div>
                    <div class="col-md-6">
        				<label >Bank IFSC</label>
        				<input class="form-control" type="text" name="bank_ifsc" required>
      				</div>
                        <div class="col-md-6">
                        <h6 class="mb-0 text-uppercase">PAN PHOTO</h6>
                        <div class="card">
                        <div class="card-body">
                        <input id="fancy-file-upload" type="file" name="pan_image" accept=".jpg, .png, image/jpeg, image/png" multiple  required>
                      </div>
                        </div>
                      </div>
                        <div class="col-md-6">
                        <h6 class="mb-0 text-uppercase">Cheque Leaf</h6>
                        <div class="card">
                        <div class="card-body">
                        <input id="fancy-file-upload" type="file" name="cheque_leaf" accept=".jpg, .png, image/jpeg, image/png" multiple required>
                      </div>
                        </div>
                      </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary px-5">Create</button>
                  </div>
                </form>
              </div>
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
                    <th>PAN Number</th>
                    <th>Bank A/C Number</th>
                    <th>Bank IFSC</th>
                    <th>PAN PHOTO</th>
                    <th>Cheque Leaf</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $d)

        <tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$d->user_id}}</td>
          <td>{{$d->user_name}}</td>
          <td>{{$d->pan_no}}</td>
          <td>{{$d->bank_account_no}}</td>
          <td>{{$d->bank_ifsc}}</td>
          <td><img src="{{ url('/upload/'.$d->pan_image) }}" style="height: 150px; width: 150px; border-radius: 100%;"></td>
          <td><img src="{{ url('/upload/'.$d->cheque_leaf) }}" style="height: 150px; width: 150px; border-radius: 100%;"></td>
          
         <td>
          <a href="{{url('user/kyc_delete/'.$d->id)}}"><button  style="font-size:15px" class="btn btn-danger">Delete</button></a>&nbsp;
          <a href="{{url('user/kyc_edit/'.$d->id)}}"><button  style="font-size:15px" class="btn btn-secondary">Edit</button></a>&nbsp;
          
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
        <!--start page wrapper -->




