@extends('admin.master')
@section('content')
                        
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
                <li class="breadcrumb-item active" aria-current="page">Add Product</li>
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
            <h6 class="mb-0 text-uppercase">Manage Product Form</h6>
            <hr/>
            <div class="card border-top border-0 border-4 border-primary">
              <div class="card-body p-9">
                <div class="card-title d-flex align-items-center">
                  <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                  </div>
                  <h5 class="mb-0 text-primary">Add Product</h5>
                </div>
                <hr>
                <form class="row g-3" method="post" action="{{url('admin/update_product')}}" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="id" value="{{$edit->id}}">
                    <div class="col-md-6">
       				<label >Product/Services Name*</label>
        			<input type="text" class="form-control" name="product_name" value="{{$edit->product_name}}">
       				</div>
                  <div  class="col-md-6" style="width: 50%">
      				<label for="sel1">Plan Commission</label>
      				<select class="form-control" type="slecct" name="plan_commission" >
      				<option>Amount</option>
      				<option>2</option>
					<option>3</option>
      				<option>4</option>
      				</select> 
                  </div>
      				
      				<div class="col-md-6">
        				<label >Product Selling Price</label>
        				<input class="form-control" type="text" name="selling_price" value="{{$edit->selling_price}}"></div>
                    <div class="col-md-6">
        				<label >Dealer Price(Franchisee Price)</label>
        				<input class="form-control" type="text" name="dealer_price" value="{{$edit->dealer_price}}">
      				</div>
                  <div class="col-md-6">
        				<label >Product Cost</label>
        				<input class="form-control" name="product_cost" value="{{$edit->product_cost}}">
      				</div>
                        <div  class="col-md-6" style="width: 50%">
      						<label for="sel1">Availability Quantity(-1 to no limit)</label>
      						<input class="form-control" type="select" name="avl_qty"  value="{{$edit->avl_qty}}">
      						</div>
                  <div class="col-md-6">
        				<label >Discount(%)</label>
        				<input type="text" class="form-control" type="text" name="discount" value="{{$edit->discount}}">
    				</div>
    				<div class="col-md-6">
        				<label >GST/TAX(%)</label>
        				<input type="text" class="form-control" type="text" name="gst" value="{{$edit->gst}}">
      				</div>
      						<div class="col">
      						<label for="sel1">Select Product Type*</label>
							<input class="form-control" type="text" name="product_type" value="{{$edit->product_type}}">
      						</div>
      						<div class="col-md-6">
                        <h6 class="mb-0 text-uppercase">Image - 1</h6>
                        <div class="card">
                        <div class="card-body">
                        <input id="fancy-file-upload" type="file" name="img1" accept=".jpg, .png, image/jpeg, image/png" multiple  class="img-fluid rounded-end" value="{{$edit->img1}}">
                        <img src="/upload/{{$edit->img1}}" width="100px" height="100px">
                      </div>
                        </div>
                      </div>
                        <div class="col-md-6">
                        <h6 class="mb-0 text-uppercase">Select Image - 2</h6>
                        <div class="card">
                        <div class="card-body">
                        <input id="fancy-file-upload" type="file" name="img2" accept=".jpg, .png, image/jpeg, image/png" multiple value="{{$edit->img2}}">
                        <img src="/upload/{{$edit->img2}}" width="100px" height="100px">
                      </div>
                        </div>
                      </div>
                        <div class="col-md-6">
                        <h6 class="mb-0 text-uppercase">Select Image - 3</h6>
                        <div class="card">
                        <div class="card-body">
                        <input id="fancy-file-upload" type="file" name="img3" accept=".jpg, .png, image/jpeg, image/png" multiple value="{{$edit->img3}}">
                        <img src="/upload/{{$edit->img3}}" width="100px" height="100px">
                      </div>
                        </div>
                      </div>
                        <div class="col-md-6">
                        <h6 class="mb-0 text-uppercase">Select Image - 4</h6>
                        <div class="card">
                        <div class="card-body">
                        <input id="fancy-file-upload" type="file" name="img4" accept=".jpg, .png, image/jpeg, image/png" multiple value="{{$edit->img4}}">
                        <img src="/upload/{{$edit->img4}}" width="100px" height="100px">
                      </div>
                        </div>
                      </div>
                        <div class="col-md-6">
                        <h6 class="mb-0 text-uppercase">Select Image - 5</h6>
                        <div class="card">
                        <div class="card-body">
                        <input id="fancy-file-upload" type="file" name="img5" accept=".jpg, .png, image/jpeg, image/png" multiple value="{{$edit->img5}}">
                        <img src="/upload/{{$edit->img5}}" width="100px" height="100px">
                      </div>
                        </div>
                      </div>
                      <div class="col-md-7" style="width: 50%">
      						<label for="sel1">Display Product to Member?</label>
      						<input class="form-control" id="sel1" type="select" name="display_product" value="{{$edit->display_product}}">
      						
						</div>
						<div class="col-md-7">
  						<label for="comment">Product/Service Description</label>
  						<textarea class="form-control" rows="3" id="comment" name="description">{{$edit->description}}</textarea>
						</div>
            <div  class="col-md-6" style="width: 50%">
              <label for="sel1">Product Category *(Category Name - Parent Category Name)</label>
            <select class="form-control"  type="select" name="parent_category" >
              <option value="<?php echo $edit->parent_id .','.$edit->category_id ;?>"><?php echo  $edit->parent_cat . '-'. $edit->category_name ;?></option>
            @foreach($parent_category_data as $p_c_data)
            <option value="<?php echo  $p_c_data->parent_id . ','. $p_c_data->id ;?>">
            <?php echo  $p_c_data->parent_cat . '-'. $p_c_data->category_name ;?>
            </option>
            @endforeach
              </select> 
               </div>
               <div class="col-md-6">
                  <label for="sel1">Sub Category</label>
                  <select class="form-control" id="sel1" type="select" name="sub_category_name">
                    <option value="{{$edit->sub_category_id}}">{{$edit->sub_category_name}}</option>
                  @foreach ($s_data as $s)
                    <option value="{{ $s->id }}">
                    {{ $s->sub_category_name}}
                    </option>
                    @endforeach
                  </select>
                  </div>
                  <div class="col-md-6">
              <label for="sel1">Product Brand</label>
              <select class="form-control"  type="select" name="brand_name">
              @foreach ($p_data as $s)
              <option value="{{ $s->id }}">
                {{ $s->brand_name}}
                </option>
                @endforeach
              </select> 
              </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary px-5">Update</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--start page wrapper -->
      </div>
    </div>


@endsection

@section('script')

<script src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>
  <!--plugins-->
  <script src="{{url('assets/js/jquery.min.js')}}"></script>
  <script src="{{url('assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
  <script src="{{url('assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
  <script src="{{url('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
  <script src="{{url('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{url('assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
  <script>
    $(document).ready(function() {
      $('#example').DataTable();
      } );
  </script>
  <script>
    $(document).ready(function() {
      var table = $('#example2').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'print']
      } );
     
      table.buttons().container()
        .appendTo( '#example2_wrapper .col-md-6:eq(0)' );
    } );
  </script>
  <!--app JS-->

@endsection