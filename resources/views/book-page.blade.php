<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Book</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="/images/favicon.ico" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="/css/typography.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="/css/responsive.css">
</head>

<body>

    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Sidebar  -->
        <div class="iq-sidebar">
            <div class="iq-sidebar-logo d-flex justify-content-between">
                <a href="/index.html" class="header-logo">
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
                                <li><a href="{{url('/')}}"><i class="las la-house-damage"></i>Home Page</a></li>
                                <li><a href='#'><i class="ri-function-line"></i>Category Page</a></li>
                                <li class="active"><a href="#"><i class="ri-book-line"></i>Book Page</a></li>
                                <li><a href="{{url('cart')}}"><i class="ri-checkbox-multiple-blank-line"></i>Checkout</a></li>
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
                        <h5 class="mb-0">Book Page</h5>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home /</a></li>
                                <li>book</li>
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
                                                        <img class="rounded" src="/images/favorite/{{$cart->img}}" alt="">
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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                            <div class="iq-card-header d-flex justify-content-between align-items-center">
                            </div>
                            <div class="iq-card-body pb-0">
                                <div class="description-contens align-items-top row">
                                    <div class="col-md-6">
                                        <div class="iq-card-transparent iq-card-block iq-card-stretch iq-card-height">
                                            <img src='{{asset("storage/$book->img")}}' class="img-fluid rounded w-100" alt="">
                                            <div class="iq-card-body p-0">
                                                <div class="row align-items-center">
                                                    <div class="col-3">
                                                        <ul id="description-slider-nav" class="list-inline p-0 m-0  d-flex align-items-center">
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                   <img src="images/book-dec/01.jpg" class="img-fluid rounded w-100" alt="">
                                                   </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                   <img src="images/book-dec/02.jpg" class="img-fluid rounded w-100" alt="">
                                                   </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                   <img src="images/book-dec/03.jpg" class="img-fluid rounded w-100" alt="">
                                                   </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                   <img src="images/book-dec/04.jpg" class="img-fluid rounded w-100" alt="">
                                                   </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                   <img src="images/book-dec/05.jpg" class="img-fluid rounded w-100" alt="">
                                                   </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                   <img src="images/book-dec/06.jpg" class="img-fluid rounded w-100" alt="">
                                                   </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-9">
                                                        <ul id="description-slider" class="list-inline p-0 m-0  d-flex align-items-center">
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                   <img src="images/book-dec/01.jpg" class="img-fluid w-100 rounded" alt="">
                                                   </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                   <img src="images/book-dec/02.jpg" class="img-fluid w-100 rounded" alt="">
                                                   </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                   <img src="images/book-dec/03.jpg" class="img-fluid w-100 rounded" alt="">
                                                   </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                   <img src="images/book-dec/04.jpg" class="img-fluid w-100 rounded" alt="">
                                                   </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                   <img src="images/book-dec/05.jpg" class="img-fluid w-100 rounded" alt="">
                                                   </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                   <img src="images/book-dec/06.jpg" class="img-fluid w-100 rounded" alt="">
                                                   </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="iq-card-transparent iq-card-block iq-card-stretch iq-card-height">
                                            <div class="iq-card-body p-0">
                                                <h3 class="mb-3">{{$book->name}}</h3>
                                                <div class="price d-flex align-items-center font-weight-500 mb-2">
                                                    <span class="font-size-24 text-dark">
                                                        @if ($download)
                                                            <p class="text-primary">Owned</p>
                                                        @else
                                                        {{$book->price}}$</span>
                                                        @endif
                                                </div>
                                                <form action='{{url("addRate")}}' method="POST">
                                                    @csrf
                                                    <div class="modal-header">
                                                        <h5 class="modal-title p-0 m-0 " id="exampleModalLable">Rating</h5>
                                                        
                                                    </div>

                                                    <div class="rating-css">
                                                        <div class="star-icon">
                                                            <input type="hidden" name="book_id" id="" value='{{$book->id}}'>
                                                            <input type="radio" value="1" name="rate"@if ($rating[0] == 1)
                                                            {{'checked'}}
                                                            @endif id="rating1">
                                                            <label for="rating1" class="fa fa-star"></label>
                                                            <input type="radio" value="2" name="rate"@if ($rating[0] == 2)
                                                            {{'checked'}}
                                                        @endif  id="rating2">
                                                            <label for="rating2" class="fa fa-star"></label>
                                                            <input type="radio" value="3" name="rate"@if ($rating[0] == 3)
                                                            {{'checked'}}
                                                        @endif  id="rating3">
                                                            <label for="rating3" class="fa fa-star"></label>
                                                            <input type="radio" value="4" name="rate"@if ($rating[0] == 4)
                                                            {{'checked'}}
                                                        @endif  id="rating4">
                                                            <label for="rating4" class="fa fa-star"></label>
                                                            <input type="radio" value="5" name="rate"@if ($rating[0] == 5)
                                                            {{'checked'}}
                                                        @endif  id="rating5">
                                                            <label for="rating5" class="fa fa-star"></label>
                                                            <span>{{$ratingcnt}} Ratings</span>
                                                        </div>
                                                    </div>

                                                    <div class="model-footer">
                                                        <button type="submit" class="btn btn-danger">Rate</button>
                                                    </div>


                                                </form>
                                                <hr>

                                                
                                                <span class="text-dark mb-4 pb-4 iq-border-bottom d-block">{{$book->description}}</span>
                                                <div class="text-primary mb-4">Author: <span class="text-body">{{$book->author}}</span></div>
                                                <div class="mb-4 d-flex align-items-center">
                                                    <a href='{{url("addToCart/$book->id")}}' class="btn btn-primary view-more mr-2">Add To Cart</a>
                                                    @if ($download)
                                                        <a href='{{asset("storage/$book->cdn")}}' class="btn btn-dark text-white view-more mr-2">Download</a>

                                                    @endif
                                                    
                                                </div>
                                                <div class="mb-3">
                                                    <a href='{{url("addTowishlist/$book->id")}}' class="text-body text-center"><span class="avatar-30 rounded-circle bg-danger d-inline-block mr-2"><i class=" ri-heart-fill"></i></span><span>Add to Wishlist</span></a>
                                                </div>
                                                <div class="iq-social d-flex align-items-center">
                                                    <h5 class="mr-2">Share:</h5>
                                                    <ul class="list-inline d-flex p-0 mb-0 align-items-center">
                                                        <li>
                                                            <a href="#" class="avatar-40 rounded-circle bg-primary mr-2 facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="avatar-40 rounded-circle bg-primary mr-2 twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="avatar-40 rounded-circle bg-primary mr-2 youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="avatar-40 rounded-circle bg-primary pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                            <div class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                                <div class="iq-header-title">
                                    <h4 class="card-title mb-0">Similar Books</h4>
                                </div>
                                <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <a href='{{url("category/$book->id")}}' class="btn btn-sm btn-primary view-more">View More</a>
                                </div>
                            </div>
                            <div class="iq-card-body single-similar-contens">
                                <ul id="single-similar-slider" class="list-inline p-0 mb-0 row">
                                    @foreach ($similar as $simm)
                                    <li class="col-md-3">
                                        <div class="row align-items-center">
                                            <div class="col-5">
                                                <div class="position-relative image-overlap-shadow">
                                                    <img src='{{asset("storage/$simm->img")}}' class="img-fluid rounded w-100" alt="">
                                                    <div class="view-book">
                                                        <a href="{{url("book/$simm->id")}}" class="btn btn-sm btn-white">View Book</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-7 pl-0">
                                                <h6 class="mb-2">{{$simm->name}}</h6>
                                                <p class="text-body">Author : {{$simm->author}}</p>
                                                <a href='{{url("book/$simm->id")}}' class="text-dark" tabindex="-1">Read Now<i class="ri-arrow-right-s-line"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-12">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                            <div class="iq-card-header d-flex justify-content-between align-items-center position-relative mb-0 trendy-detail">
                                <div class="iq-header-title">
                                    <h4 class="card-title mb-0">Top Rated Books</h4>
                                </div>
                            </div>
                            <div class="iq-card-body trendy-contens">
                                <ul id="trendy-slider" class="list-inline p-0 mb-0 row">
                                    @foreach ($topRated as $top)
                                    <li class="col-md-3">
                                        <div class="d-flex align-items-center">
                                            <div class="col-5 p-0 position-relative image-overlap-shadow">
                                                <img src='{{asset("storage/$top->img")}}' class="img-fluid rounded w-100" alt="">
                                                <div class="view-book">
                                                    <a href='{{url("book/$top->book_id")}}' class="btn btn-sm btn-white">View Book</a>
                                                </div>
                                            </div>

                                            <div class="col-7">
                                                <div class="mb-2">
                                                    <h6 class="mb-1">{{$top->name}}</h6>
                                                    <p class="font-size-13 line-height mb-1">{{$top->author}}</p>
                                                </div>
                                                <div class="d-block line-height">
                                                    <span class="font-size-11 text-warning mt-2">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star" style="color:@php
                                                        if(($top['AVG(rate)']) < 2)echo"black";
                                                    @endphp"></i>
                                                        <i class="fa fa-star" style="color:@php
                                                        if(($top['AVG(rate)']) < 3)echo"black";
                                                    @endphp"></i>
                                                        <i class="fa fa-star" style="color:@php
                                                        if(($top['AVG(rate)']) < 4)echo"black";
                                                    @endphp"></i>
                                                        <i class="fa fa-star" style="color:@php
                                                        if(($top['AVG(rate)']) < 5)echo"black";
                                                    @endphp"></i>
                                       </span>
                                                </div>
                                                <div class="price d-flex align-items-center my-2">
                                                    <h6><b>{{$top->price}}$</b></h6>
                                                </div>
                                                <div class="iq-product-action">
                                                    <a href='{{url("addToCart/$top->book_id")}}'><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                    <a href="{{url("addTowishlist/$top->book_id")}}" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>




                                    
                                    @endforeach
                                </ul>
                            </div>
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
    <script src="/js/jquery.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <!-- Appear JavaScript -->
    <script src="/js/jquery.appear.js"></script>
    <!-- Countdown JavaScript -->
    <script src="/js/countdown.min.js"></script>
    <!-- Counterup JavaScript -->
    <script src="/js/waypoints.min.js"></script>
    <script src="/js/jquery.counterup.min.js"></script>
    <!-- Wow JavaScript -->
    <script src="/js/wow.min.js"></script>
    <!-- Apexcharts JavaScript -->
    <script src="/js/apexcharts.js"></script>
    <!-- Slick JavaScript -->
    <script src="/js/slick.min.js"></script>
    <!-- Select2 JavaScript -->
    <script src="/js/select2.min.js"></script>
    <!-- Owl Carousel JavaScript -->
    <script src="/js/owl.carousel.min.js"></script>
    <!-- Magnific Popup JavaScript -->
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <!-- Smooth Scrollbar JavaScript -->
    <script src="/js/smooth-scrollbar.js"></script>
    <!-- lottie JavaScript -->
    <script src="/js/lottie.js"></script>
    <!-- am core JavaScript -->
    <script src="/js/core.js"></script>
    <!-- am charts JavaScript -->
    <script src="/js/charts.js"></script>
    <!-- am animated JavaScript -->
    <script src="/js/animated.js"></script>
    <!-- am kelly JavaScript -->
    <script src="/js/kelly.js"></script>
    <!-- am maps JavaScript -->
    <script src="/js/maps.js"></script>
    <!-- am worldLow JavaScript -->
    <script src="/js/worldLow.js"></script>
    <!-- Raphael-min JavaScript -->
    <script src="/js/raphael-min.js"></script>
    <!-- Morris JavaScript -->
    <script src="/js/morris.js"></script>
    <!-- Morris min JavaScript -->
    <script src="/js/morris.min.js"></script>
    <!-- Flatpicker Js -->
    <script src="/js/flatpickr.js"></script>
    <!-- Style Customizer -->
    <script src="/js/style-customizer.js"></script>
    <!-- Chart Custom JavaScript -->
    <script src="/js/chart-custom.js"></script>
    <!-- Custom JavaScript -->
    <script src="/js/custom.js"></script>
</body>

</html>