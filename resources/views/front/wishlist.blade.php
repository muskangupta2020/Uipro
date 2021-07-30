@extends("front.master")

@section("content")

 <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Wishlist</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Wishlist</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Wishlist  -->
    <div class="wishlist-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Images</th>
                                    <th>Product Name</th>
                                    <th>Unit Price </th>
                                    <th>Stock</th>
                                    <th>Add Item</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                 @foreach($wishlist as $c)
                                <tr>
                                    <td class="thumbnail-img">
                                        <a href="#">
									<img class="img-fluid" src="{{ url('/upload/'.$c->p_image) }}" alt="" />
								</a>
                                    </td>
                                    <td class="name-pr">
                                        <a href="#">
									{{$c->p_name}}
								</a>
                                    </td>
                                    <td class="price-pr">
                                        <p>Rs. {{$c->unit_price}}</p>
                                    </td>
                                    @if($c->stock != 0)
                                    <td class="quantity-box">In Stock</td>
                                     @elseif($c->stock == 0)
                                     <td class="quantity-box">Out of Stock</td>
                                     @endif
                                    <td class="add-pr">
                                        <a class="btn hvr-hover" href="{{url('add/to/cart/'.$c->id)}}">Add to Cart</a>
                                    </td>
                                    <td class="remove-pr">
                                        <a href="{{url('front/delete_wishlist/'.$c->id)}}">
									<i class="fas fa-times"></i>
								</a>
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
    <!-- End Wishlist -->

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
