 @extends("front.master")

@section("content")
 <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Checkout</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12 mb-3">
                    <div class="checkout-address">
                        <div class="title-left">
                            <h3>Billing address</h3>
                        </div>
                        <form class="needs-validation" method="POST" novalidate action="{{url('payment/checkout')}}">
                            @csrf
                            <div class="row">
                            </div>
                            <div class="mb-3">
                                <input type="text" name="fortotal" id="fortotal" hidden value="<?php  echo $p_total_cost;?>">
                                <label for="username">Username *</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="username" placeholder="" required name="name" value="{{Auth::user()->name}}">
                                    <div class="invalid-feedback" style="width: 100%;"> Your username is required. </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email">Email Address *</label>
                                <input type="email" class="form-control" id="email" placeholder="" 
                                value="{{Auth::user()->email}}" name="email">
                                <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                            </div>
                            <div class="mb-3">
                                <label for="address">Address *</label>
                                <input type="text" class="form-control" id="address" placeholder="" required value="{{Auth::user()->street_address}}" name="street_address">
                                <div class="invalid-feedback"> Please enter your shipping address. </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 mb-3">
                                    <label for="country">City *</label>
                                    <select class="wide w-100" id="country" name="city">
									<option value="{{Auth::user()->states}}" data-display="Select">{{Auth::user()->city}}</option>
									
								</select>
                                    <div class="invalid-feedback"> Please select a valid country. </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="state">State *</label>
                                    <input type="text" class="form-control" id="address" placeholder="" required value="{{Auth::user()->states}}" name="states">
                                    <div class="invalid-feedback"> Please provide a valid state. </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="zip">Zip *</label>
                                    <input type="text" class="form-control" id="zip" placeholder="" required  name="zipcode" value="{{Auth::user()->zipcode}}">
                                    <div class="invalid-feedback"> Zip code required. </div>
                                </div>
                            </div>
                            <hr class="mb-4">
                            <div class="title"> <span>Payment</span> </div>
                            <div class="d-block my-3">
                         
                                 <div class="custom-control custom-checkbox">
                                    <input id="razzorpay" name="payment_mode" type="checkbox" 
                                    class="custom-control-input" required value="paytm">
                                    <label class="custom-control-label" for="razzorpay">Paytm</label>
                                </div>

                                <input type="text" name="total" id="total" hidden value="<?php echo $p_total_cost; ?>">
                                <input type="text" name="sub_total" hidden value="<?php echo $p_total_cost;
                                 ?>">
                                <input type="text" name="discount_amount" id="discount_amount"  hidden>
                            </div>
                            <hr class="mb-1"> 
                            <div class="row">
                            <div class="col-md-6">
                                    <div class="title-left">
                                    <h3>Click on your Coupan Code</h3>
                                    </div>
                                <div class="mb-4">
                                      <div>
                                     @foreach($coupan as $c)
                                           <input id="coupan" name="coupan"  type="checkbox" value="{{$c->coupan_code}}" style="background: #cccccc57;" >
                                            <label class="custom-control-label" for="shippingOption1">{{$c->coupan_code}}&nbsp;{{$c->discount_percent}}%</label>
                                            <br>
                                     @endforeach
                                      </div> 
                                </div>
                            </div>
                              <div class="col-md-6">
                                    <div class="title-left">
                                         <h3>Add your Advance Coupan Code Here</h3>
                                    </div>
                                <div class="mb-4">
                                      <div class="input-group">
                                           <input id="advancecoupan" name="advance_coupan"  type="text" value  =""  style="background: #cccccc57;">
                                            <input type="checkbox" name="applycoupon" id="applycoupon"  
                                            style="margin-top: 5px;width: 35px;height: 16px">&nbsp;&nbsp;&nbsp;<label class="control-label" >Apply Coupon</label>
                                            <br>
                                      </div> 
                                </div>
                            </div>
                            </div>
                        <hr class="mb-1"> 
                              <div class="title-left">
                                    <h3>Shipping Method</h3>
                                </div>
                                <div class="mb-4">
                                    <div class="custom-control custom-radio">
                                        <input id="shippingOption1" name="shipping-method" class="custom-control-input" checked="checked" value="free" type="radio">
                                        <label class="custom-control-label" for="shippingOption1">Standard Delivery</label> <span class="float-right font-weight-bold">FREE</span> </div>
                                    <div class="ml-4 mb-2 small">(3-7 business days)</div>
                                    <div class="custom-control custom-radio">
                                        <input id="shippingOption2" name="shipping-method" class="custom-control-input" type="radio" value="10">
                                        <label class="custom-control-label" for="shippingOption2">Express Delivery</label> <span class="float-right font-weight-bold">10.00&#8377;</span> </div>
                                    <div class="ml-4 mb-2 small">(2-4 business days)</div>
                                    <div class="custom-control custom-radio">
                                        <input id="shippingOption3" name="shipping-method" class="custom-control-input" type="radio" value="20">
                                        <label class="custom-control-label" for="shippingOption3">Next Business day</label> <span class="float-right font-weight-bold">20.00&#8377;</span> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="odr-box">
                                <div class="title-left">
                                    <h3>Shopping cart</h3>
                                </div>
                                @foreach($cart as $c)
                                <div class="rounded p-2 bg-light">
                                    <div class="media mb-2 border-bottom">
                                        <div class="media-body"> <a href="detail.html">{{$c->product_name}}</a>
                                            <div class="small text-muted">total:{{$c->p_price*$c->p_Quantity}}<span class="mx-2">|</span>Quantity:{{$c->p_Quantity}}<span class="mx-2">|</span>Subtotal:{{$c->p_price}}</div>
                                        </div>
                                    </div>
                                   
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="order-box">
                                <div class="title-left">
                                    <h3>Your order</h3>
                                </div>
                                <div class="d-flex">
                                    <div class="font-weight-bold">Product</div>
                                    <div class="ml-auto font-weight-bold">Total</div>
                                </div>
                               
                                <hr class="my-1">
                                <div class="d-flex">
                                    <h4>Sub Total</h4>
                                    <div class="ml-auto font-weight-bold"><?php echo $p_total_cost; ?></div>
                                </div>
                                <hr class="my-1" id="hr-coupan" style="display:none;">
                                <div  id="coupan-amount" style="display:none">
                                    <h4>Coupon Applied</h4>
                                    <div class="ml-auto font-weight-bold" id="amount_cou"></div>
                                    <br>

                                </div>
                                <hr>
                                <div class="d-flex gr-total">
                                    <h5>Grand Total</h5>
                                    <div class="ml-auto h5" id="total_amountDiv"><?php echo $p_total_cost; ?></div>
                                </div>
                                
                                <hr> </div>
                        </div>
                        <div class="col-12 d-flex shopping-box" type="submit"> <button type="submit" class="ml-auto btn hvr-hover" >Place Order</button> </div>
                        </form>

                    </div>


                   </div>
               </div>
    <!-- End Cart -->
    @endsection
@section('script')
<script type="text/javascript">
    $('#coupan').click(function(){
    $.ajax({
        url: "/api/coupanamount?coupan=" + coupon,
        method: "Get",
        dataType: "json",
        success: function(response) {
        var len;
        len = response.data.forEach((element) => {
         var total =$('#total').val();
         var discount = (total * element.discount_percent)/100 ;
         var round= Math.round(discount * 10)/ 10;
         var fg=parseInt(total - round);
         $('#hr-coupan').css('display','block');
         $('#coupan-amount').css('display','block');
         $('#coupan-amount').css('display','flex');
         document.getElementById('amount_cou').innerHTML= "";
        document.getElementById('amount_cou').innerHTML = "<span>"+round+"</span>";
        document.getElementById('total_amountDiv').innerHTML= "";
        document.getElementById('total_amountDiv').innerHTML= fg;
        $('#total').attr('value', '');
        $('#total').attr('value', fg);
        });
},
    });
});


$('#advancecoupan').keyup(function(){
var check =document.getElementById('coupan').checked;
if(check == true){
    alert('You can only use One Coupon Either Advance Coupon On Common Coupon');
   $("#coupan").prop("checked", false);   
 }
else if(check ==  false){
    alert('unchecked');
}

})


$('#applycoupon').click(function(){
   var coupon = $('#advancecoupan').val();
   alert(coupon);
     $.ajax({
        url: "/api/advancecoupan?coupan=" + coupon,
        method: "Get",
        dataType: "json",
        success: function(response) {
        var len;
       // alert(response.advance.advance_discount_percent)
         var total =$('#fortotal').val();
         var discount = (total * response.advance.advance_discount_percent)/100 ;
         var round= Math.round(discount * 10)/ 10;
         var fg=parseInt(total - round);
        $('#hr-coupan').css('display','block');
        $('#coupan-amount').css('display','block');
        $('#coupan-amount').css('display','flex');
        document.getElementById('amount_cou').innerHTML= "";
        document.getElementById('amount_cou').innerHTML = "<span>"+round+"</span>";
        document.getElementById('total_amountDiv').innerHTML= "";
        document.getElementById('total_amountDiv').innerHTML= fg;
        $('#total').attr('value', '');
        $('#total').attr('value', fg);
      
},
    });
})

</script>
@endsection