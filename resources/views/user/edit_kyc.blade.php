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
                <form class="row g-3" method="post" action="{{url('user/update_kyc')}}" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="id" value="{{$edit->id}}">
                    <div class="col-md-6">
       				<label >PAN Number</label>
        			<input type="text" class="form-control" name="pan_no" value="{{$edit->pan_no}}" >
       				</div>
      				<div class="col-md-6">
        				<label >Bank A/C Number</label>
        				<input class="form-control" type="text" name="bank_account_no" value="{{$edit->bank_account_no}}"></div>
                    <div class="col-md-6">
        				<label >Bank IFSC</label>
        				<input class="form-control" type="text" name="bank_ifsc" value="{{$edit->bank_ifsc}}">
      				</div>
                        <div class="col-md-6">
                        <h6 class="mb-0 text-uppercase">PAN PHOTO</h6>
                        <div class="card">
                        <div class="card-body">
                        <input id="fancy-file-upload" type="file" name="pan_image" accept=".jpg, .png, image/jpeg, image/png" multiple  value="{{$edit->pan_image}}">
                      </div>
                        </div>
                      </div>
                        <div class="col-md-6">
                        <h6 class="mb-0 text-uppercase">Cheque Leaf</h6>
                        <div class="card">
                        <div class="card-body">
                        <input id="fancy-file-upload" type="file" name="cheque_leaf" accept=".jpg, .png, image/jpeg, image/png" multiple value="{{$edit->cheque_leaf}}">
                      </div>
                        </div>
                      </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary px-5">Update</button>
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




