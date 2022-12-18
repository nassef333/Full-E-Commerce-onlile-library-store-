<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Booksto - Responsive Bootstrap 4 Admin Dashboard Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="css/typography.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <!-- loader Start -->

    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Sidebar  -->
        <div class="iq-sidebar">
            <div class="iq-sidebar-logo d-flex justify-content-between">
                <a href="index.html" class="header-logo">
                    <!-- <img src="images/logo.png" class="img-fluid rounded-normal" alt=""> -->
                    <div class="logo-title">
                       <span class="text-primary text-uppercase">BookFacto</span>
                    </div>
                 </a>
                <div class="iq-menu-bt-sidebar">
                    <div class="iq-menu-bt align-self-center">
                        <div class="wrapper-menu">
                            <div class="main-circle"><i class="las la-bars"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sidebar-scrollbar">
                <nav class="iq-sidebar-menu">
                    <ul id="iq-sidebar-toggle" class="iq-menu">
                        <li class="active active-menu">
                            <a href="#dashboard" class="iq-waves-effect" data-toggle="collapse" aria-expanded="true"><span class="ripple rippleEffect"></span><i class="las la-home iq-arrow-left"></i><span>Shop</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="dashboard" class="iq-submenu collapse show" data-parent="#iq-sidebar-toggle">
                                <li><a href="/"><i class="las la-house-damage"></i>Home Page</a></li>
                                <li><a href="/"><i class="ri-function-line"></i>Category Page</a></li>
                                <li><a href="/"><i class="ri-book-line"></i>Book Page</a></li>
                                <li class="active"><a href="#"><i class="ri-checkbox-multiple-blank-line"></i>Checkout</a></li>
                                <li><a href="{{url('wishlist')}}"><i class="ri-heart-line"></i>wishlist</a></li>
                            </ul>
                        </li>
                  
                    </ul>
                </nav>
                <div id="sidebar-bottom" class="p-3 position-relative">
                    <div class="iq-card">
                        <div class="iq-card-body">
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- TOP Nav Bar -->
        <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <div class="iq-menu-bt d-flex align-items-center">
                        <div class="wrapper-menu">
                            <div class="main-circle"><i class="las la-bars"></i></div>
                        </div>
                        <div class="iq-navbar-logo d-flex justify-content-between">
                            <a href="index.html" class="header-logo">
                           <img src="images/logo.png" class="img-fluid rounded-normal" alt="">
                           <div class="logo-title">
                              <span class="text-primary text-uppercase">BookFacto</span>
                           </div>
                        </a>
                        </div>
                    </div>
                    <div class="navbar-breadcrumb">
                        <h5 class="mb-0">Cart Page</h5>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home / </a></li>
                                <li>cart</li>
                            </ul>
                        </nav>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
                  </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto navbar-list">
                            <li class="nav-item nav-icon">
                                <a href="{{url('logout')}}" class=" iq-waves-effect text-gray rounded"><i class="ri-login-box-line ml-2 text-danger"></i></a>                           </a>
                            </li>
                            <li class="nav-item nav-icon dropdown">
                                <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                           <i class="ri-shopping-cart-2-line"></i>
                           <span class="badge badge-danger count-cart rounded-circle">{{$count}}</span>
                           </a>
                                <div class="iq-sub-dropdown">
                                    <div class="iq-card shadow-none m-0">
                                        <div class="iq-card-body p-0 toggle-cart-info">
                                            <div class="bg-primary p-3">
                                                <h5 class="mb-0 text-white">All Carts<small class="badge  badge-light float-right pt-1">{{$count}}</small></h5>
                                            </div>
                                            @foreach ($carts as $cart)
                                            <div class="iq-sub-card">
                                                <div class="media align-items-center">
                                                    <div class="">
                                                        <img class="rounded" src='{{asset("storage/$cart->img")}}' alt="">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">{{$cart->name}}</h6>
                                                        <p class="mb-0">{{$cart->price}}$</p>
                                                    </div>
                                                    <a href='{{url("deleteCart/$cart->id")}}' class="float-right font-size-24 text-danger"><i class="ri-close-fill"></i></a>
                                                </div>
                                            </div>   
                                            @endforeach
                                            <div class="d-flex align-items-center text-center p-3">
                                                <a class="btn btn-primary mr-2 iq-sign-btn" href="{{url('cart')}}" role="button">View Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="line-height pt-3">
                                <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                              <img src='{{asset("storage/$user->img")}}' class="img-fluid rounded-circle mr-3" alt="user">
                              <div class="caption">
                                 <h6 class="mb-1 line-height">{{$user->firstname." ".$user->lastname}}</h6>
                              </div>
                           </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- TOP Nav Bar END -->
        <!-- Page Content  -->
        <div id="content-page" class="content-page">
            <div class="container-fluid checkout-content">
                <div class="row">
                    <div id="cart" class="card-block show p-0 col-12">
                        <div class="row align-item-center">
                            <div class="col-lg-8">
                                <div class="iq-card">
                                    <div class="iq-card-header d-flex justify-content-between iq-border-bottom mb-0">
                                        <div class="iq-header-title">
                                            <h4 class="card-title">Shopping Cart</h4>
                                        </div>
                                    </div>
                                    <div class="iq-card-body">
                                        <ul class="list-inline p-0 m-0">
                                            @php
                                                $totalPrice = 0;
                                            @endphp
                                            @foreach ($carts as $cart)
                                            <li class="checkout-product">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-2">
                                                        <span class="checkout-product-img">
                                                            <img src='{{asset("storage/$cart->img")}}' class="img-fluid rounded w-100" alt="">
                                             </span>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="checkout-product-details">
                                                            <h5>{{$cart->name}}</h5>
                                                            <p class="text-success">In stock</p>
                                                            <div class="price">
                                                                <h5>{{$cart->price}}$</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="row">
                                                            <div class="col-sm-10">
                                                                <div class="row align-items-center mt-2">
                                                                    <div class="col-sm-7 col-md-6">
                                                                        <a href='{{url("removeOne/$cart->id")}}'><button type="button" class="fa fa-minus qty-btn" id="btn-minus"></button></a>
                                                                        <input type="text" id="quantity" value="{{$cart->pivot->count}}">
                                                                        <a href='{{url("addToCart/$cart->id")}}'><button type="button" class="fa fa-plus qty-btn" id="btn-plus"></button></a>
                                                                    </div>
                                                                    <div class="col-sm-5 col-md-6">
                                                                        <span class="product-price">@php
                                                                            $total = $cart->price*$cart->pivot->count;
                                                                            echo $total."$";
                                                                            $newTotal = $totalPrice + $total; 
                                                                            $totalPrice = $newTotal; 
                                                                            // $total = $cart->price*$cart->count;
                                                                            // echo $total;
                                                                        @endphp</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <a href='{{url("deleteCart/$cart->id")}}' class="text-dark font-size-20"><i class="ri-delete-bin-7-fill"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>                                                
                                            @endforeach

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="iq-card">
                                    <div class="iq-card-body">
                                        <p>Options</p>
                                        <hr>
                                        <p><b>Price Details</b></p>
                                        <div class="d-flex justify-content-between mb-1">
                                            <span>Total MRP</span>
                                            <span>{{$totalPrice}}$</span>
                                        </div>
                                        <div class="d-flex justify-content-between mb-1">
                                            <span>Bag Discount</span>
                                            <span class="text-success">-20$</span>
                                        </div>
                                        <div class="d-flex justify-content-between mb-1">
                                            <span>Estimated Tax</span>
                                            <span>15$</span>
                                        </div>
                                        <div class="d-flex justify-content-between mb-1">
                                            <span>EMI Eligibility</span>
                                            <span><a href="#">Details</a></span>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <span>Delivery Charges</span>
                                            <span class="text-success">Free</span>
                                        </div>
                                        <hr>
                                        <div class="d-flex justify-content-between">
                                            <span class="text-dark"><strong>Total</strong></span>
                                            <span class="text-dark"><strong>@php
                                                if($totalPrice == 0)
                                                echo 0;
                                                else
                                                echo $totalPrice-5 ."$";
                                            @endphp</strong></span>
                                        </div>
                                        <a id="place-order" href="{{url('addToPurshaseBooks')}}" class="btn btn-primary d-block mt-3 next">Place order</a>
                                    </div>
                                </div>
                                <div class="iq-card ">
                                    <div class="card-body iq-card-body p-0 iq-checkout-policy">
                                        <ul class="p-0 m-0">
                                            <li class="d-flex align-items-center">
                                                <div class="iq-checkout-icon">
                                                    <i class="ri-checkbox-line"></i>
                                                </div>
                                                <h6>Security policy (Safe and Secure Payment.)</h6>
                                            </li>
                                            <li class="d-flex align-items-center">
                                                <div class="iq-checkout-icon">
                                                    <i class="ri-truck-line"></i>
                                                </div>
                                                <h6>Delivery policy (Home Delivery.)</h6>
                                            </li>
                                            <li class="d-flex align-items-center">
                                                <div class="iq-checkout-icon">
                                                    <i class="ri-arrow-go-back-line"></i>
                                                </div>
                                                <h6>Return policy (Easy Retyrn.)</h6>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div id="payment" class="card-block p-0 col-12">
                        <div class="row align-item-center">
                           
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Wrapper END -->
    <!-- Footer -->
    <footer class="iq-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                    </ul>
                </div>
                
            </div>
        </div>
    </footer>
    <!-- Footer END -->
    <!-- color-customizer -->
    <div class="iq-colorbox color-fix">
        <div class="buy-button"> <a class="color-full" href="#"><i class="fa fa-spinner fa-spin"></i></a> </div>
        <div id="right-sidebar-scrollbar" class="iq-colorbox-inner">
            <div class="clearfix color-picker">
                <h3 class="iq-font-black">Booksto Awesome Color</h3>
                <p>This color combo available inside whole template. You can change on your wish, Even you can create your own with limitless possibilities! </p>
                <ul class="iq-colorselect clearfix">
                    <li class="color-1 iq-colormark" data-style="color-1"></li>
                    <li class="color-2" data-style="iq-color-2"></li>
                    <li class="color-3" data-style="iq-color-3"></li>
                    <li class="color-4" data-style="iq-color-4"></li>
                    <li class="color-5" data-style="iq-color-5"></li>
                    <li class="color-6" data-style="iq-color-6"></li>
                    <li class="color-7" data-style="iq-color-7"></li>
                    <li class="color-8" data-style="iq-color-8"></li>
                    <li class="color-9" data-style="iq-color-9"></li>
                    <li class="color-10" data-style="iq-color-10"></li>
                    <li class="color-11" data-style="iq-color-11"></li>
                    <li class="color-12" data-style="iq-color-12"></li>
                    <li class="color-13" data-style="iq-color-13"></li>
                    <li class="color-14" data-style="iq-color-14"></li>
                    <li class="color-15" data-style="iq-color-15"></li>
                    <li class="color-16" data-style="iq-color-16"></li>
                    <li class="color-17" data-style="iq-color-17"></li>
                    <li class="color-18" data-style="iq-color-18"></li>
                    <li class="color-19" data-style="iq-color-19"></li>
                    <li class="color-20" data-style="iq-color-20"></li>
                </ul>
                <a target="_blank" class="btn btn-primary d-block mt-3" href="">Purchase Now</a>
            </div>
        </div>
    </div>
    <!-- color-customizer END -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Appear JavaScript -->
    <script src="js/jquery.appear.js"></script>
    <!-- Countdown JavaScript -->
    <script src="js/countdown.min.js"></script>
    <!-- Counterup JavaScript -->
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <!-- Wow JavaScript -->
    <script src="js/wow.min.js"></script>
    <!-- Apexcharts JavaScript -->
    <script src="js/apexcharts.js"></script>
    <!-- Slick JavaScript -->
    <script src="js/slick.min.js"></script>
    <!-- Select2 JavaScript -->
    <script src="js/select2.min.js"></script>
    <!-- Owl Carousel JavaScript -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Magnific Popup JavaScript -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- Smooth Scrollbar JavaScript -->
    <script src="js/smooth-scrollbar.js"></script>
    <!-- lottie JavaScript -->
    <script src="js/lottie.js"></script>
    <!-- am core JavaScript -->
    <script src="js/core.js"></script>
    <!-- am charts JavaScript -->
    <script src="js/charts.js"></script>
    <!-- am animated JavaScript -->
    <script src="js/animated.js"></script>
    <!-- am kelly JavaScript -->
    <script src="js/kelly.js"></script>
    <!-- am maps JavaScript -->
    <script src="js/maps.js"></script>
    <!-- am worldLow JavaScript -->
    <script src="js/worldLow.js"></script>
    <!-- Raphael-min JavaScript -->
    <script src="js/raphael-min.js"></script>
    <!-- Morris JavaScript -->
    <script src="js/morris.js"></script>
    <!-- Morris min JavaScript -->
    <script src="js/morris.min.js"></script>
    <!-- Flatpicker Js -->
    <script src="js/flatpickr.js"></script>
    <!-- Style Customizer -->
    <script src="js/style-customizer.js"></script>
    <!-- Chart Custom JavaScript -->
    <script src="js/chart-custom.js"></script>
    <!-- Custom JavaScript -->
    <script src="js/custom.js"></script>
</body>

</html>