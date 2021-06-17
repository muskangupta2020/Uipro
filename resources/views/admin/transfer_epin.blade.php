@extends("admin.master")

@section('content')
@if (!empty($message))
<div class="alert alert-success border-0 bg-success alert-dismissible fade show py-2">
                                    <div class="d-flex align-items-center">
                                        <div class="font-35 text-white"><i class='bx bxs-check-circle'></i>
                                        </div>
                                        <div class="ms-3">
                                            <h6 class="mb-0 text-white">Success Alerts</h6>
                                            <div class="text-white">{{$message}}</div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
@endif
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Manage E-PIN</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Transfer E-Pin</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-xl-8 mx-auto">
                    <h6 class="mb-0 text-uppercase">Manage E-PIN</h6>
                    <hr />
                    <div class="card border-top border-0 border-4 border-primary">
                        <div class="card-body p-9">
                            <div class="card-title d-flex align-items-center">
                                <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                                </div>
                                <h5 class="mb-0 text-primary">Transfer E-Pin</h5>
                            </div>
                            <hr>
                            <form class="row g-3" method="post" action="{{ url('admin/transfer/save') }}">
                                @csrf
                                <div class="col-md-6">
                                    <label for="inputEmail" class="form-label">From User ID</label>
                                    <input type="text" class="form-control" placeholder="1001" id="usr" name="user_id">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail" class="form-label">To User ID</label>
                                    <input type="text" class="form-control" placeholder="1001" id="usr" name="to_user_id">
                                </div>
                                <div class="col-md-6" style="width: 50%">
                                    <label for="sel1">e-PIN Amount*</label>
                                    <select class="form-select" id="inputState" type="select" name="epin_amount">
                                        <option selected>Plan A. Price :<span>&#8377;</span>500.00</option>
                                        <option>Plan B. Price :<span>&#8377;</span>10,000.00</option>
                                        <option>Plan C. Price :<span>&#8377;</span>30,000.00</option>
                                        <option>Plan D. Price :<span>&#8377;</span>100,000.00</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>No. of e-PIN's*</label>
                                    <input type="text" class="form-control" id="inputPassword" name="epin_no">
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-danger px-5">Transfer e-pin</button>
                                </div>
                                <br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
