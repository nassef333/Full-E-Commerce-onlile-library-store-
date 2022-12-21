<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BookFacto</title>
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

<body class="sidebar-main-active right-column-fixed">
    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Sidebar  -->
        <div class="iq-sidebar">
            <div class="iq-sidebar-logo d-flex justify-content-between">
                <a href="{{url('/')}}" class="header-logo">
                  <img src="images/logo.png" class="img-fluid rounded-normal" alt="">
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
                        <li>
                            <a href="#dashboard" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span class="ripple rippleEffect"></span><i class="las la-home iq-arrow-left"></i><span>Shop</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="dashboard" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li><a href="/"><i class="las la-house-damage"></i>Home Page</a></li>
                                <li><a href="/"><i class="ri-function-line"></i>Category Page</a></li>
                                <li><a href="/"><i class="ri-book-line"></i>Book Page</a></li>
                                <li><a href="cart"><i class="ri-checkbox-multiple-blank-line"></i>Checkout</a></li>
                                <li><a href="wishlist"><i class="ri-heart-line"></i>wishlist</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
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
            <div class="container-fluid">
                <div class="row profile-content">
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="iq-card">
                            <div class="iq-card-body profile-page">
                                <div class="profile-header">
                                    <div class="cover-container text-center">
                                        <img src='{{asset("storage/$user->img")}}' alt="profile-bg" class="rounded-circle img-fluid">
                                        <div class="profile-detail mt-3">
                                            <h3>{{$user->firstname . " " . $user->lastname}}</h3>
                                            <p class="text-primary">{{$user->username}}</p>
                                            <p>Joined At :                                                                 
                                                @php
                                                    $date = $user->created_at;
                                                    echo date('d M Y h.i.s A', strtotime($date));
                                                @endphp</p>
                                        </div>
                                        <div class="iq-social d-inline-block align-items-center">
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
                    <div class="col-12 col-md-12 col-lg-8">
                        <div class="row">




                            <div class="iq-card col-md-6">
                                <div class="iq-card-header d-flex justify-content-between align-items-center mb-0">
                                    <div class="iq-header-title d-flex justify-content-between align-items-center position-relative">
                                        <h4 class="card-title mb-0">
                                            <span class="mr-2">Personal Details</span>   
                                            <span class="ml-5"><a class="btn btn-primary text-right" href="editProfile">Edit</a></span>
                                        </h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <ul class="list-inline p-0 mb-0">
                                        <li>
                                            <div class="row align-items-center justify-content-between mb-3">
                                                <div class="col-sm-6">
                                                    <h6>First Name</h6>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="mb-0">{{$user->firstname}}</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row align-items-center justify-content-between mb-3">
                                                <div class="col-sm-6">
                                                    <h6>Last Name</h6>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="mb-0">{{$user->lastname}}</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row align-items-center justify-content-between mb-3">
                                                <div class="col-sm-6">
                                                    <h6>Phone</h6>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="mb-0">{{$user->phone}}</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row align-items-center justify-content-between mb-3">
                                                <div class="col-sm-6">
                                                    <h6>Email</h6>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="mb-0" style="overflow: hidden">{{$user->email}}</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row align-items-center justify-content-between mb-3">
                                                <div class="col-sm-6">
                                                    <h6>Role</h6>
                                                </div>
                                                <div class="col-sm-6">
                                                    @php
                                                        if($user->role == 1) echo '<p class="mb-0">User</p>';
                                                        else echo '<p class="mb-0 text-danger">Admin</p>';
                                                    @endphp
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row align-items-center justify-content-between mb-3">
                                                <div class="col-sm-6">
                                                    <h6>Id</h6>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="mb-0">{{$user->id}}</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>




                            <div class="col-md-6">
                                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                    <div class="iq-card-header d-flex justify-content-between align-items-center mb-0">
                                        <div class="iq-header-title">
                                            <h4 class="card-title mb-0">Top Categories</h4>
                                        </div>
                                    </div>
                                    <div class="iq-card-body">
                                        <ul class="list-inline p-0 mb-0">
                                            <li>
                                                <div class="iq-details mb-2">
                                                    <span class="title">Adventure</span>
                                                    <div class="percentage float-right text-primary">95 <span>%</span></div>
                                                    <div class="iq-progress-bar-linear d-inline-block w-100">
                                                        <div class="iq-progress-bar">
                                                            <span class="bg-primary" data-percent="95"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="iq-details mb-2">
                                                    <span class="title">Horror</span>
                                                    <div class="percentage float-right text-warning">72 <span>%</span></div>
                                                    <div class="iq-progress-bar-linear d-inline-block w-100">
                                                        <div class="iq-progress-bar">
                                                            <span class="bg-warning" data-percent="72"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="iq-details mb-2">
                                                    <span class="title">Comic Book</span>
                                                    <div class="percentage float-right text-info">75 <span>%</span></div>
                                                    <div class="iq-progress-bar-linear d-inline-block w-100">
                                                        <div class="iq-progress-bar">
                                                            <span class="bg-info" data-percent="75"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="iq-details mb-2">
                                                    <span class="title">Biography</span>
                                                    <div class="percentage float-right text-danger">70 <span>%</span></div>
                                                    <div class="iq-progress-bar-linear d-inline-block w-100">
                                                        <div class="iq-progress-bar">
                                                            <span class="bg-danger" data-percent="70"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="iq-details">
                                                    <span class="title">Mystery</span>
                                                    <div class="percentage float-right text-success">80 <span>%</span></div>
                                                    <div class="iq-progress-bar-linear d-inline-block w-100">
                                                        <div class="iq-progress-bar">
                                                            <span class="bg-success" data-percent="80"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="iq-card col-md-12">
                    <div class="iq-card-header d-flex justify-content-between align-items-center mb-0">
                        <div class="iq-header-title">
                            <h4 class="card-title mb-0">Edit Your info</h4>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <form action="updateUser" method="post">
                            @csrf
                            <br>
                            <div class="form-group">
                                <label for="exampleInputPassword1 text-danger">firstname</label>
                                <input type="text" name="firstname" class="form-control mb-0" id="exampleInputPassword1" placeholder="First Name" value={{$user->firstname}}>
                                @error('firstname')
                                <p style="color:red"><b>*{{$message}}</b></p>
                            @enderror  
                            </div>     
                            <div class="form-group">
                                <label for="exampleInputPassword1">lastname</label>
                                <input type="text" name="lastname" class="form-control mb-0" id="exampleInputPassword1" placeholder="Last Name" value={{$user->lastname}}>
                                @error('lastname')
                                <p style="color:red"><b>*{{$message}}</b></p>
                            @enderror 
                            </div>                      
                            <div class="form-group">
                                <label for="exampleInputPassword1">Phone</label>
                                <input type="text" name="phone" class="form-control mb-0" id="exampleInputPassword1" placeholder="Phone" value={{$user->phone}}>
                                @error('phone')
                                <p style="color:red"><b>*{{$message}}</b></p>
                            @enderror  
                            </div>                       
                            <div class="form-group">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="text" name="email" class="form-control mb-0" id="exampleInputPassword1" placeholder="Email" value={{$user->email}}>
                                @error('email')
                                <p style="color:red"><b>*{{$message}}</b></p>
                            @enderror
                            </div>                   
                            <div class="form-group">
                                <label for="exampleInputPassword1">Username</label>
                                <input type="text" name="username" class="form-control mb-0" id="exampleInputPassword1" placeholder="Username" value={{$user->username}}>
                                @error('username')
                                <p style="color:red"><b>*{{$message}}</b></p>
                            @enderror
                            </div>  
                            <div class="form-group">
                                <input type="submit" value="Submit" class="btn btn-primary" name="" id="">
                            </div>
                            <br>
                        </form>
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
                <div class="col-lg-6 text-right">
                    Copyright 2022 <a href="#">BookFacto</a> All Rights Reserved.
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END -->
    <!-- color-customizer -->
    <div class="iq-colorbox color-fix">
        <div class="buy-button"> <a class="color-full" href="#"><i class="fa fa-spinner fa-spin"></i></a> </div>
        <div class="clearfix color-picker">
            <h3 class="iq-font-black">BookFacto</h3>
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
    <!-- Style Customizer -->
    <script src="/js/style-customizer.js"></script>
    <!-- Chart Custom JavaScript -->
    <script src="/js/chart-custom.js"></script>
    <!-- Custom JavaScript -->
    <script src="/js/custom.js"></script>
</body>

</html>