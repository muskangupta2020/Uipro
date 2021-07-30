 @extends("front.master")

@section("content")


    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Shop Detail</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Shop Detail </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Shop Detail  -->
    <div class="shop-detail-box-main">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active"> <img class="d-block w-100" src="{{url('/upload/'.$s->img1)}}" alt="First slide"> </div>
                            <div class="carousel-item"> <img class="d-block w-100" src="{{url('/upload/'.$s->img2)}}" alt="Second slide"> </div>
                            <div class="carousel-item"> <img class="d-block w-100" src="{{url('/upload/'.$s->img3)}}" alt="Third slide"> </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                        <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-1" data-slide-to="0" class="active">
                                <img class="d-block w-100 img-fluid" src="{{url('/upload/'.$s->img1)}}" alt="" />
                            </li>
                            <li data-target="#carousel-example-1" data-slide-to="1">
                                <img class="d-block w-100 img-fluid" src="{{url('/upload/'.$s->img2)}}" alt="" />
                            </li>
                            <li data-target="#carousel-example-1" data-slide-to="2">
                                <img class="d-block w-100 img-fluid" src="{{url('/upload/'.$s->img3)}}" alt="" />
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="single-product-details">
                        <h2>{{$s->product_name}}</h2>
                        <h5>Product Price <del>{{$s->dealer_price}}</del> {{$s->product_cost}}</h5>
                        <p class="available-stock">Available Quantity<span> {{$s->avl_qty}}  <a href="#"></a></span></p>
                            <p>
                                <h4>Short Description:</h4>
                                <p>{{$s->description}}</p>
                            </p>
                                <div class="price-box-bar">
                                    <div class="cart-and-bay-btn">
                                        <a class="btn hvr-hover" data-fancybox-close="" href="{{url('add/to/cart/'.$s->id)}}">Add to cart</a>
                                    </div>
                                </div>

                                <div class="add-to-btn">
                                    <div class="add-comp">
                                        <a class="btn hvr-hover" href="{{url('add/to/wishlist/'.$s->id)}}"><i class="fas fa-heart"></i> Add to wishlist</a>
                                    </div>
                                    <div class="share-bar">
                                        <a class="btn hvr-hover" href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                                        <a class="btn hvr-hover" href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a>
                                        <a class="btn hvr-hover" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                        <a class="btn hvr-hover" href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a>
                                        <a class="btn hvr-hover" href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                    </div>

                </div>
            </div>
        </p>
    </div>
</div>
</div>
            <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Featured Products</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".top-featured">Top featured</button>
                            <button data-filter=".best-seller">Best seller</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list">
                @foreach($best_seller as $b)
                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover" style="height:256px !important;">
                            <div class="type-lb">
                                <p class="sale">{{$b->product_name}}</p>
                            </div>
                            <img src="{{url('/upload/'.$b->img1)}}" class="img-fluid" alt="Image" style="height:256px !important;">
                            <div class="mask-icon" >
                                <ul>
                                    <li><a href="{{url('front/shop_detail/'.$b->id)}}" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="{{url('add/to/wishlist/'.$b->id)}}" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>{{$b->product_name}}</h4>
                            <h5> Rs.{{$b->selling_price}}</h5>
                        </div>
                    </div>
                </div>
                 @endforeach
                @foreach($feature as $fe)
                <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover" style="height:256px !important;">
                            <div class="type-lb">
                                <p class="new">{{$fe->product_name}}</p>
                            </div>
                            <img src="{{url('/upload/'.$fe->img1)}}" class="img-fluid" alt="Image" style="height:256px !important;">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="{{url('front/shop_detail/'.$fe->id)}}" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="{{url('add/to/wishlist/'.$fe->id)}}" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="{{url('add/to/cart/'.$fe->a_id)}}">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>{{$fe->product_name}}</h4>
                            <h5> Rs.{{$fe->selling_price}}</h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Products  -->
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
