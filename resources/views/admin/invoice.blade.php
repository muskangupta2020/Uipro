@extends('admin.master')
@section('content')
									<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Invoice</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Create New Invoice</li>
							</ol>
						</nav>
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
				<h5 class="mb-0">Invoice</h5>
				</div>
				<hr/>
				<div class="col">
								<h6 class="mb-0 text-uppercase">Checkout</h6>
        						<hr/>
            					<div class="table-responsive">
              					<table id="example" class="table table-striped table-bordered" >
               					 <thead>
                                <?php $no=0 ;?>
        						<th>SN</th>
        						<th>order_id</th>
        						<th>email</th>
        						<th>address</th>
        						<th>city</th>
        						<th>states</th>
        						<th>zipcode</th>
        						<th>payment_mode</th>
        						<th>shipping_method</th>
        						<th>discount</th>
        						<th>shipping_cost</th>
        						<th>total</th>
        						<th>discount_percent</th>
        						<th>subtotal</th>
        						<th>order_status</th>

        						<th>Action
        						</th>
      							</tr>
   								 </thead>
    							<tbody>
    								@foreach($checkout as $i)
    								<?php $c=$no++;?>
    							<tr>
        						<td>{{$loop->iteration}}</td>
        						<td>{{$i->order_id}}</td>
        						<td>{{$i->email}}</td>
        						<td>{{$i->address}}</td>
        						<td>{{$i->city}}</td>
        						<td>{{$i->states}}</td>
        						<td>{{$i->zipcode}}</td>
        						<td>{{$i->payment_mode}}</td>
        						<td>{{$i->shipping_method}}</td>
        						<td>{{$i->discount}}</td>
        						<td>{{$i->shipping_cost}}</td>
        						<td>{{$i->total}}</td>
        						<td>{{$i->discount_percent}}</td>
        						<td>{{$i->subtotal}}</td>
        						<td>{{$i->order_status}}</td>
        						<td>
        							<a href="{{url('admin/complete_status/'.$i->id)}}"><button class="btn btn-danger">Complete</button></a>&nbsp; 
        							<a href="{{url('admin/processing_status/'.$i->id)}}"><button class="btn btn-warning">Processing</button></a>&nbsp;  
        							 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleExtraLargeModal<?php echo $c;?>" @if($i->order_status != 'completed') disabled @else '' @endif>Create Invoice</button>	
        							<a href="{{url('admin/delete_invoice/'.$i->id)}}"><button class="btn btn-info">Delete</button></a>
        							&nbsp;
        						</td>
<div class="modal fade" id="exampleExtraLargeModal<?php echo $c;?>" tabindex="-1" aria-hidden="true">
				<div class="modal-dialog modal-xl">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title">Create a New Invoice</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
						<div class="modal-body">
						<form method="post" action="{{url('admin/save_invoice')}}">
     					@csrf  
     				<div class="row">
		     				<div class="col-md-6">
		     				<label for="inputState" class="form-label">Invoice Date</label>
		     			    <input type="date" class="form-control" id="inputPassword" name="invoice_date" required>
						    </div>
						    <div class="col-md-3">
											<label for="inputState" class="form-label">
												Invoice Name
											</label>
											<input type="text" class="form-control" value=""  name="invoice_name" required  id="invoice_name" >
										</div>
						    <div class="col-md-6">
									<label for="inputState" class="form-label">
										User ID
									</label>
									  <input type="text" class="form-control" id="inputPassword" name="user_id" required value="{{$i->user_id}}">
								</div>
								<div class="col-md-6">
									<label for="inputState" class="form-label">Order Id</label>
		     			    <input type="text" class="form-control" id="inputPassword" name="order_id"
		     			     value="{{$i->order_id}}" required>
								</div>

									</div>
									<br>
									<div class="row">
										<div class="col-md-6">
											<label for="inputState" class="form-label">
												Payment Mode
											</label>
											<select id="inputState" class="form-select" name="payment_mode">
												<option selected>Select Mode</option>
  											<option selected>Deduct From Member Wallet</option>
  											<option selected>Cash</option>
											</select>
										</div>
										<div class="col-md-6">
											<label for="inputState" class="form-label">
												User Type
											</label>
											<select id="inputState" class="form-select" name="user_type">
												<option selected>Member</option>
  											<option selected>User</option>
											</select>
										</div>
									</div>
									<br>
										<!-- <div class="col-md-3">
											<label for="inputState" class="form-label">
												sub_total
											</label>
											<input type="text" class="form-control" id="inputPassword" name="sub_total" required>
										</div> -->
										<div class="col-md-3">
											<label for="inputState" class="form-label">
												Total Amount
											</label>
											<input type="number" class="form-control" value="{{$i->total}}"  name="total" required  id="total" >
										</div>
									<div class="col-md-12">
										<label for="inputState" class="form-label">
											Sale Note
										</label>
										<textarea class="form-control" name="sale_note">
											
										</textarea>
									</div>
									<br><br>
									<div class="col-12">
								<button type="submit" class="btn btn-primary px-5">Submit</button>
								</div>
									
							</form>
							<br>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
					</div>
        					@endforeach

      							</tr>
      						
          						</tbody>
  								</table>
								</div>
  								<br><br>
  								<hr>
  								<div class="table-responsive">
              					<table id="example" class="table table-striped table-bordered" >
               					 <thead>

        						<th>SN</th>
        						<th>Invoice Name</th>
        						<th>User ID</th>
        						<th>Order ID</th>
        						<th>Total Amount</th>
        						
        						<th>Date</th>
        						<th>Action
        						</th>
      							</tr>
   								 </thead>
    							<tbody>
    								@foreach($invoice as $i)
    							<tr>
        						<td>{{$loop->iteration}}</td>
        						<td>{{$i->invoice_name}}</td>
        						<td>{{$i->user_id}}</td>
        						<td>{{$i->order_id}}</td>
        						<td>{{$i->total}}</td>
        						
        						<td>{{$i->invoice_date}}</td>
        						<td>
        							<a href="{{url('admin/print_invoice/'.$i->id)}}"><button class="btn btn-danger">Print</button></a>&nbsp;        		
        							<a href="{{url('admin/delete_invoice/'.$i->id)}}"><button class="btn btn-info">Delete</button></a>
        							&nbsp;
        						</td>
        												<!-- Modal -->

        					@endforeach

      							</tr>
      						
          						</tbody>
  								</table>
								</div>
    						<br><br>
    					</center>
    				</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<script>
            function calculateAmount(val) {
            	alert(val);
            	var sub_total= document.getElementById('tax').value;
                var total = val * sub_total;
                alert(sub_total);
                /*display the result*/
                var divobj = document.getElementById('total').value = total;
            }
        </script>
@endsection