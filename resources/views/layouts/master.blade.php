@php
    $session_id = session()->getId()

@endphp

<!DOCTYPE html>
<html xmlns="" lang="zxx">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Peper Bites - Restaurant | Home</title>

<script src="{{asset('js/aXeeT3C8FEVE2uMUPMMUDxVnKrs.js')}}"></script><link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

<link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
{{-- <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"> --}}

<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/style1.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/plugin.css')}}" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('css/all.min.css')}}">
<link rel="stylesheet" href="{{asset('fonts/line-icons.css')}}" type="text/css">
<style>
    .hidden-fil {
  display: none;
}
</style>
@yield('style')
</head>
<body style="background:#fff url(/images/banner.png);">

<!-- <div id="preloader">
<div id="status"></div>
</div> -->


<header class="main_header_area headerstye-1">

    <div class="header_menu">
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-flex d-flex align-items-center justify-content-between w-100 pb-2 pt-2">

                    <div class="navbar-header">
                        <a class="navbar-brand" href="{{url('/')}}">
                        <img src="{{asset('images/logo-white.png')}}" alt="image">
                        <img src="{{asset('images/logo.png')}}" alt="image">
                        </a>
                    </div>

                    <div class="navbar-collapse1 d-lg-flex align-items-center" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav" id="responsive-menu">
                        <li class="dropdown submenu active">
                            <a href="{{url('/')}}" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                        </li>

                        <li>
                            <a href="{{url('/menu')}}">Menu</a>
                        </li>
                        <li class="submenu dropdown">
                            <a href="{{url('/about')}}" class="dropdown-toggle"  role="button" aria-haspopup="true" aria-expanded="false">About Us</a>
                        </li>

                        <li>
                            <a href="{{url('/contact')}}">Contact Us</a>
                        </li>
                        <!-- <li><a href="#search1" class="mt_search"><i class="fa fa-search"></i></a></li> -->
                        <li>
                            <a href="{{route('cart.index')}}" class="dropdown-toggle"  role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-shopping-cart"></i>
                                Cart
                                @if (!Cart::session($session_id)->isEmpty())
                                    <i class="badge badge-danger">{{Cart::session($session_id)->getContent()->count()}}</i>
                                @endif
                            </a>
                        </li>
                        {{-- <li class="submenu dropdown">
                            <a href="#" class="dropdown-toggle"  role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i>Abey</a>
                            <ul class="dropdown-menu">
                                <li><a href="order.html">My Orders</a></li>
                                <li><a href="index-1.html">Logout</a></li>
                            </ul>
                        </li> --}}
                    </ul>
                    <div class="reg-log d-lg-flex align-items-center ml-3">
                        <div class="header_sidemenu">
                            <div class="menu">
                                <div class="close-menu">
                                    <i class="fa fa-times white"></i>
                                </div>
                            <div class="m-contentmain">
                                <div class="login-content p-4 text-center">
                                    <div class="login-title section-border">
                                        <h3 class="white">Login</h3>
                                    </div>
                                    <div class="login-form section-border">
                                        <form>
                                            <div class="form-group">
                                                <input type="email" placeholder="Enter email address">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" placeholder="Enter password">
                                            </div>
                                        </form>
                                        <div class="form-btn">
                                            <a href="#" class="nir-btn">LOGIN</a>
                                        </div>
                                        <div class="form-group form-checkbox mt-3 white">
                                            <input type="checkbox"> Remember Me
                                            <a href="#" class="float-right white">Forgot password?</a>
                                        </div>
                                    </div>
                                    <div class="login-social section-border mb-3">
                                    <p class="mb-2 white">or continue with</p>
                                    <a href="#" class="btn-facebook"><i class="fab fa-facebook" aria-hidden="true"></i> Facebook</a>
                                    <a href="#" class="btn-twitter"><i class="fab fa-twitter" aria-hidden="true"></i> Twitter</a>
                                    </div>
                                    <div class="sign-up">
                                    <p class="m-0 white">Do not have an account? <a href="login.html" class="red">Sign Up</a></p>
                                    </div>
                                </div>
                            </div>
                            </div>
                        <!-- <div class="mhead">
                        <span class="menu-ham">
                        <a href="#" class="nir-btn align-items-center d-flex"> Book A Table</a>
                        </span>
                        </div> -->
                        </div>
                    </div>
                </div>
                <div id="slicknav-mobile"></div>
            </div>
        </div>
        </nav>
    </div>

</header>


{{-- <main class="py-4"> --}}
            @yield('content')
{{-- </main> --}}


<section class="insta-main p-0">
<div class="insta-inner">
<div class="follow-button">
<h5 class="m-0"><a href="#" title="">Follow on Instagram</a></h5>
</div>
<div class="row attract-slider">
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="insta-image">
<a href="#"><img src="{{asset('images/insta/ins-1.jpg')}}" alt="insta"></a>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="insta-image">
<a href="#"><img src="{{asset('images/insta/ins-2.jpg')}}" alt="insta"></a>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="insta-image">
<a href="#"><img src="{{asset('images/insta/ins-3.jpg')}}" alt="insta"></a>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="insta-image">
<a href="#"><img src="{{asset('images/insta/ins-4.jpg')}}" alt="insta"></a>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="insta-image">
<a href="#"><img src="{{asset('images/insta/ins-5.jpg')}}" alt="insta"></a>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="insta-image">
<a href="#"><img src="{{asset('images/insta/ins-6.jpg')}}" alt="insta"></a>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="insta-image">
<a href="#"><img src="{{asset('images/insta/ins-7.jpg')}}" alt="insta"></a>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="insta-image">
<a href="#"><img src="{{asset('images/insta/ins-8.jpg')}}" alt="insta"></a>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="insta-image">
<a href="#"><img src="{{asset('images/insta/ins-4.jpg')}}" alt="insta"></a>
</div>
</div>
</div>
</div>
</section>


<footer style="background-image:url(images/bg/team-bg.png);" class="pt-10">
<div class="footer-upper pb-4">
 <div class="container">
<div class="row">
<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-4">
<div class="footer-links">
<img src="{{asset('images/logo-white.png')}}" alt="">
<p class="mt-3">
    In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna
</p>
<ul>
<li><strong>PO Box:</strong>+3569900 0414</li>
<li><strong>Location:</strong> 206, TRIQ COSPICO - PAOLA</li>
<li><strong>Email:</strong> info@pepperbites.com</li>
<li><strong>Website:</strong> www.pepperbitesmalta.com</li>
</ul>
</div>
</div>
<div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 mb-4">
<div class="footer-links">
<h4 class="white">Company</h4>
<ul>
<li><a href="about-us.html">About Us</a></li>
<li><a href="#">Delivery Information</a></li>
<li><a href="#">Privacy Policy</a></li>
<li><a href="#">Terms &amp; Conditions</a></li>
<li><a href="#">Customer Service</a></li>
<li><a href="#">Return Policy</a></li>
</ul>
</div>
</div>
<div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 mb-4">
<div class="footer-links">
<h4 class="white">Opening Hours</h4>
<ul>
<li class="d-flex align-items-center justify-content-between"><div class="day">MONDAY</div> <div class="time">9.00 - 22.00</div> </li>
<li class="d-flex align-items-center justify-content-between"><div class="day">TUESDAY</div> <div class="time">9.00 - 22.00</div> </li>
<li class="d-flex align-items-center justify-content-between"><div class="day">SATURDAY</div> <div class="time">9.00 - 22.00</div> </li>
<li class="d-flex align-items-center justify-content-between"><div class="day">SUNDAY</div> <div class="time">9.00 - 22.00</div> </li>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-4">
<div class="footer-links">
<h4 class="white">Newsletter</h4>
<p>Want to be notified when we launch a new template or an udpate. Just sign up and we'll send you a notification by email.</p>
<div class="newsletter-form">
<form>
<input type="email" placeholder="Enter your email">
<input type="submit" class="nir-btn mt-2 w-100" value="Subscribe">
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="footer-copyright">
<div class="container">
<div class="copyright-inner d-md-flex align-items-center justify-content-between">
<div class="copyright-text">
<p class="m-0 white">2021 Pepper Bites. All rights reserved. | Powered by <a href="https://crioweb.in/"> Crioweb </a></p>
</div>
<div class="social-links">
<ul>
<li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
<div class="overlay"></div>
<div class="mid-overlay"></div>
</footer>


<div id="back-to-top">
<a href="#"></a>
</div>


<div id="search1">
<button type="button" class="close">×</button>
<form>
<input type="search" value="" placeholder="type keyword(s) here" />
<button type="submit" class="btn btn-primary">Search</button>
</form>
</div>

    <script src="{{asset('js/combining.js')}}"></script>
    <script data-cfasync="false" src="{{asset('js/email-decode.min.js')}}"></script><script src="{{asset('js/jquery-3.4.1.min.js')}}" type="fe30fae50da27027b896fb64-text/javascript"></script>
    {{-- <script src="{{asset('js/bootstrap.min.js')}}" type="fe30fae50da27027b896fb64-text/javascript"></script> --}}
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/plugin.js')}}" type="fe30fae50da27027b896fb64-text/javascript"></script>
    <script src="{{asset('js/custom-date.js')}}" type="fe30fae50da27027b896fb64-text/javascript"></script>
    <script src="{{asset('js/main.js')}}" type="fe30fae50da27027b896fb64-text/javascript"></script>
    <script src="{{asset('js/custom-swiper.js')}}" type="fe30fae50da27027b896fb64-text/javascript"></script>
    <script src="{{asset('js/custom-nav.js')}}" type="fe30fae50da27027b896fb64-text/javascript"></script>
    <script src="{{asset('js/custom-date.js')}}" type="fe30fae50da27027b896fb64-text/javascript"></script>
    <script src="{{asset('js/rocket-loader.min.js')}}" data-cf-settings="fe30fae50da27027b896fb64-|49" defer=""></script>
    <script src="{{asset('js/search.js')}}"></script>

    @yield('script')


</html>
