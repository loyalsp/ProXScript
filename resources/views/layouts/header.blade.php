<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
        <style type="text/css">
            .toplogo
            {
                width: 200px;
                height: 42px;
            }
        </style>
    </head>
    <body>

<div class="preloader"></div>


<section class="top-bar-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="welcome pull-left">
                    <p>iAdvice Build Your Business Not Just a Website...</p>
                </div>
                <div class="top-menu pull-right">
                    <ul>
                        <li><a href="#">Get Support</a></li>
                        <li><a href="#">Job Career</a></li>
                        <li><a href="#">Our Cases</a></li>
                    </ul>
                    <div class="consultation-button">
                        <a href="#"><span class="flaticon-multimedia"></span> Free Consultation</a>
                    </div>
                </div>     
            </div>
        </div>
    </div>
</section>
<!--End Top bar area --> 
 
    <!--Start header area-->
<header class="header-area stricky">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="logo pull-left">
                    <a href="/">
                        <img src="{{ asset('images/logo.png') }}" alt="Awesome Logo" class="toplogo">
                    </a>
                </div>
                <div class="header-right clearfix pull-right">
                    <nav class="main-menu pull-left">
                        <div class="navbar-header">     
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="current"><a href="/ProXScript">Home</a></li>
                                <li class="dropdown"><a href="aboutus">About Us</a>
                                </li>
                                <li class="dropdown"><a href="services">Services</a>
                                    <ul>
                                        <li><a href="services.html">Company Forced Matrix</a></li>
                                        <li><a href="service-single.html">Marketplace</a></li>
                                        <li><a href="keywordtrading">Keyword Trading</a></li>
                                        <li><a href="service-single.html">Games</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="project.html">Projects</a>
                                    <ul>
                                        <li><a href="project.html">Project Style One</a></li>
                                        <li><a href="project-v2.html">Projects Style Two</a></li>
                                        <li><a href="project-single.html">Projects Single</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="blog.html">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">Blog Default</a></li>
                                        <li><a href="blog-large.html">Blog Large</a></li>
                                        <li><a href="blog-single.html">Blog Single Post</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="shop.html">Shop</a>
                                    <ul>
                                        <li><a href="shop.html">Shop Products</a></li>
                                        <li><a href="shop-single.html">Products Single</a></li>
                                        <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="account.html">My Account</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                                @guest
                                 <li><a href="register">Register</a></li>
                                  <li><a href="login">Login</a></li>
                                @else
                                    <li class="dropdown"><a href="#">{{ Auth::user()->name }}</a>
                                        <ul>
                                            <li><a href="#">Paypal</a></li>
                                            <li><a href="#">Bitcoins </a></li>
                                            <li> <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form></li>
                                        </ul>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </nav>
                    <!--Start mainmenu right box-->
                    <div class="mainmenu-right-box clearfix pull-right">
                        <div class="outer-search-box">
                            <div class="seach-toggle"><i class="fa fa-search"></i></div>
                            <ul class="search-box">
                                <li>
                                    <form method="post" action="http://steelthemes.com/demo/html/I-advice/index.html">
                                        <div class="form-group">
                                            <input type="search" name="search" placeholder="Search Here" required>
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div> 
                    <!--End mainmenu right box-->
                </div>
                
            </div>
        </div>
    </div>
</header>  
<!--End header area--> 


@yield('content')
<!--Start footer area-->  
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <!--Start single footer widget-->
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="single-footer-widget mar-btm">
                    <div class="footer-logo">
                        <a href="index.html">
                            <img src="images/footer/footer-logo.png" alt="Awesome Footer Logo">
                        </a>
                    </div>
                    <div class="our-info">
                        <p>Over 24 years experience & knowledge international standards, technologicaly changes & industrial systems, we are dedicated to provides seds the best & solutions to our valued customers.</p>
                        <div class="button">
                            <a class="thm-btn" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single footer widget-->
            <!--Start single footer widget-->
            <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                <div class="single-footer-widget mar-btm">
                    <div class="title">
                        <h3>Usefull Links</h3>
                        <span class="border"></span>
                    </div>
                    <ul class="usefull-links">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Our Services</a></li>
                        <li><a href="#">Latest News</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="#">Our Projects</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <!--Start single footer widget-->
            <!--Start single footer widget-->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="single-footer-widget">
                    <div class="title">
                        <h3>Latest News</h3>
                        <span class="border"></span>
                    </div>
                    <ul class="latest-news">
                        <li>
                            <h4><a href="#">How to improve your business</a></h4>
                            <span>June 21, 2017</span>
                        </li>
                        <li>
                            <h4><a href="#">Future of financial planning</a></h4>
                            <span>April 14, 2017</span>
                        </li>
                        <li>
                            <h4><a href="#">Experts advice for save money</a></h4>
                            <span>March 06, 2017</span>
                        </li>
                    </ul>
                </div>
            </div>
            <!--End single footer widget-->
            <!--Start single footer widget-->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="single-footer-widget martop">
                    <div class="title">
                        <h3>Contact Details</h3>
                        <span class="border"></span>
                    </div>
                    <ul class="footer-contact-info">
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-gps"></span>
                            </div>
                            <div class="text-holder">
                                <h5>Breaking St, 2nd Cros,NY ,USA</h5>
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-technology"></span>
                            </div>
                            <div class="text-holder">
                                <h5>+321 4567 89 012 & 79</h5>
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-multimedia-1"></span>
                            </div>
                            <div class="text-holder">
                                <h5>Supporteam@iAdvice.com</h5>
                            </div>
                        </li>
                    </ul>
                    <ul class="footer-social-links">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <!--End single footer widget-->
        </div>
    </div>
</footer>   
<!--End footer area-->

<!--Start footer bottom area--> 
<section class="footer-bottom-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer-bottom">
                    <div class="copyright-text pull-left">
                        <p>Copyrights © 2017 All Rights Reserved. Powered by <a href="#">Cryptocogent</a></p> 
                    </div>
                    <div class="footer-menu pull-right">
                        <ul>
                            <li><a href="#">Legal</a></li>
                            <li><a href="#">Sitemap</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Condition</a></li>        
                        </ul>
                    </div>
                </div>    
            </div>
        </div>
    </div>    
</section>

<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<!-- main jQuery -->
<script src="js/jquery.js"></script>
<!-- Wow Script -->
<script src="js/wow.min.js"></script>
<!-- bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- bx slider -->
<script src="js/jquery.bxslider.min.js"></script>
<!-- count to -->
<script src="js/jquery.countTo.js"></script>
<!-- owl carousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- validate -->
<script src="js/validation.js"></script>
<!-- mixit up -->
<script src="js/jquery.mixitup.min.js"></script>
<!-- easing -->
<script src="js/jquery.easing.min.js"></script>
<!-- gmap helper -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>
<!--gmap script-->
<script src="js/gmaps.js"></script>
<script src="js/map-helper.js"></script>
<!-- video responsive script -->
<script src="js/jquery.fitvids.js"></script>
<!-- jQuery ui js -->
<script src="assets/jquery-ui-1.11.4/jquery-ui.js"></script>
<!-- Language Switche  -->
<script src="assets/language-switcher/jquery.polyglot.language.switcher.js"></script>
<!-- fancy box -->
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.appear.js"></script>
<!-- isotope script-->
<script src="js/isotope.js"></script>
<script src="js/jquery.prettyPhoto.js"></script> 
<!-- jQuery timepicker js -->
<script src="assets/timepicker/timePicker.js"></script>
<!-- Bootstrap select picker js -->
<script src="assets/bootstrap-sl-1.12.1/bootstrap-select.js"></script>                               


<!-- revolution slider js -->
<script src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>



<!-- thm custom script -->
<script src="js/custom.js"></script>



    </body>





</html>
