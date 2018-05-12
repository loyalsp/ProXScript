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
                                <li class="current"><a href="{{url('/')}}">Home</a></li>
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
                                            <li><a href="#">PayPal Balance: &nbsp;&nbsp;{{$user->paypal_balance}} $</a></li>
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