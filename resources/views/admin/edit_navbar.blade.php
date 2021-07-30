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
                <li class="breadcrumb-item active" aria-current="page">Add Navbar Details</li>
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
                  <h5 class="mb-0 text-primary">Navbar</h5>
                </div>
                <hr>
                <form class="row g-3" method="post" action="{{url('admin/update_navbar')}}" enctype="multipart/form-data" >
                  @csrf
                  <input type="hidden" name="id" value="{{$edit->id}}">
                  <div class="row">
                  <div class="col-md-6">
                        <h6 class="mb-0 text-uppercase">Logo</h6>
                        <div class="card">
                        <div class="card-body">
                        <input id="fancy-file-upload" type="file" name="logo_image" accept=".jpg, .png, image/jpeg, image/png" multiple  class="img-fluid rounded-end" value="{{$edit->logo_image}}">
                      </div>
                        </div>
                  <div class="col-md-6">
                  <label for="sel1">Contact</label>
                  <input type="text" class="form-control" id="" name="contact" value="{{$edit->contact}}">
                  </div>
                </div>
                 <div class="row">
                  <div class="col-md-6">
                  <label for="sel1">Offer 1</label>
                  <input type="text" class="form-control" id="" name="offer1" value="{{$edit->offer1}}">
                  </div>
                  <div class="col-md-6">
                  <label for="sel1">Offer 2</label>
                  <input type="text" class="form-control" id="" name="offer2" value="{{$edit->offer2}}">
                  </div>
                </div>
                 <div class="row">
                  <div class="col-md-6">
                  <label for="sel1">Offer 3</label>
                  <input type="text" class="form-control" id="" name="offer3" value="{{$edit->offer3}}">
                  </div>
                  <div class="col-md-6">
                  <label for="sel1">Offer 4</label>
                  <input type="text" class="form-control" id="" name="offer4" value="{{$edit->offer4}}">
                  </div>
                </div>
                 <div class="row">
                  <div class="col-md-6">
                  <label for="sel1">Offer 5</label>
                  <input type="text" class="form-control" id="" name="offer5" value="{{$edit->offer5}}">
                  </div>
                  <div class="col-md-6">
                  <label for="sel1">Offer 6</label>
                  <input type="text" class="form-control" id="" name="offer6" value="{{$edit->offer6}}">
                  </div>
                </div>
                 <div class="row">
                  <div class="col-md-6">
                  <label for="sel1">Offer 7</label>
                  <input type="text" class="form-control" id="" name="offer7" value="{{$edit->offer7}}">
                  </div>
                  <div class="col-md-6">
                  <label for="sel1">Offer 8</label>
                  <input type="text" class="form-control" id="" name="offer8" value="{{$edit->offer8}}">
                  </div>
                </div>
                <br><br><br><br>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary px-5">Update</button>
                  </div>
               </div>
             </form>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>


@endsection