@extends("admin.master")

@section("content")

    <div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Manage Product</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Add Variation</li>
              </ol>
            </nav>
          </div>
        </div>
        <!--end breadcrumb-->
        <div class="row">
          <div class="col-xl-8 mx-auto">
            <h6 class="mb-0 text-uppercase">Manage Product Form</h6>
            <hr/>
            <div class="card border-top border-0 border-4 border-primary">
              <div class="card-body p-9">
                <div class="card-title d-flex align-items-center">
                  <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                  </div>
                  <h5 class="mb-0 text-primary">Add Variation</h5>
                </div>
                <hr>
                <form class="row g-3" method="post" action="{{url('admin/variation/save')}}" >
                  @csrf
                  <div class="col-md-7">
                    <label for="inputState" class="form-label">Variation Name*</label>
                  <input type="text" class="form-control" id="" name="var_name">
                   </div>
                  <div class="col-md-7">
                  <label for="sel1">Add Variation Value</label>
                  <select class="form-control" type="select" name="var_value">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  </select> 
                </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary px-5">Create</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <h6 class="mb-0 text-uppercase">Variation</h6>
        <hr/>
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
      <th>sd</th>
     <th> Variant Name</th>
     <th>Variant Value</th>
     <th>Action</th>
    </tr>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $v)
      <tr>
        <th>{{$loop->iteration}}</th>
        <th>{{$v->var_name}}</th>
        <th>{{$v->var_value}}</th>
         <td>
          <a href="{{url('admin/edit_variation/'.$v->id)}}"><button  style="font-size:15px" class="btn btn-warning">Edit</button></a>&nbsp;
          <a href="{{url('admin/delete_variation/'.$v->id)}}"><button  style="font-size:15px" class="btn btn-danger">Delete</button></a>&nbsp;
          
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