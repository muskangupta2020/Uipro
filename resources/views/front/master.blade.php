<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Digital Bussiness Global</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{url('front/images/favicon.icon')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{url('front/images/apple-touch-icon.png')}}">
@yield('style')    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('front/css/bootstrap.min.css')}}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{url('front/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{url('front/css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{url('front/css/custom.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script> $(document).ready(function(){ $('#mymodel').modal('show');}); </script>

    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    
</head>

<body>
    <!-- Start Main Top -->
    <div class="main-top">
        @foreach($navbar as $n)
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="text-slid-box">
                        <div id="offer-box" class="carouselTicker">
                            <ul class="offer-box">
                                <li><i class="fab fa-opencart"></i>{{$n->offer1}}</li>
                                <li><i class="fab fa-opencart"></i>{{$n->offer2}}</li>
                                <li><i class="fab fa-opencart"></i>{{$n->offer3}}</li>
                                <li><i class="fab fa-opencart"></i>{{$n->offer4}}</li>
                                <li><i class="fab fa-opencart"></i>{{$n->offer5}}</li>
                                <li><i class="fab fa-opencart"></i>{{$n->offer6}}</li>
                                <li><i class="fab fa-opencart"></i>{{$n->offer7}}</li>
                                <li><i class="fab fa-opencart"></i>{{$n->offer8}}</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="custom-select-box">
                    </div>
                    <div class="right-phone-box">
                        <p>Call US :- <a href="#"> {{$n->contact}}</a></p>
                    </div>
                    <div class="our-link">
                        <ul>
                            
                            @if(Auth::check())
                            <li><span class="text-white">{{Auth::user()->name}}</span></li>
                             <li><a href="{{url('front/logout')}}">Logout</a></li>
                             <li><a href="{{url('user/index')}}">Vendor Dashboard</a>
                            </li>
                            @else
                            <li><a href="{{url('front/login')}}" >Login</a></li>
                            @endif
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
          @endforeach
    </div>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="index.html"><img src="{{ url('/upload/'.$n->logo_image) }}" class="logo" alt="" style="width:100px;height: 100px;" ></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="{{url('/')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('front/about')}}">About Us</a></li>
                         <li class="dropdown megamenu-fw">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Product <i class="fas fa-angle-down"></i></a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Top</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    @foreach($topmen as $tm)
                                                    <li><a href="{{url('front/shop/'.$tm->id)}}">{{$tm->sub_category_name}}</a></li>
                                                    @endforeach
                                                    @foreach($topwomen as $tw)
                                                    <li><a href="{{url('front/shop/'.$tw->id)}}">{{$tw->sub_category_name}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Bottom</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    @foreach($bottommen as $bm)
                                                    <li><a href="{{url('front/shop/'.$bm->id)}}">{{$bm->sub_category_name}}</a></li>
                                                    @endforeach
                                                    @foreach($bottomwomen as $bw)
                                                    <li><a href="{{url('front/shop/'.$bw->id)}}">{{$bw->sub_category_name}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Clothing</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    @foreach($clothing as $clo)
                                                     <li><a href="{{url('front/shop/'.$clo->id)}}">{{$clo->sub_category_name}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Accessories</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                  @foreach($accessories as $acc)
                                                     <li><a href="{{url('front/shop/'.$acc->id)}}">{{$acc->sub_category_name}}</a></li>
                                                    @endforeach
                                                 
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end col-3 -->
                                    </div>
                                    <!-- end row -->
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle " data-toggle="dropdown">SHOP <i class="fas fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{url('add/to/cart_show')}}">Cart</a></li>
                                <li><a href="{{url('front/checkout')}}">Checkout</a></li>
                                <li><a href="{{url('front/my_account')}}">My Account</a></li>
                                <li><a href="{{url('front/wishlist')}}">Wishlist</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{url('front/service')}}">Our Service</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('front/contact_us')}}">Contact Us</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu"><a href="#">
                        <i class="fa fa-shopping-bag" id="cart"></i>
                            <span class="badge">3</span>
                    </a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <ul class="cart-list">
                        <li>
                            <a href="#" class="photo"><img src="{{url('front/images/img-pro-01.jpg')}}" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Delica omtantur </a></h6>
                            <p>1x - <span class="price">$80.00</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="{{url('front/images/img-pro-02.jpg')}}" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Omnes ocurreret</a></h6>
                            <p>1x - <span class="price">$60.00</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="{{url('front/images/img-pro-03.jpg')}}" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Agam facilisis</a></h6>
                            <p>1x - <span class="price">$40.00</span></p>
                        </li>
                        <li class="total">
                            <a href="#" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                            <span class="float-right"><strong>Total</strong>: $180.00</span>
                        </li>
                    </ul>
                </li>
            </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->




@section("content")



@show

<!-- Start Footer  -->
@foreach($footer as $f)
    <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>About ThewayShop</h4>
                            <p>{{$f->about}}
                                </p>
                          @foreach($link as $s)
                            <ul>
                                <li><a href="{{$s->link}}"><img src="/upload/{{ $s->image }}" style="height:33px !important"></a></li>
                               <!--  <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li> -->
                            </ul>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Customer Service</a></li>
                                <li><a href="#">Our Sitemap</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Delivery Information</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address: {{$f->address}}</p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+1-888705770">{{$f->phone}}</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">{{$f->email}}</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->
    @endforeach

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2018 <a href="#">ThewayShop</a> Design By :
            <a href="https://html.design/">html design</a></p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    

    </script>
    @yield('script')
    <script src="{{url('front/js/product.js')}}"></script>
    <script src="{{url('front/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{url('front/js/popper.min.js')}}"></script>
    <script src="{{url('front/js/bootstrap.min.js')}}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{url('front/js/jquery.superslides.min.js')}}"></script>
    <script src="{{url('front/js/bootstrap-select.js')}}"></script>
    <script src="{{url('front/js/inewsticker.js')}}"></script>
    <script src="{{url('front/js/bootsnav.js')}}"></script>
    <script src="{{url('front/js/images-loded.min.js')}}"></script>
    <script src="{{url('front/js/isotope.min.js')}}"></script>
    <script src="{{url('front/js/owl.carousel.min.js')}}"></script>
    <script src="{{url('front/js/baguetteBox.min.js')}}"></script>
    <script src="{{url('front/js/form-validator.min.js')}}"></script>
    <script src="{{url('front/js/contact-form-script.js')}}"></script>
    <script src="{{url('front/js/custom.js')}}"></script>
    
</body>

</html>