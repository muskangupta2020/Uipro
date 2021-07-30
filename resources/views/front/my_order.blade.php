@extends("front.master")

@section("content")
<br>
<div class="container" style="border: 2px solid red;">
    <br>
   
<div class="d-flex flex-column justify-content-center align-items-center" id="order-heading">
    <div class="text-uppercase">
        <p>Order detail</p>
    </div>
     
    <div class="h4">{{$checkout->created_at->toDateString()}}</div>
    <div class="pt-1">
        <p>Order {{$checkout->order_status}} is currently<b class="text-dark"></b></p>
    </div>
  
    <div class="btn close text-white"> &times; </div>
</div>
<div class="wrapper bg-white" style="padding: 1px 31px;">
    <div class="table-responsive">
        <table class="table table-borderless">
            <thead>
                <tr class="text-uppercase text-muted">
                    <th scope="col">product</th>
                     <th scope="col" class="text-center">product Quantity</th>
                    <th scope="col" class="text-right">Product Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($order as $o)
                <tr>
                    <td scope="row">{{$o->p_name}}</td>
                    <td class="text-center">{{$o->p_Quantity}}</td>
                    <td class="text-right"><b>{{$o->p_price}}</b></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
   
    <div class="pt-2 border-bottom mb-3"></div>
    <div class="d-flex justify-content-start align-items-center pl-3">
        <div class="text-muted">Payment Method</div>
        <div class="ml-auto"> <img src="https://www.freepnglogos.com/uploads/mastercard-png/mastercard-logo-logok-15.png" alt="" width="30" height="30"> <label>{{$checkout->payment_mode}}</label> </div>
    </div>
    <div class="d-flex justify-content-start align-items-center py-5 pl-3">
        <div class="text-muted">Shipping</div>
        <div class="ml-auto"> <label>{{$checkout->shiiping_cost}}</label> </div>
    </div>
    <div class="d-flex justify-content-start align-items-center pb-4 pl-3 border-bottom">
        <div class="text-muted"> <button class="text-white btn" class="btn btn-danger" style=" background-color: #66cdaa">Coupon Discount</button> </div>
        <div class="ml-auto price"><?php $discount=$checkout->subtotal - $checkout->total;
 echo $discount."Rs";

    ?> </div>
    </div>
    <div class="d-flex justify-content-start align-items-center pl-3 py-3 mb-4 border-bottom">
        <div class="text-muted"> Today's Total </div>
        <div class="ml-auto h5">{{$checkout->total}}</div>
    </div>
    <div class="row border rounded p-1 my-3">
        <div class="col-md-6 py-3">
            <div class="d-flex flex-column align-items start"> <b>Billing Address</b>
                <p class="text-justify pt-2">James Thompson, 356 Jonathon Apt.220,</p>
                <p class="text-justify">New York</p>
            </div>
        </div>
        <div class="col-md-6 py-3">
            <div class="d-flex flex-column align-items start"> <b>Shipping Address</b>
                <p class="text-justify pt-2">{{$checkout->address}}</p>
                <p class="text-justify">{{$checkout->states}}</p>
            </div>
        </div>
    </div>
    <div class="pl-3 font-weight-bold">Related Subsriptions</div>
    <div class="d-sm-flex justify-content-between rounded my-3 subscriptions">
        <div> <b>{{$checkout->order_id}}</b> </div>
        <div>{{$checkout->created_at->toDateString()}}</div>
        <div>Status: {{$checkout->order_status}}</div>
        <div> Total: <b> {{$checkout->total}} for {{$checkout->no_of_product}} items</b> </div>
    </div>
</div>
<br>
<div class="text-left">
       <a href="{{url('front/invoice/'.$checkout->order_id)}}"><button type="button" class="btn btn-primary" @if($checkout->order_status != 'completed') disabled @else '' @endif >Invoice</button></a>
    </div>
    <br>
</div>
<br>
@endsection