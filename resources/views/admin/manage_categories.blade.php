@extends('admin.master')
@section('content')
<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Product & Services</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Manage Categories</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">Settings</button>
							<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col col-lg-9 mx-auto">
						<div class="card">
							<div class="card-body">
								<div class="card-title">
									<h5 class="mb-0">Manage Categories</h5>
								</div>
								<hr/>
								<div class="row row-cols-auto g-3">
									<div class="col">
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#parentModal">+ Add Parent Category</button>
										<!-- Modal -->
										<div class="modal fade" id="parentModal" tabindex="-1" aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title">Parent Category</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div><br>
													<div class="modal-body"><form method="post" action="{{url('admin/save_parent_category')}}" class="row g-3">
     												@csrf  
    												<div class="row">
    												<div class="col">
      												<label >Parent Category Name</label>
      												<input type="text" class="form-control" name="parent_cat">
    												</div>
    												<div class="col">
      												<label for="sel1">Brand Name</label>
      												<select class="form-control" type="select" name="brand_name">
      												<option>default</option>
      												<option>2:1/1:1</option>
      												</select> 
    												</div>
  													</div>
													<button type="submit" class="btn btn-primary mt-3" >Save changes</button>
												</form>
												</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col">
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#categoryModal">+Add Category</button>
										<!-- Modal -->
										<div class="modal fade" id="categoryModal" tabindex="-1" aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title">Category</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<form method="post" action="{{url('admin/save_category')}}" >
      													@csrf  
  														<div class="row">
    													<div class="col">
      													<label >Category Name</label>
      													<input type="text" class="form-control" name="category_name" >
    													</div>
    													<div class="col">
      													<label for="sel1">Parent Category Name</label>
      													<select class="form-control" type="select" name="parent_cat" >
														@foreach ($data as $s)
        												<option value="{{ $s->id }}">
        												{{ $s->parent_cat}}
        												</option>
        												@endforeach
      													</select> 
    													</div>
  														</div>
  														<button type="submit" class="btn btn-primary mt-3">Create</button>
														</form>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col">
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#subcategoryModal">+Add Sub Category</button>
										<!-- Modal -->
										<div class="modal fade" id="subcategoryModal" tabindex="-1" aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title">Sub Category</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														  <form method="post" action="{{url('admin/save_sub_category')}}" >
      														@csrf   
  															<div class="row">
    														<div class="col">
      														<label >Sub Category Name</label>
      														<input type="text" class="form-control"name="sub_category_name" >
    														</div>
    														<div class="col">
        													    <label for="sel1">Parent - Category Name</label>
        														    <select class="form-control" type="select" name="parent_category">
        														@foreach($parent_category_data as $p_c_data)
      															<option value="<?php echo  $p_c_data->parent_id . ','. $p_c_data->id ;?>">
        														<?php echo  $p_c_data->parent_cat . '-'. $p_c_data->category_name ;?>
      															</option>
      															@endforeach
      														</select> 
    														</div>
  															</div>
  															<button type="submit" class="btn btn-primary mt-3">Create</button>
															</form>
															</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
													</div>
												</div>
											</div>
										</div>
									</div><!---col end---->
									
								</div>
								<br>
								<h6 class="mb-0 text-uppercase">Manage Products</h6>
        						<hr/>
            					<div class="table-responsive">
              					<table id="example" class="table table-striped table-bordered" >
               					 <thead>

        						<th>SN</th>
        						<th>Product Category</th>
        						<th>Add Category</th>
        						<th>Add Sub Category</th>
      							</tr>
   								 </thead>
    							<tbody>
    								@foreach($display_manage_product as $s)
    							<tr>
        						<td>{{$loop->iteration}}</td>
        						<td>{{$s->parent_cat}}</td>
        						<td>{{$s->category_name}}</td>
        						<td>{{$s->sub_category_name}}</td>
      							</tr>
      							@endforeach
          						</tbody>
  								</table>
								</div>
  								<br><br>
   							<center> <a href="{{url('admin/display_manage_category')}}"><button type="submit" class="btn btn-primary mt-3">Manage Category</button></a>
    						<a href="{{url('admin/display_manage_subcategory')}}"><button type="submit" class="btn btn-primary mt-3">Manage Sub Category</button></center></a>
    						<br><br>
    					</center>
    				</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

@endsection