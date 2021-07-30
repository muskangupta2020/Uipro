@extends("front.master")
@section("content")     
<!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Cart</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Cart</li>
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
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Images</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $p_total_cost=0; ?>
                                @foreach($cart as $c)
                                <tr>
                                    <td class="thumbnail-img">
                                        <a href="#">
									<img class="img-fluid" src="{{ url('/upload/'.$c->img1) }}" alt="" />
								</a>
                                    </td>
                                    <td class="name-pr">
                                        <a href="#">
									{{$c->product_name}}
								</a>
                                    </td>
                                    <td class="price-pr">
                                        <p>Rs. {{$c->p_price}}</p>
                                    </td>
                                    <td class="quantity-box"><a href="{{url('cart/quantity_update/'.$c->c_id.'/1')}}">+</a><input type="text" size="4"  min="0" step="1" class="c-input-text qty text" value="{{$c->p_Quantity}}"><a href="{{url('cart/quantity_update/'.$c->c_id.'/-1')}}">-</a></td>
                                    <td class="total-pr">
                                        <p>{{$c->p_price*$c->p_Quantity}}</p>
                                    </td>
                                    <td class="remove-pr">
                                        <a href="{{url('front/delete_cart/'.$c->c_id)}}">
									<i class="fas fa-times"></i>
								</a>
                                    </td>
                                </tr>
                                <?php $p_total_cost=$p_total_cost+($c->p_price*$c->p_Quantity); ?>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
                
                <div class="col-lg-6 col-sm-6">
                    <div class="update-box">
                        <input value="Update Cart" type="submit">
                    </div>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-lg-8 col-sm-12"></div>
                <div class="col-lg-4 col-sm-12">
                    <div class="order-box">
                        <h3>Order summary</h3>
                        <div class="d-flex">
                            <h4>Sub Total</h4>
                            <div class="ml-auto font-weight-bold">Rs. {{$p_total_cost}}</div>
                        </div>
                        
                     
                        <!--<div class="d-flex">
                            <h4>Coupon Discount</h4>
                            <div class="ml-auto font-weight-bold"> $ 10 </div>
                        </div>
                        <div class="d-flex">
                            <h4>Tax</h4>
                            <div class="ml-auto font-weight-bold"> $ 2 </div>
                        </div>
                        <div class="d-flex">
                            <h4>Shipping Cost</h4>
                            <div class="ml-auto font-weight-bold"> Free </div>
                        </div>-->
                        <hr>
                        <div class="d-flex gr-total">
                            <h5>Grand Total</h5>
                            <div class="ml-auto h5" id="grand_total" >Rs. {{$p_total_cost}}</div>
                        </div> 
                        <hr>
                         </div>
                </div>
                <div class="col-12 d-flex shopping-box"><a href="{{url('front/checkout')}}" class="ml-auto btn hvr-hover">Checkout</a> </div>
            </div>

        </div>
    </div>
    <!-- End Cart -->

    <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            @foreach($insta as $c)
            <div class="item">
                <div class="ins-inner-box">
                    <img src="{{ url('/upload/'.$c->image) }}" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- End Instagram Feed  -->
    @endsection
