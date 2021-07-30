
@extends("admin.master")

@section("content")

    <div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Bussiness Settings</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Advance Setting</li>
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
            <h6 class="mb-0 text-uppercase">Please Contact Support to Enable/Disable Module</h6>
            <hr/>
            <div class="card border-top border-0 border-4 border-primary">
              <div class="card-body p-9">
                <div class="card-title d-flex align-items-center">
                  <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                  </div>
                  <h5 class="mb-0 text-primary">Advance Setting</h5>
                </div>
                <hr>
                <form class="row g-3" method="post" action="{{url('admin/variation/save')}}" >
                  @csrf
                  <div class="col-md-6">
                     <label for="sel1">Enable Rewards?</label>
                  <select class="form-control" type="select" name="var_value">
                  <option>yes</option>
                  <option>no</option>
                  </select> 
                   </div>
                   <div class="col-md-6">
                     <label for="sel1">Enable Coupan?</label>
                  <select class="form-control" type="select" name="var_value">
                  <option>yes</option>
                  <option>no</option>
                  </select> 
                   </div>
                   <div class="col-md-6">
                     <label for="sel1">Enable Product & Services?</label>
                  <select class="form-control" type="select" name="var_value">
                  <option>yes</option>
                  <option>no</option>
                  </select> 
                   </div>
                  <div class="col-md-6">
                  <label for="sel1">Enable E-Commerce Store?</label>
                  <select class="form-control" type="select" name="var_value">
                  <option>yes</option>
                  <option>no</option>
                  </select> 
                </div>
                <div class="col-md-6">
                     <label for="sel1">Enable Franchisee?</label>
                  <select class="form-control" type="select" name="var_value">
                  <option>yes</option>
                  <option>no</option>
                  </select> 
                   </div>
                   <div class="col-md-6">
                     <label for="sel1">Enable Repurchase System?</label>
                  <select class="form-control" type="select" name="var_value">
                  <option>yes</option>
                  <option>no</option>
                  </select> 
                   </div>
                   <div class="col-md-6">
                     <label for="sel1">Enable Payment Gateway?</label>
                  <select class="form-control" type="select" name="var_value">
                  <option>yes</option>
                  <option>no</option>
                  </select> 
                   </div>
                   <div class="col-md-6">
                     <label for="sel1">Enable SMS Notification?</label>
                  <select class="form-control" type="select" name="var_value">
                  <option>yes</option>
                  <option>no</option>
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
    </div>
</div>


@endsection