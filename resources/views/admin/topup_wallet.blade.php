@extends("admin.master")

@section('content')

    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Memeber E-Wallet</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Top Up Wallet</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-xl-8 mx-auto">
                    <h6 class="mb-0 text-uppercase">Memeber E-Wallet</h6>
                    <hr />
                    <div class="card border-top border-0 border-4 border-primary">
                        <div class="card-body p-9">
                            <div class="card-title d-flex align-items-center">
                                <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                                </div>
                                <h5 class="mb-0 text-primary">Top Up Wallet</h5>
                            </div>
                            <hr>
                            <form class="row g-3" method="post" action="">
                                @csrf
                                <div class="col-md-6">
                                    <label>Enter User ID</label>
                                    <input type="text" class="form-control" id="inputPassword" name="user_id">
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary px-5">Populate</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
