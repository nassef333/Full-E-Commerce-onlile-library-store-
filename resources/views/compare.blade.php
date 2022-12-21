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
    <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="css/typography.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">

    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');
@import url('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
*{ margin: 0; padding: 0;}
body{
  font-family: 'Roboto', sans-serif;
  font-style: normal;
  font-weight: 300;
  font-smoothing: antialiased;
-webkit-font-smoothing: antialiased;
-moz-osx-font-smoothing: grayscale;
  font-size: 15px;
  background: #eee;
}
.intro{
   background: #fff;
   padding: 60px 30px;
   color: #333;
   margin-bottom: 15px;
   line-height: 1.5;
   text-align: center;
}
.intro h1 {
   font-size: 18pt;
   padding-bottom: 15px;

}
.intro p{
   font-size: 14px;
}

.action{
   text-align: center;
   display: block;
   margin-top: 20px;
}

a.btn {
  text-decoration: none;
  color: #666;
   border: 2px solid #666;
   padding: 10px 15px;
   display: inline-block;
   margin-left: 5px;
}
a.btn:hover{
   background: #666;
   color: #fff;
    transition: .3s;
-webkit-transition: .3s;
}
.btn:before{
  font-family: FontAwesome;
  font-weight: normal;
  margin-right: 10px;
}
.github:before{content: "\f09b"}
.down:before{content: "\f019"}
.back:before{content:"\f112"}
.credit{
    background: #fff;
    padding: 12px;
    font-size: 9pt;
    text-align: center;
    color: #333;
    margin-top: 40px;

}
.credit span:before{
   font-family: FontAwesome;
   color: #e41b17;
   content: "\f004";


}
.credit a{
   color: #333;
   text-decoration: none;
}
.credit a:hover{
   color: #1DBF73; 
}
.credit a:hover:after{
    font-family: FontAwesome;
    content: "\f08e";
    font-size: 9pt;
    position: absolute;
    margin: 3px;
}
main{
  padding:: 20px;
  
}

article li{
   color: #444;
   font-size: 15px;
   margin-left: 33px;
   line-height: 1.5;
   padding: 5px;
}
article h1,
article h2,
article h3,
article h4,
article p{
   padding: 14px;
   color: #333;
}
article p{
   font-size: 15px;
    line-height: 1.5;
}
 
@media only screen and (min-width: 720px){
    main{
      max-width: 720px;
      margin-left: auto;
      margin-right: auto; 
      padding: 24px;
    }


}

.set-overlayer,
.set-glass,
.set-sticky {
	cursor: pointer;
	height: 45px;
	line-height: 45px;
	padding: 0 15px;
	color: #333;
	font-size: 16px;
}
.set-overlayer:after,
.set-glass:after,
.to-active:after,
.set-sticky:after {
	font-family: FontAwesome;
	font-size: 18pt;
	position: relative;
	float: right;
}
.set-overlayer:after,
.set-glass:after,
.set-sticky:after {
	content: "\f204";
	transition: .6s;
}

.to-active:after {
	content: "\f205";
	color: #008080;
	transition: .6s;
}
.set-overlayer,
.set-glass,
.set-sticky,
.source,
.theme-tray {
	margin: 10px;
	background: #f2f2f2;
	border-radius: 5px;
	border: 2px solid #f1f1f1;
	box-sizing: border-box;
}
/* Syntax Highlighter*/

pre.prettyprint {
	padding: 15px !important;
   margin: 10px;
	border: 0 !important;
  background: #f2f2f2;
  overflow: auto;
}

.source {
	white-space: pre;
	overflow: auto;
	max-height: 400px;
}
code{
    border:1px solid #ddd;
    padding: 2px;
    border-radius: 2px;
}

    </style>
</head>

<body>
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Sidebar  -->
        <div class="iq-sidebar">
            <div class="iq-sidebar-logo d-flex justify-content-between">
                <a href="{{url('/')}}" class="header-logo">
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
                                <li><a href="#"><i class="ri-function-line"></i>Category Page</a></li>
                                <li><a href="#"><i class="ri-book-line"></i>Book Page</a></li>
                                <li><a href="cart"><i class="ri-checkbox-multiple-blank-line"></i>Checkout</a></li>
                                <li><a href="{{url('wishlist')}}"><i class="ri-heart-line"></i>wishlist</a></li>
                                <li><a href="{{url('search-books')}}"><i class="ri-file-pdf-line"></i>Search</a></li>
                                <li class="active"><a href="{{url('compare-books')}}"><i class="ri-mastercard-line"></i>Compare books</a></li>
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
                            <a href="{{url('/')}}" class="header-logo">
                           <img src="images/logo.png" class="img-fluid rounded-normal" alt="">
                           <div class="logo-title">
                              <span class="text-primary text-uppercase">BookFacto</span>
                           </div>
                        </a>
                        </div>
                    </div>
                    <div class="navbar-breadcrumb">
                        <h5 class="mb-0">Compare Page</h5>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home / </a></li>
                                <li> compare</li>
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
                                <a href="profile" class="iq-waves-effect d-flex align-items-center">
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
                        
                        






                        <div class="iq-card">
                            <div class="iq-card-header d-flex justify-content-between">
                                <h4 class="cd-title">Compare Books:</h4>

                            </div>
                            <div class="iq-card-body">
                                
                                <div class="table-responsive">
                                    
                                    <section class="cd-table-container">
                                        <form action="compareRequest" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-6 text-center">
                                                <label for="">First Book</label>
                                                <select class="form-control" id="exampleFormControlSelect1" name="firstBook">
                                                    <option selected="" disabled="">Select first Book</option>
                                                            @foreach ($books as $book)
                                                            <option value="{{$book->id}}">{{$book->name}}</option>
                                                            @endforeach                                    
                                                 </select> 
                                                </div>         
                                                <div class="col-6 text-center">
                                                    <label for="">Second Book</label>
                                                    <select class="form-control" id="exampleFormControlSelect1" name="secondBook">
                                                    <option selected="" disabled="">Select second Book</option>
                                                            @foreach ($books as $book)
                                                            <option value="{{$book->id}}">{{$book->name}}</option>
                                                            @endforeach                                    
                                                 </select>
                                                </div>
                                            </div>
                                            <div class="text-center pt-5">
                                                <input type="submit" class="btn btn-primary">
                                            </div>
                                        </form>
                                        <br>

                                        @isset($book1)
                                        <table class="cd-table order-table table data-tables table table-striped table-bordered" style="width:100%">
                                            <tbody >
                                              <tr>
                                                <th>Name: </th>
                                                <th>{{$book1->name}}</th>
                                                <th>{{$book2->name}}</th>
                                              </tr>
                                                <tr>
                                                    <td><b>Image</b></td>
                                                    <td><img class="img-fluid rounded" src='{{asset("storage/$book1->img")}}' alt=""></td>
                                                    <td><img class="img-fluid rounded" src='{{asset("storage/$book2->img")}}' alt=""></td>
                                                </tr>                                                
                                                <tr>
                                                    <td><b>Category: </b></td>
                                                    <td>{{$category1}}</td>
                                                    <td>{{$category2}}</td>
                                                </tr>                                                  
                                                <tr>
                                                    <td><b>Author: </b></td>
                                                    <td>{{$book1->author}}</td>
                                                    <td>{{$book2->author}}</td>
                                                </tr>   
                                                <tr>
                                                    <td><b>Description:</b> </td>    
                                                    <td>{{$book1->description}}</td>    
                                                    <td>{{$book2->description}}</td>    
                                                </tr>                                             
                                                <tr>
                                                    <td><b>#Of pages:</b></td>
                                                    <td>{{$book1->noPages}}</td>
                                                    <td>{{$book2->noPages}}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Price:</b></td>
                                                    <td>{{$book1->price}}$</td>
                                                    <td>{{$book2->price}}$</td>
                                                </tr>                                                
                                                <tr>
                                                    <td><b>State:</b></td>
                                                    <td><b class="text-primary">In stock</b></td>
                                                    <td><b class="text-primary">In stock</b></td>
                                                </tr>
                                            </tbody>
                                          </table>
                                        @endisset
                                          </section>
                                    </div>
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
                <div class="col-lg-6 text-right">
                    Copyright 2020 <a href="#">Booksto</a> All Rights Reserved.
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
    <script>
        (function() {
	'use strict';

var TableFilter = (function() {
 var Arr = Array.prototype;
		var input;
  
		function onInputEvent(e) {
			input = e.target;
			var table1 = document.getElementsByClassName(input.getAttribute('data-table'));
			Arr.forEach.call(table1, function(table) {
				Arr.forEach.call(table.tBodies, function(tbody) {
					Arr.forEach.call(tbody.rows, filter);
				});
			});
		}

		function filter(row) {
			var text = row.textContent.toLowerCase();
       //console.log(text);
      var val = input.value.toLowerCase();
      //console.log(val);
			row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
		}

		return {
			init: function() {
				var inputs = document.getElementsByClassName('table-filter');
				Arr.forEach.call(inputs, function(input) {
					input.oninput = onInputEvent;
				});
			}
		};
 
	})();

  /*console.log(document.readyState);
	document.addEventListener('readystatechange', function() {
		if (document.readyState === 'complete') {
      console.log(document.readyState);
			TableFilter.init();
		}
	}); */
  
 TableFilter.init(); 
})();
    </script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script>
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