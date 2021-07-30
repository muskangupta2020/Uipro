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
                  <h5 class="mb-0 text-primary">About Us </h5>
                </div>
                <hr>
                <form class="row g-3" method="post" action="{{url('admin/about_us/save')}}" enctype="multipart/form-data" >
                  @csrf
                  <div class="row">
                  <div class="col-md-6">
                  <label for="sel1">our_mission</label>
                  <textarea type="text" class="form-control" id="" name="our_mission"></textarea>
                  </div>
                  <div class="col-md-6">
                  <label for="sel1">our_story</label>
                  <textarea type="text" class="form-control" id="" name="our_story"></textarea>
                  </div>
                </div>
                 <div class="row">
                  <div class="col-md-6">
                  <label for="sel1">our_vision</label>
                  <textarea type="text" class="form-control" id="" name="our_vision"></textarea>
                  </div>
                  <div class="col-md-6">
                  <label for="sel1">our_philosophy</label>
                  <textarea type="text" class="form-control" id="" name="our_philosophy"></textarea>
                  </div>
                </div>
                 <div class="row">
                  <div class="col-md-6">
                  <label for="sel1">we_are_trusted</label>
                  <textarea type="text" class="form-control" id="" name="we_are_trusted"></textarea>
                  </div>
                  <div class="col-md-6">
                  <label for="sel1">we_are_professional</label>
                  <textarea type="text" class="form-control" id="" name="we_are_professional"></textarea>
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
        <h6 class="mb-0 text-uppercase">About us</h6>
        <hr/>
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
      <th>sd</th>
     <th>our_mission</th>
     <th>our_story</th>
     <th>our_vision</th>
     <th>our_philosophy</th>
     <th>we_are_trusted</th>
     <th>we_are_professional</th>
    <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($about_us as $v)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$v->our_mission}}</td>
        <td>{{$v->our_story}}</td>
        <td>{{$v->our_vision}}</td>
        <td>{{$v->our_philosophy}}</td>
        <td>{{$v->we_are_trusted}}</td>
        <td>{{$v->we_are_professional}}</td>
         <td>
          <a href="{{url('admin/edit_about_us/'.$v->id)}}"><button  style="font-size:15px" class="btn btn-warning">Edit</button></a>&nbsp;
          <a href="{{url('admin/delete_about_us/'.$v->id)}}"><button  style="font-size:15px" class="btn btn-danger">Delete</button></a>&nbsp;
          
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