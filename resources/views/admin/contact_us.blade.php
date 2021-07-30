@extends("admin.master")

@section("content")

    <div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Contact Us Settings</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Add Contact Details</li>
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
        <h6 class="mb-0 text-uppercase">Contact Us</h6>
        <hr/>
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
      <th>sd</th>
     <th>Name</th>
     <th>Email</th>
     <th>Subject</th>
     <th>Message</th>
     <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($contact as $v)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$v->contact_name}}</td>
        <td>{{$v->contact_email}}</td>
        <td>{{$v->contact_subject}}</td>
        <td>{{$v->contact_message}}</td>  
        <td>
          <a href="{{url('admin/delete_contact_us/'.$v->id)}}"><button  style="font-size:15px" class="btn btn-danger">Delete</button></a>&nbsp;
          
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