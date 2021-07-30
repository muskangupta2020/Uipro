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
                <li class="breadcrumb-item active" aria-current="page">Add About Us Details</li>
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
                  <h5 class="mb-0 text-primary">About Us</h5>
                </div>
                <hr>
                <form class="row g-3" method="post" action="{{url('admin/update_about_us')}}" enctype="multipart/form-data" >
                  @csrf
                  <input type="hidden" name="id" value="{{$edit->id}}">
                  <div class="row">
                  <div class="col-md-6">
                  <label for="sel1">our_mission</label>
                  <input type="text" class="form-control" id="" name="our_mission" value="{{$edit->our_mission}}">
                  </div>
                  <div class="col-md-6">
                  <label for="sel1">we_are_professional</label>
                  <input type="text" class="form-control" id="" name="we_are_professional" value="{{$edit->we_are_professional}}">
                  </div>
                </div>
                 <div class="row">
                  <div class="col-md-6">
                  <label for="sel1">our_vision</label>
                  <input type="text" class="form-control" id="" name="our_vision" value="{{$edit->our_vision}}">
                  </div>
                  <div class="col-md-6">
                  <label for="sel1">our_story</label>
                  <input type="text" class="form-control" id="" name="our_story" value="{{$edit->our_story}}">
                  </div>
                </div>
                 <div class="row">
                  <div class="col-md-6">
                  <label for="sel1">our_vision</label>
                  <input type="text" class="form-control" id="" name="our_vision" value="{{$edit->our_vision}}">
                  </div>
                  <div class="col-md-6">
                  <label for="sel1">our_philosophy</label>
                  <input type="text" class="form-control" id="" name="our_philosophy" value="{{$edit->our_philosophy}}">
                  </div>
                </div>
                <br><br><br><br>
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