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
                <form class="row g-3" method="post" action="{{url('admin/navbar/save')}}" enctype="multipart/form-data" >
                  @csrf
                  <div class="row">
                  <div class="col-md-6">
                        <h6 class="mb-0 text-uppercase">Logo</h6>
                        <div class="card">
                        <div class="card-body">
                        <input id="fancy-file-upload" type="file" name="logo_image" accept=".jpg, .png, image/jpeg, image/png" multiple  class="img-fluid rounded-end">
                      </div>
                        </div>
                  <div class="col-md-6">
                  <label for="sel1">Contact</label>
                  <input type="text" class="form-control" id="" name="contact">
                  </div>
                </div>
                 <div class="row">
                  <div class="col-md-6">
                  <label for="sel1">Offer 1</label>
                  <input type="text" class="form-control" id="" name="offer1">
                  </div>
                  <div class="col-md-6">
                  <label for="sel1">Offer 2</label>
                  <input type="text" class="form-control" id="" name="offer2">
                  </div>
                </div>
                 <div class="row">
                  <div class="col-md-6">
                  <label for="sel1">Offer 3</label>
                  <input type="text" class="form-control" id="" name="offer3">
                  </div>
                  <div class="col-md-6">
                  <label for="sel1">Offer 4</label>
                  <input type="text" class="form-control" id="" name="offer4">
                  </div>
                </div>
                 <div class="row">
                  <div class="col-md-6">
                  <label for="sel1">Offer 5</label>
                  <input type="text" class="form-control" id="" name="offer5">
                  </div>
                  <div class="col-md-6">
                  <label for="sel1">Offer 6</label>
                  <input type="text" class="form-control" id="" name="offer6">
                  </div>
                </div>
                 <div class="row">
                  <div class="col-md-6">
                  <label for="sel1">Offer 7</label>
                  <input type="text" class="form-control" id="" name="offer7">
                  </div>
                  <div class="col-md-6">
                  <label for="sel1">Offer 8</label>
                  <input type="text" class="form-control" id="" name="offer8">
                  </div>
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
        <h6 class="mb-0 text-uppercase">Navbar</h6>
        <hr/>
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
      <th>sd</th>
     <th>Logo Image</th>
     <th>Contact</th>
     <th>Offer 1</th>
     <th>Offer 2</th>
     <th>Offer 3</th>
     <th>Offer 4</th>
    <th>Offer 5</th>
    <th>Offer 6</th>
    <th>Offer 7</th>
    <th>Offer 8</th>
    <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($navbar as $v)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td><img src="{{url('upload/'.$v->logo_image)}}" style="height: 100px; width: 100px; border-radius: 100%;"></td>
        <td>{{$v->contact}}</td>
        <td>{{$v->offer1}}</td>
        <td>{{$v->offer2}}</td>
        <td>{{$v->offer3}}</td>
        <td>{{$v->offer4}}</td>
        <td>{{$v->offer5}}</td>
        <td>{{$v->offer6}}</td>
        <td>{{$v->offer7}}</td>
        <td>{{$v->offer8}}</td>
         <td>
          <a href="{{url('admin/edit_navbar/'.$v->id)}}"><button  style="font-size:15px" class="btn btn-warning">Edit</button></a>&nbsp;
          <a href="{{url('admin/delete_navbar/'.$v->id)}}"><button  style="font-size:15px" class="btn btn-danger">Delete</button></a>&nbsp;
          
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