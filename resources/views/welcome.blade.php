@extends('layouts.master')
@section('content')
    <!--Start rev slider wrapper-->
    <section class="rev_slider_wrapper">
        <div id="slider1" class="rev_slider" data-version="5.0">
            <ul>
                <li data-transition="fade">
                    <img src="{{ asset('images/slides/1.jpg') }}" alt="" width="1920" height="700"
                         data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">

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
                    <img src="{{ asset('images/sliderimage2.jpg') }}" alt="" width="1920" height="700"
                         data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">

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
                    <img src="{{ asset('images/slides/1.jpg') }}" alt="" width="1920" height="700"
                         data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">

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
                            <p>Explain to you how all this mistaken idea of denouncing pleasure and praising pain was
                                born and I will give you a complete.</p>
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
                            <p>Explain to you how all this mistaken idea of denouncing pleasure and praising pain was
                                born and I will give you a complete.</p>
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
                            <p>Explain to you how all this mistaken idea of denouncing pleasure and praising pain was
                                born and I will give you a complete.</p>
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
                                                    <p>Great explorer of the truth, the master-builder of human
                                                        happiness. No one rejects, dislikes, or avoids pleasure itself
                                                        pleasure.</p>
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
                                                    <p>Great explorer of the truth, the master-builder of human
                                                        happiness. No one rejects, dislikes, or avoids pleasure itself
                                                        pleasure.</p>
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
                                                    <p>Great explorer of the truth, the master-builder of human
                                                        happiness. No one rejects, dislikes, or avoids pleasure itself
                                                        pleasure.</p>
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
                                                    <p>Great explorer of the truth, the master-builder of human
                                                        happiness. No one rejects, dislikes, or avoids pleasure itself
                                                        pleasure.</p>
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
                <h3>There is some reason behind why people choose iAdvice past 20 years for their business
                    solutions.</h3>
            </div>
            <div class="row">
                <!--Start single item-->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-item text-center">
                        <h1><span class="timer" data-from="1" data-to="376" data-speed="5000"
                                  data-refresh-interval="50">376</span></h1>
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
                        <h1><span class="timer" data-from="1" data-to="145" data-speed="5000"
                                  data-refresh-interval="50">145</span></h1>
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
                        <h1><span class="timer" data-from="1" data-to="92" data-speed="5000" data-refresh-interval="50">92</span>
                        </h1>
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
                        <h1><span class="timer" data-from="1" data-to="289" data-speed="5000"
                                  data-refresh-interval="50">289</span></h1>
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
                                                    <a class="zoom" href="images/projects/latest-project-1.jpg"
                                                       data-rel="prettyPhoto" title="I Advice Gallery">
                                                        <i class="fa fa-search" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="link" href="project-single.html"><i
                                                                class="fa fa-angle-right" aria-hidden="true"></i></a>
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
                                                    <a class="zoom" href="images/projects/latest-project-2.jpg"
                                                       data-rel="prettyPhoto" title="I Advice Gallery">
                                                        <i class="fa fa-search" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="link" href="project-single.html"><i
                                                                class="fa fa-angle-right" aria-hidden="true"></i></a>
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
                                                    <a class="zoom" href="images/projects/latest-project-3.jpg"
                                                       data-rel="prettyPhoto" title="I Advice Gallery">
                                                        <i class="fa fa-search" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="link" href="project-single.html"><i
                                                                class="fa fa-angle-right" aria-hidden="true"></i></a>
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
                                                    <a class="zoom" href="images/projects/latest-project-4.jpg"
                                                       data-rel="prettyPhoto" title="I Advice Gallery">
                                                        <i class="fa fa-search" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="link" href="project-single.html"><i
                                                                class="fa fa-angle-right" aria-hidden="true"></i></a>
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
                            <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain
                                was born and we will give you a complete account of the system expound.</p>
                            <a href="project-single.html">View Details</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <!--Start latest blog area-->
    <section class="latest-blog-area">
        <div class="container">
            <div class="sec-title text-center">
                <h1>n</h1>
                <div class="overlay-title">
                    <h2>Our Latest News</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-carousel">
                        <!--Start single latest blog-->
                        <div class="single-blog-post">
                            <div class="img-holder">
                                <img src="images/blog/lat-blog-1.jpg" alt="Awesome Image">
                                <div class="overlay-style-one">
                                    <div class="box">
                                        <div class="content">
                                            <a href="blog-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <ul class="meta-info">
                                    <li><a href="#">By Fletcher</a></li>
                                    <li><a href="#">June 21, 2017</a></li>
                                </ul>
                                <a href="blog-single.html">
                                    <h3 class="blog-title">Successfull business tips in 2017: way to grow</h3>
                                </a>
                                <div class="text">
                                    <p>Rationally encounter consequences ut that are extremely painful nor us again all
                                        is were seds anyone who loves desires.</p>
                                </div>
                                <div class="bottom clearfix">
                                    <div class="readmore pull-left">
                                        <a href="#">Read More</a>
                                    </div>
                                    <div class="comment pull-right">
                                        <p><span class="flaticon-multimedia"></span> Comments:15</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End single latest blog-->
                        <!--Start single latest blog-->
                        <div class="single-blog-post">
                            <div class="img-holder">
                                <img src="images/blog/lat-blog-2.jpg" alt="Awesome Image">
                                <div class="overlay-style-one">
                                    <div class="box">
                                        <div class="content">
                                            <a href="blog-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <ul class="meta-info">
                                    <li><a href="#">By Venanda</a></li>
                                    <li><a href="#">May 05, 2017</a></li>
                                </ul>
                                <a href="blog-single.html">
                                    <h3 class="blog-title">A digital prescription for the pharma industry</h3>
                                </a>
                                <div class="text">
                                    <p>Pursues or desires to obtain pain of itself our because it is pain, but because
                                        occasionally can procure great pleasure.</p>
                                </div>
                                <div class="bottom clearfix">
                                    <div class="readmore pull-left">
                                        <a href="#">Read More</a>
                                    </div>
                                    <div class="comment pull-right">
                                        <p><span class="flaticon-multimedia"></span> Comments:15</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End single latest blog-->
                        <!--Start single latest blog-->
                        <div class="single-blog-post">
                            <div class="img-holder">
                                <img src="images/blog/lat-blog-3.jpg" alt="Awesome Image">
                                <div class="overlay-style-one">
                                    <div class="box">
                                        <div class="content">
                                            <a href="blog-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <ul class="meta-info">
                                    <li><a href="#">By Georgley</a></li>
                                    <li><a href="#">May 14, 2017</a></li>
                                </ul>
                                <a href="blog-single.html">
                                    <h3 class="blog-title">Why buying a big house is a bad investment</h3>
                                </a>
                                <div class="text">
                                    <p>To take a trivial example, which of us ever sed undertakes laborious physical
                                        exercise except to obtain some advantage.</p>
                                </div>
                                <div class="bottom clearfix">
                                    <div class="readmore pull-left">
                                        <a href="#">Read More</a>
                                    </div>
                                    <div class="comment pull-right">
                                        <p><span class="flaticon-multimedia"></span> Comments:15</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End single latest blog-->

                        <!--Start single latest blog-->
                        <div class="single-blog-post">
                            <div class="img-holder">
                                <img src="images/blog/lat-blog-1.jpg" alt="Awesome Image">
                                <div class="overlay-style-one">
                                    <div class="box">
                                        <div class="content">
                                            <a href="blog-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <ul class="meta-info">
                                    <li><a href="#">By Fletcher</a></li>
                                    <li><a href="#">June 21, 2017</a></li>
                                </ul>
                                <a href="blog-single.html">
                                    <h3 class="blog-title">Successfull business tips in 2017: way to grow</h3>
                                </a>
                                <div class="text">
                                    <p>Rationally encounter consequences ut that are extremely painful nor us again all
                                        is were seds anyone who loves desires.</p>
                                </div>
                                <div class="bottom clearfix">
                                    <div class="readmore pull-left">
                                        <a href="#">Read More</a>
                                    </div>
                                    <div class="comment pull-right">
                                        <p><span class="flaticon-multimedia"></span> Comments:15</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End single latest blog-->
                        <!--Start single latest blog-->
                        <div class="single-blog-post">
                            <div class="img-holder">
                                <img src="images/blog/lat-blog-2.jpg" alt="Awesome Image">
                                <div class="overlay-style-one">
                                    <div class="box">
                                        <div class="content">
                                            <a href="blog-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <ul class="meta-info">
                                    <li><a href="#">By Venanda</a></li>
                                    <li><a href="#">May 05, 2017</a></li>
                                </ul>
                                <a href="blog-single.html">
                                    <h3 class="blog-title">A digital prescription for the pharma industry</h3>
                                </a>
                                <div class="text">
                                    <p>Pursues or desires to obtain pain of itself our because it is pain, but because
                                        occasionally can procure great pleasure.</p>
                                </div>
                                <div class="bottom clearfix">
                                    <div class="readmore pull-left">
                                        <a href="#">Read More</a>
                                    </div>
                                    <div class="comment pull-right">
                                        <p><span class="flaticon-multimedia"></span> Comments:15</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End single latest blog-->
                        <!--Start single latest blog-->
                        <div class="single-blog-post">
                            <div class="img-holder">
                                <img src="images/blog/lat-blog-3.jpg" alt="Awesome Image">
                                <div class="overlay-style-one">
                                    <div class="box">
                                        <div class="content">
                                            <a href="blog-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <ul class="meta-info">
                                    <li><a href="#">By Georgley</a></li>
                                    <li><a href="#">May 14, 2017</a></li>
                                </ul>
                                <a href="blog-single.html">
                                    <h3 class="blog-title">Why buying a big house is a bad investment</h3>
                                </a>
                                <div class="text">
                                    <p>To take a trivial example, which of us ever sed undertakes laborious physical
                                        exercise except to obtain some advantage.</p>
                                </div>
                                <div class="bottom clearfix">
                                    <div class="readmore pull-left">
                                        <a href="#">Read More</a>
                                    </div>
                                    <div class="comment pull-right">
                                        <p><span class="flaticon-multimedia"></span> Comments:15</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End single latest blog-->

                        <!--Start single latest blog-->
                        <div class="single-blog-post">
                            <div class="img-holder">
                                <img src="images/blog/lat-blog-1.jpg" alt="Awesome Image">
                                <div class="overlay-style-one">
                                    <div class="box">
                                        <div class="content">
                                            <a href="blog-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <ul class="meta-info">
                                    <li><a href="#">By Fletcher</a></li>
                                    <li><a href="#">June 21, 2017</a></li>
                                </ul>
                                <a href="blog-single.html">
                                    <h3 class="blog-title">Successfull business tips in 2017: way to grow</h3>
                                </a>
                                <div class="text">
                                    <p>Rationally encounter consequences ut that are extremely painful nor us again all
                                        is were seds anyone who loves desires.</p>
                                </div>
                                <div class="bottom clearfix">
                                    <div class="readmore pull-left">
                                        <a href="#">Read More</a>
                                    </div>
                                    <div class="comment pull-right">
                                        <p><span class="flaticon-multimedia"></span> Comments:15</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End single latest blog-->
                        <!--Start single latest blog-->
                        <div class="single-blog-post">
                            <div class="img-holder">
                                <img src="images/blog/lat-blog-2.jpg" alt="Awesome Image">
                                <div class="overlay-style-one">
                                    <div class="box">
                                        <div class="content">
                                            <a href="blog-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <ul class="meta-info">
                                    <li><a href="#">By Venanda</a></li>
                                    <li><a href="#">May 05, 2017</a></li>
                                </ul>
                                <a href="blog-single.html">
                                    <h3 class="blog-title">A digital prescription for the pharma industry</h3>
                                </a>
                                <div class="text">
                                    <p>Pursues or desires to obtain pain of itself our because it is pain, but because
                                        occasionally can procure great pleasure.</p>
                                </div>
                                <div class="bottom clearfix">
                                    <div class="readmore pull-left">
                                        <a href="#">Read More</a>
                                    </div>
                                    <div class="comment pull-right">
                                        <p><span class="flaticon-multimedia"></span> Comments:15</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End single latest blog-->
                        <!--Start single latest blog-->
                        <div class="single-blog-post">
                            <div class="img-holder">
                                <img src="images/blog/lat-blog-3.jpg" alt="Awesome Image">
                                <div class="overlay-style-one">
                                    <div class="box">
                                        <div class="content">
                                            <a href="blog-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <ul class="meta-info">
                                    <li><a href="#">By Georgley</a></li>
                                    <li><a href="#">May 14, 2017</a></li>
                                </ul>
                                <a href="blog-single.html">
                                    <h3 class="blog-title">Why buying a big house is a bad investment</h3>
                                </a>
                                <div class="text">
                                    <p>To take a trivial example, which of us ever sed undertakes laborious physical
                                        exercise except to obtain some advantage.</p>
                                </div>
                                <div class="bottom clearfix">
                                    <div class="readmore pull-left">
                                        <a href="#">Read More</a>
                                    </div>
                                    <div class="comment pull-right">
                                        <p><span class="flaticon-multimedia"></span> Comments:15</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End single latest blog-->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End latest blog area-->

    <!--Start consultation area-->
    <section class="consultation-area" style="background-image:url(images/parallax-background/consultaion-bg.jpg);">
        <div class="container">
            <div class="row">

                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="consultation">
                        <div class="sec-title">
                            <h1>C</h1>
                            <div class="overlay-title">
                                <h2>Get a Free Consultation</h2>
                            </div>
                        </div>
                        <form class="consultation-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="form_name" value="" placeholder="Your Name" required="">
                                    <input type="email" name="form_email" value="" placeholder="Your Mail" required="">
                                    <select class="selectmenu">
                                        <option selected="selected">Select Service</option>
                                        <option>Business Growth</option>
                                        <option>Sustainability</option>
                                        <option>Performance</option>
                                        <option>Advanced Analytics</option>
                                        <option>Organization</option>
                                        <option>Customer Insights</option>
                                        <option>Marketing Plan</option>
                                        <option>Online Consulting</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <textarea name="form_message" placeholder="Special Request (eg: date, time, expert)"
                                              required=""></textarea>
                                    <button class="thm-btn" type="submit">Submit Here</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="experience-box text-center">
                        <h3><span>Since 1991,</span> we provide best service for our clients.</h3>
                        <div class="year">
                            <h1>26</h1>
                            <h2>Years of experince</h2>
                        </div>
                        <p>Must explain to you how all this mistaken idea denouncing pleasure and praising.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End consultation area-->

    <!--Feedback Section-->
    <section class="feedback-section">
        <div class="container">
            <div class="sec-title text-center">
                <h1>F</h1>
                <div class="overlay-title">
                    <h2>Customer Feedback</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel-outer">
                        <div class="single-item-carousel owl-carousel owl-theme">

                            <!--Testimonial Block Three-->
                            <div class="testimonial-block-three">
                                <div class="inner-box">
                                    <div class="upper-box">
                                        <div class="content">
                                            <div class="text">How all this mistaken idea of denouncing pleasure and
                                                praising pain was born and I will give you a complete account of the
                                                system actual teachings of the great.
                                            </div>
                                        </div>
                                        <div class="quote-icon"><span class="icon flaticon-double-quotes"></span></div>
                                    </div>
                                    <div class="lower-box">
                                        <div class="image-box">
                                            <img src="images/resources/quote-1.jpg" alt=""/>
                                        </div>
                                        <h3>Nathan Duckvat</h3>
                                        <div class="location">California</div>
                                    </div>
                                </div>
                            </div>

                            <!--Testimonial Block Three-->
                            <div class="testimonial-block-three">
                                <div class="inner-box">
                                    <div class="upper-box">
                                        <div class="content">
                                            <div class="text">They have got my project on time with the competition with
                                                ahighly skilled, well-organized andexperienced team of professional
                                                Engineers well document.
                                            </div>
                                        </div>
                                        <div class="quote-icon"><span class="icon flaticon-double-quotes"></span></div>
                                    </div>
                                    <div class="lower-box">
                                        <div class="image-box">
                                            <img src="images/resources/quote-1.jpg" alt=""/>
                                        </div>
                                        <h3>Astley Jenifer</h3>
                                        <div class="location">Newyork</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Feedback Section-->

    <!--Start Brand area-->
    <section class="brand-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand">
                        <!--Start single item-->
                        <div class="single-item">
                            <a href="#"><img src="images/brand/1.png" alt="Awesome Brand Image"></a>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="single-item">
                            <a href="#"><img src="images/brand/2.png" alt="Awesome Brand Image"></a>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="single-item">
                            <a href="#"><img src="images/brand/3.png" alt="Awesome Brand Image"></a>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="single-item">
                            <a href="#"><img src="images/brand/4.png" alt="Awesome Brand Image"></a>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="single-item">
                            <a href="#"><img src="images/brand/5.png" alt="Awesome Brand Image"></a>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="single-item">
                            <a href="#"><img src="images/brand/6.png" alt="Awesome Brand Image"></a>
                        </div>
                        <!--End single item-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Brand area-->

    <!--End footer bottom area-->

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


-->


    <!--Scroll to top-->
@endsection