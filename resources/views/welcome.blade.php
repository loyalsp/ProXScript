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


<!--Start Preloader -->
<div class="preloader"></div>
<!--End Preloader -->  

<!--Start Top bar area -->  
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
                                <li class="current"><a href="index.html">Home</a></li>
                                <li class="dropdown"><a href="about.html">About Us</a>
                                    <ul>
                                        <li><a href="about.html">About  i-Advice</a></li>
                                        <li><a href="team.html">Meet Our Team</a></li>
                                        <li><a href="consultation.html">Consultation</a></li>
                                        <li><a href="faq.html">FAQ’s</a></li>
                                        <li><a href="testimonials.html">Testimonials</a></li>
                                        <li><a href="404.html">404 Page</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="services.html">Services</a>
                                    <ul>
                                        <li><a href="services.html">View All Services</a></li>
                                        <li><a href="service-single.html">Service Single</a></li>
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


<!--Start rev slider wrapper-->     
<section class="rev_slider_wrapper">
    <div id="slider1" class="rev_slider"  data-version="5.0">
        <ul>
            <li data-transition="fade">
                <img src="{{ asset('images/slides/1.jpg') }}"  alt="" width="1920" height="700" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">
                
                <div class="tp-caption  tp-resizeme" 
                    data-x="left" data-hoffset="0" 
                    data-y="top" data-voffset="203" 
                    data-transform_idle="o:1;"         
                    data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                    data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                    data-splitin="none" 
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-start="700">
                    <div class="slide-content-box mar-lft">
                        <div class="big-title">We providing best<br>business coaching and<br>consultations.</div>
                    </div>
                </div>
                <div class="tp-caption  tp-resizeme" 
                    data-x="left" data-hoffset="0" 
                    data-y="top" data-voffset="384" 
                    data-transform_idle="o:1;"         
                    data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                    data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                    data-splitin="none" 
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-start="1500">
                    <div class="slide-content-box mar-lft">
                        <div class="text">Over 10 years of experience find comprehensive solutions.</div>
                    </div>
                </div>
                <div class="tp-caption tp-resizeme" 
                    data-x="left" data-hoffset="0" 
                    data-y="top" data-voffset="440" 
                    data-transform_idle="o:1;"                         
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    data-start="2200">
                    <div class="slide-content-box mar-lft">
                        <div class="button">
                            <a href="about.html" class="thm-btn pdone">Read More</a>&ensp; 
                            <a href="#" class="thm-btn btn-style-two pdtwo">Meet Experts</a> 
                        </div>
                    </div>
                </div>
            </li>

            <li data-transition="fade">
                <img src="{{ asset('images/sliderimage2.jpg') }}" alt="" width="1920" height="700" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
                
               <div class="tp-caption  tp-resizeme" 
                    data-x="right" data-hoffset="0" 
                    data-y="top" data-voffset="170" 
                    data-transform_idle="o:1;"         
                    data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                    data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                    data-splitin="none" 
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-start="1500">
                   <div class="slide-content-box mar-btm right-slide">
                        <div class="big-title">Get competitive & <br>affordable financial<br>advice.</div>
                        <div class="text">Over 10 years of experience find comprehensive solutions.</div>
                        <div class="button">
                            <a href="about.html" class="thm-btn pdone">Read More</a>&ensp; 
                            <a href="#" class="thm-btn btn-style-two pdtwo">Meet Experts</a> 
                        </div>
                    </div>
                </div>
            </li>

            <li data-transition="fade">
                <img src="{{ asset('images/slides/1.jpg') }}"  alt="" width="1920" height="700" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">
                
                <div class="tp-caption  tp-resizeme" 
                    data-x="left" data-hoffset="0" 
                    data-y="top" data-voffset="203" 
                    data-transform_idle="o:1;"         
                    data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                    data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                    data-splitin="none" 
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-start="700">
                    <div class="slide-content-box mar-lft">
                        <div class="big-title">Are you ready to take <br>your business to the<br>next level?</div>
                    </div>
                </div>
                <div class="tp-caption  tp-resizeme" 
                    data-x="left" data-hoffset="0" 
                    data-y="top" data-voffset="384" 
                    data-transform_idle="o:1;"         
                    data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                    data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                    data-splitin="none" 
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-start="1500">
                    <div class="slide-content-box mar-lft">
                        <div class="text">Over 10 years of experience find comprehensive solutions.</div>
                    </div>
                </div>
                <div class="tp-caption tp-resizeme" 
                    data-x="left" data-hoffset="0" 
                    data-y="top" data-voffset="440" 
                    data-transform_idle="o:1;"                         
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    data-start="2200">
                    <div class="slide-content-box mar-lft">
                        <div class="button">
                            <a href="about.html" class="thm-btn pdone">Read More</a>&ensp; 
                            <a href="#" class="thm-btn btn-style-two pdtwo">Meet Experts</a> 
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
<!--End rev slider wrapper--> 



<!--Start choose area-->  
<section class="choose-area sec-pding-two">
    <div class="container">
        <div class="sec-title text-center">
            <h1>W</h1>
            <div class="overlay-title">
                <h2>Why Choosing iAdvice</h2> 
            </div>   
        </div>
        <div class="row">
            <!--Start single choose item-->
            <div class="col-md-4">
                <div class="single-choose-item">
                    <div class="top clearfix">
                        <div class="icon-holder">
                            <span class="flaticon-pen"></span>
                        </div>
                        <div class="title-holder">
                            <h3>Professional</h3>
                        </div>
                    </div>
                    <div class="text-holder">
                        <p>Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete.</p>
                    </div>
                    <div class="read-more">
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <!--End single choose item-->
            <!--Start single choose item-->
            <div class="col-md-4">
                <div class="single-choose-item">
                    <div class="top clearfix">
                        <div class="icon-holder">
                            <span class="flaticon-pen"></span>
                        </div>
                        <div class="title-holder">
                            <h3>Professional</h3>
                        </div>
                    </div>
                    <div class="text-holder">
                        <p>Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete.</p>
                    </div>
                    <div class="read-more">
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <!--End single choose item-->
            <!--Start single choose item-->
            <div class="col-md-4">
                <div class="single-choose-item">
                    <div class="top clearfix">
                        <div class="icon-holder">
                            <span class="flaticon-pen"></span>
                        </div>
                        <div class="title-holder">
                            <h3>Professional</h3>
                        </div>
                    </div>
                    <div class="text-holder">
                        <p>Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete.</p>
                    </div>
                    <div class="read-more">
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <!--End single choose item-->
           
        </div>
    </div>
</section>  
<!--End choose area-->    

<!--Start services area-->
<section class="services-area sec-pding-two">
    <div class="container">
        <div class="sec-title">
            <h1>s</h1>
            <div class="overlay-title">
                <h2>Our Main Services</h2> 
            </div>   
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="service-carousel">
                    <!--Start single item-->
                    <div class="single-service-item text-center">
                        <div class="img-holder">
                            <img src="{{ asset('images/services/1.jpg') }}" alt="Awesome Image"> 
                            <div class="inner-content">
                                <h3><a class="title" href="#">Business Growth</a></h3>
                                <div class="text">
                                    <p>Priority interst for many organizations, when comes sustainbility.</p>
                                </div>
                            </div>
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <div class="overlay-content">
                                            <div class="icon-holder">
                                                <span class="flaticon-stats"></span>
                                            </div>
                                            <h3><a class="title" href="#">Business Growth</a></h3>
                                            <div class="text">
                                                <p>Great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself pleasure.</p>
                                            </div>
                                            <div class="read-more">
                                                <a href="#">Read More</a>
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </div>    
                    </div>    
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="single-service-item text-center">
                        <div class="img-holder">
                            <img src="images/services/2.jpg" alt="Awesome Image"> 
                            <div class="inner-content">
                                <h3><a class="title" href="#">Sustainability</a></h3>
                                <div class="text">
                                    <p>Priority interst for many organizations, when comes sustainbility.</p>
                                </div>
                            </div>
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <div class="overlay-content">
                                            <div class="icon-holder">
                                                <span class="flaticon-stats"></span>
                                            </div>
                                            <h3><a class="title" href="#">Sustainability</a></h3>
                                            <div class="text">
                                                <p>Great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself pleasure.</p>
                                            </div>
                                            <div class="read-more">
                                                <a href="#">Read More</a>
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </div>    
                    </div>    
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="single-service-item text-center">
                        <div class="img-holder">
                            <img src="images/services/3.jpg" alt="Awesome Image"> 
                            <div class="inner-content">
                                <h3><a class="title" href="#">Performance</a></h3>
                                <div class="text">
                                    <p>Priority interst for many organizations, when comes sustainbility.</p>
                                </div>
                            </div>
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <div class="overlay-content">
                                            <div class="icon-holder">
                                                <span class="flaticon-stats"></span>
                                            </div>
                                            <h3><a class="title" href="#">Performance</a></h3>
                                            <div class="text">
                                                <p>Great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself pleasure.</p>
                                            </div>
                                            <div class="read-more">
                                                <a href="#">Read More</a>
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </div>    
                    </div>    
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="single-service-item text-center">
                        <div class="img-holder">
                            <img src="images/services/4.jpg" alt="Awesome Image"> 
                            <div class="inner-content">
                                <h3><a class="title" href="#">Customer Insights</a></h3>
                                <div class="text">
                                    <p>Priority interst for many organizations, when comes sustainbility.</p>
                                </div>
                            </div>
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <div class="overlay-content">
                                            <div class="icon-holder">
                                                <span class="flaticon-stats"></span>
                                            </div>
                                            <h3><a class="title" href="#">Customer Insights</a></h3>
                                            <div class="text">
                                                <p>Great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself pleasure.</p>
                                            </div>
                                            <div class="read-more">
                                                <a href="#">Read More</a>
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </div>    
                    </div>    
                    <!--End single item-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--End services area-->

<!--Start fact counter area-->
<section class="fact-counter-area" style="background-image:url(images/resources/fact-counter-bg.jpg);">
    <div class="container">
        <div class="title text-center">
            <h3>There is some reason behind why people choose iAdvice past 20 years for their business solutions.</h3>
        </div>
        <div class="row">
            <!--Start single item-->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-item text-center">
                    <h1><span class="timer" data-from="1" data-to="376" data-speed="5000" data-refresh-interval="50">376</span></h1>
                    <h3>Years of Experience</h3>
                    <div class="text-holder">
                        <p> Take a trivial example, which seds ever undertakes laborious.</p>
                    </div>
                </div>    
            </div>
            <!--End single item-->
            <!--Start single item-->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-item text-center">
                    <h1><span class="timer" data-from="1" data-to="145" data-speed="5000" data-refresh-interval="50">145</span></h1>
                    <h3>Best Consultants</h3>
                    <div class="text-holder">
                        <p>Explain to you how this mistakens idea denouncing pleasure.</p>
                    </div>
                </div>    
            </div>
            <!--End single item-->
            <!--Start single item-->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-item text-center">
                    <h1><span class="timer" data-from="1" data-to="92" data-speed="5000" data-refresh-interval="50">92</span></h1>
                    <h3>Awards Winning</h3>
                    <div class="text-holder">
                        <p> Take a trivial example, which seds ever undertakes laborious.</p>
                    </div>
                </div>    
            </div>
            <!--End single item-->
            <!--Start single item-->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-item text-center">
                    <h1><span class="timer" data-from="1" data-to="289" data-speed="5000" data-refresh-interval="50">289</span></h1>
                    <h3>Happy Clients</h3>
                    <div class="text-holder">
                        <p>Actual teachings great explorer of the truth master builder.</p>
                    </div>
                </div>    
            </div>
            <!--End single item-->
     
        </div>
    </div>
</section>
<!--End fact counter area-->

<!--Start project area-->
<section class="latest-project-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sec-title pull-left">
                    <h1>p</h1>
                    <div class="overlay-title">
                        <h2>Latest Projects</h2> 
                    </div>   
                </div>
                <div class="button pull-right">
                    <a href="project.html">View All Projects</a>    
                </div>
            </div>
        </div>
        <div class="row inner-content">
            <div class="col-md-7 left-content">
                <div class="projects">
                    <!--Start single project item-->
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="images/projects/latest-project-1.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <ul>
                                            <li>
                                                <a class="zoom" href="images/projects/latest-project-1.jpg" data-rel="prettyPhoto" title="I Advice Gallery">
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="link" href="project-single.html"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>   
                    </div> 
                    <!--End single project item-->
                    <!--Start single project item-->
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="images/projects/latest-project-2.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <ul>
                                            <li>
                                                <a class="zoom" href="images/projects/latest-project-2.jpg" data-rel="prettyPhoto" title="I Advice Gallery">
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="link" href="project-single.html"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>   
                    </div> 
                    <!--End single project item-->
                    <!--Start single project item-->
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="images/projects/latest-project-3.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <ul>
                                            <li>
                                                <a class="zoom" href="images/projects/latest-project-3.jpg" data-rel="prettyPhoto" title="I Advice Gallery">
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="link" href="project-single.html"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>   
                    </div> 
                    <!--End single project item-->
                    <!--Start single project item-->
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="images/projects/latest-project-4.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <ul>
                                            <li>
                                                <a class="zoom" href="images/projects/latest-project-4.jpg" data-rel="prettyPhoto" title="I Advice Gallery">
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="link" href="project-single.html"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>   
                    </div> 
                    <!--End single project item-->
                </div>    
            </div>
            <div class="col-md-5 right-content">
                <div class="text-holder">
                    <div class="content">
                        <h3>Consumer Products</h3>
                        <span>Business Service</span>
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and we will give you a complete account of the system expound.</p>
                        <a href="project-single.html">View Details</a>
                    </div>
                </div>    
            </div>
            
        </div>
    </div>
</section>  
<!--End project area--> 




<!--         <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>

-->


<!--Scroll to top-->
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
