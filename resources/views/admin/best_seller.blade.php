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
                <li class="breadcrumb-item active" aria-current="page">Add Best Seller Details</li>
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
          
        </div>
        <h6 class="mb-0 text-uppercase">Best Seller</h6>
        <hr/>
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                        <th>sd</th>
                       <th>Image</th>
                       <th>Title</th>
                       <th>Heading</th>
                       <th>Category</th>
                       <th>Price</th>
                      <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($best_seller as $v)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td><img src="{{url('upload/'.$v->img1)}}" style="height: 100px; width: 100px; border-radius: 100%;"></td>
                          <td>{{$v->product_name}}</td>
                          <td>{{$v->category_name}}</td>
                          <td>{{$v->selling_price}}</td>
                          <td>{{$v->dealer_price}}</td>
                           <td>
                            <a href="{{url('admin/delete_best_seller/'.$v->f_id)}}"><button  style="font-size:15px" class="btn btn-danger">Delete</button></a>                            
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
              </table>
            </div>
          </div>
        </div>
         <h6 class="mb-0 text-uppercase">Add Best Seller Details</h6>
        <hr/>
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table id="example2" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th>SN</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Selling Price</th>
                    <th>Dealer Price</th>
                    <th>Price After Discount</th>
                    <th>Image</th>
                    <th>Qty Sold</th>
                    <th>Avl Qty</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($data as $a)

        <tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$a->product_name }}</td>
          <td>{{$a->category_name}}</td>
          <td>{{$a->selling_price}}</td>
          <td>{{$a->dealer_price}}</td>
          <td>{{$a->price}}</td><!--price after discount is not available now-->
          <td>{{$a->img1}}</td>
          <td>{{$a->qty_sold}}</td>
          <td>{{$a->avl_qty}}</td>
         <td>
          <a href="{{url('admin/best_seller/'.$a->p_id)}}"><button  style="font-size:15px" class="btn btn-warning">Best Seller Product</button></a>&nbsp;
          </td>
      </tr>
      @endforeach
    </tbody>
      </table>
      </div>
    </div>
@endsection