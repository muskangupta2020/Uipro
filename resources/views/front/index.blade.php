@extends("front.master")
@section("content")
<div class="modal fade" id="mymodel" style="padding-top: 145px;">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header lg" style="background-color: #d33b33">
        <h5 class="modal-title" style="color: white">Important Alerts!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color: ">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        
        <ul>
             @foreach($advt as $m)
            <li>
                <h2>{{$m->title}} <img src="https://www.rgpv.ac.in/Images/new_icon_blink.gif"></h2>

            </li>
               @endforeach
        </ul>
        <ul>
             @foreach($advt as $m)
            <li>
                <h2>{{$m->title}} <img src="https://www.rgpv.ac.in/Images/new_icon_blink.gif"></h2>

            </li>
               @endforeach
        </ul>

        

      </div>
      
    </div>
  </div>
</div>

    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            @foreach($carousel as $c)
            <li class="text-left">
                <img src="{{ url('/upload/'.$c->image) }}" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>{{$c->title}}</strong></h1>
                            <p class="m-b-40">{{$c->description}}</p>
                            <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fas fa-angle-right"></i></a>
            <a href="#" class="prev"><i class="fas fa-angle-left"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row">
                 @foreach($category as $c)
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="{{ url('/upload/'.$c->img1) }}" alt="" style="
    max-height: 350px !important;"/>
                        <a class="btn hvr-hover" href="{{url('front/shop_detail/'.$c->id)}}">{{$c->product_name}}</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Categorie=s -->

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

    <!-- Start Blog  -->
    <div class="latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>latest blog</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                 @foreach($blog as $b)
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="{{url('/upload/'.$b->image)}}" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>{{$b->title}}</h3>
                                <p>{{$b->description}}</p>
                            </div>
                            <ul class="option-blog">
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Likes"><i class="far fa-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Views"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Comments"><i class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                  @endforeach
            </div>
        </div>
    </div>
    <!-- End Blog  -->


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
