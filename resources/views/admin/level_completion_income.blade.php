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
                  <h5 class="mb-0 text-primary">Level Completion Income</h5>
                </div>
                <hr>
                <form class="row g-3" method="post" action="{{url('admin/level_completion_income/save')}}" >
                  @csrf
                  <div class="col-md-7">
                    <label for="inputState" class="form-label">Plan ID</label>
                  <input type="text" class="form-control" id="inputFirstName" name="plan_id">
                   </div>
                  <div class="col-md-6">
                    <label for="inputFirstName" class="form-label">Plan Commission</label>
                    <select id="inputState" class="form-select" name="plan_commission">
                      <option selected>Registration</option>
                      <option>Non Registration</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="inputFirstName" class="form-label">Earning Name</label>
                    <select id="inputState" class="form-select" name="income_name">
                       <option>Level Complieton Income</option>
                      <option>1:2</option>
                    </select>
                  </div>
                  <div  class="col-md-6" style="width: 50%">
                    <label for="sel1">Level Name:</label>
                    <select class="form-select" id="inputState" type="select" name="level_name">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                  </select> 
                  </div>
                  <div class="col-md-6">
                    <label for="inputEmail" class="form-label">Total Member:</label>
                    <input type="text" class="form-control" id="inputEmail" name="total_member">
                  </div>
                  <div class="col-md-6">
                    <label >Total Direct Sponsors</label>
                    <input type="text" class="form-control" id="inputPassword" name="minimum_direct">
                  </div>
                    <div class="col-md-6">
                    <label for="inputEmail" class="form-label">Earring Amount</label>
                    <input type="text" class="form-control" id="inputEmail" name="earring_amount">
                  </div>
                  <div class="col-md-6">
                    <label for="inputState" class="form-label">Upgrade Amount</label>
                    <input type="text" class="form-control" id="inputEmail" name="upgrade_amount">
                  </div>
                  <div class="col-md-6">
                  <label >Archieve Duration:</label>
                  <input class="form-control" type="text" name="archieve_duration">
                  <p>(Within How many days he/she should achieve this? 0 for no duration) </p>
                  </div>
                  <div  class="col-md-8" style="width: 50%">
                  <label for="sel1"> Create New Id:</label>
                  <select class="form-control" type="slecct" name="create_id">
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
                    <button type="submit" class="btn btn-primary px-5">Create</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <h6 class="mb-0 text-uppercase">Level Completion Income</h6>
        <hr/>
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th>sd</th>
                    <th>Plan Id</th>
                    <th>Income Name</th>
                    <th>Level No.</th>
                    <th>Total Members</th>
                    <th>Minimum Directs</th>
                    <th>Amount</th>
                    <th>Upgrade</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($data as $a)
                <tr>
                <td>{{$a->id}}</td>
                <td>{{$a->plan_id}}</td>
                <td>{{$a->income_name}}</td>
                <td>{{$a->level_name}}</td>
                <td>{{$a->total_member}}</td>
                <td>{{$a->minimum_direct}}</td>
                <td>{{$a->earring_amount}}</td>
                <td>{{$a->upgrade_amount}}</td>
              <td>
          <a href="{{url('admin/edit_level_completion_income/'.$a->id)}}"><button  style="font-size:15px" class="btn btn-warning">Edit</button></a>&nbsp;
          <a href="{{url('admin/delete_level_completion_income/'.$a->id)}}"><button  style="font-size:15px" class="btn btn-danger">Delete</button></a>&nbsp;
          
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