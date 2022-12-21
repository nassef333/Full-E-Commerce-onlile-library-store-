<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BookFacto</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="/storage/logo.png" />
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
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <!-- Sign in Start -->
    <section class="sign-in-page">
        <div class="container p-0">
            <div class="row no-gutters height-self-center">
                <div class="col-sm-12 align-self-center page-content rounded">
                    <div class="row m-0">
                        <div class="col-sm-12 sign-in-page-data">
                            <div class="sign-in-from bg-primary rounded">
                                <h3 class="mb-0 text-center text-white">Sign Up</h3>
                                <p class="text-center text-white">Enter your email address and password to access admin panel.</p>
                                <form class="mt-4 form-text" action="{{url('storeuser')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Your First Name</label>
                                        <input type="text" name="firstname" class="form-control mb-0" id="exampleInputEmail1" placeholder="Your First Name" value="{{old('firstname')}}">
                                        @error('firstname')
                                        <p style="color:red"><b>*{{$message}}</b></p>
                                    @enderror
                                    </div>                                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Your Last Name</label>
                                        <input type="text" name="lastname" class="form-control mb-0" id="exampleInputEmail1" placeholder="Your Last Name" value="{{old('lastname')}}">
                                        @error('lastname')
                                        <p style="color:red"><b>*{{$message}}</b></p>
                                    @enderror
                                    </div>                                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Your Username</label>
                                        <input type="text" name="username" class="form-control mb-0" id="exampleInputEmail1" placeholder="Your  Username" value="{{old('username')}}">
                                        @error('username')
                                        <p style="color:red"><b>*{{$message}}</b></p>
                                    @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail2">Email address</label>
                                        <input type="email" name="email" class="form-control mb-0" id="exampleInputEmail2" placeholder="Enter email" value="{{old('email')}}">
                                        @error('email')
                                        <p style="color:red"><b>*{{$message}}</b></p>
                                    @enderror
                                    </div>                                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail2">Phone</label>
                                        <input type="text" name="phone" class="form-control mb-0" id="exampleInputEmail2" placeholder="Enter Phone" value="{{old('phone')}}">
                                        @error('phone')
                                        <p style="color:red"><b>*{{$message}}</b></p>
                                    @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" name="password" class="form-control mb-0" id="exampleInputPassword1" placeholder="Password" value="{{old('password')}}">
                                        @error('password')
                                        <p style="color:red"><b>*{{$message}}</b></p>
                                    @enderror
                                    </div>                                   
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Personal Image</label>
                                        <input type="file" name="img" class="form-control mb-0" id="exampleInputPassword1" placeholder="Password" value="{{old('img')}}">
                                        @error('img')
                                        <p style="color:red"><b>*{{$message}}</b></p>
                                    @enderror
                                    </div>
                                    <div class="d-inline-block w-100">
                                        <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">I accept <a href="#" class="text-light">Terms and Conditions</a></label>
                                        </div>
                                    </div>
                                    <div class="sign-info text-center">
                                        <button type="submit" class="btn btn-white d-block w-100 mb-2">Sign Up</button>
                                        <span class="text-dark d-inline-block line-height-2">Already Have Account ? <a href="{{url('login')}}" class="text-white">Log In</a></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sign in END -->
    <!-- color-customizer -->
    <div class="iq-colorbox color-fix">
        <div class="buy-button"> <a class="color-full" href="#"><i class="fa fa-spinner fa-spin"></i></a> </div>
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
    <!-- lottie JavaScript -->
    <script src="js/lottie.js"></script>
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
    <!-- Style Customizer -->
    <script src="js/style-customizer.js"></script>
    <!-- Chart Custom JavaScript -->
    <script src="js/chart-custom.js"></script>
    <!-- Custom JavaScript -->
    <script src="js/custom.js"></script>
</body>

</html>