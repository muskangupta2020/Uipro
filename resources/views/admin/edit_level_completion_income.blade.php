@extends("admin.master")

@section("content")

    <div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Manage Plan</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Level Completion Income</li>
              </ol>
            </nav>
          </div>
        </div>
        <!--end breadcrumb-->
        <div class="row">
          <div class="col-xl-8 mx-auto">
            <h6 class="mb-0 text-uppercase">Manage Plan Form</h6>
            <hr/>
            <div class="card border-top border-0 border-4 border-primary">
              <div class="card-body p-9">
                <div class="card-title d-flex align-items-center">
                  <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                  </div>
                  <h5 class="mb-0 text-primary">Edit Level Completion Income</h5>
                </div>
                <hr>
                <form class="row g-3" method="post" action="{{url('admin/update_level_completion_income/{id}')}}" >
                  @csrf
                  <input type="hidden" name="id" value="{{$edit->id}}">  
                  <div class="col-md-7">
                    <label for="inputState" class="form-label">Plan ID</label>
                  <input type="text" class="form-control" id="inputFirstName" name="plan_id" value="{{$edit->plan_id}}">
                   </div>
                  <div class="col-md-6">
                    <label for="inputFirstName" class="form-label">Plan Commission</label>
                  <input id="inputState" class="form-select" name="plan_commission" type="select" value="{{$edit->plan_commission}}">
                  </div>
                  <div class="col-md-6">
                    <label for="inputFirstName" class="form-label">Earning Name</label>
                    <input id="inputState" class="form-select" name="income_name" type="select" value="{{$edit->income_name}}">
                  </div>
                  <div  class="col-md-6" style="width: 50%">
                    <label for="sel1">Level Name:</label>
                    <input class="form-select" id="inputState" type="select" name="level_name" value="{{$edit->level_name}}">
                  </div>
                  <div class="col-md-6">
                    <label for="inputEmail" class="form-label">Total Member:</label>
                    <input type="text" class="form-control" id="inputEmail" name="total_member" value="{{$edit->total_member}}">
                  </div>
                  <div class="col-md-6">
                    <label >Total Direct Sponsors</label>
                    <input type="text" class="form-control" id="inputPassword" name="minimum_direct" value="{{$edit->minimum_direct}}">
                  </div>
                    <div class="col-md-6">
                    <label for="inputEmail" class="form-label">Earring Amount</label>
                    <input type="text" class="form-control" id="inputEmail" name="earring_amount" value="{{$edit->earring_amount}}">
                  </div>
                  <div class="col-md-6">
                    <label for="inputState" class="form-label">Upgrade Amount</label>
                    <input type="text" class="form-control" id="inputEmail" name="upgrade_amount" value="{{$edit->upgrade_amount}}">
                  </div>
                  <div class="col-md-6">
                  <label >Archieve Duration:</label>
                  <input class="form-control" type="text" name="archieve_duration" value="{{$edit->archieve_duration}}">
                  <p>(Within How many days he/she should achieve this? 0 for no duration) </p>
                  </div>
                  <div  class="col-md-8" style="width: 50%">
                  <label for="sel1"> Create New Id:</label>
                  <select class="form-control" type="slecct" name="create_id" value="{{$edit->create_id}}">
                  <option>Yes</option>
                  <option>No</option>
                  </select> 
                  </div>
                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck">
                      <label class="form-check-label" for="gridCheck">Check me out</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary px-5" name="Update" value="Update">Update</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
@endsection