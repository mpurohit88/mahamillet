{{--
    Main Blade Template
    Includes Header, Footer and Navigation
--}}

@extends('partials._header')

<body>
<!-- header -->
<!--Logout Post form-->
<form action="/logout" method="post" id="logout-form">
    {{ csrf_field() }}
</form>
<div class="agileits_header">
    <div class="container">
        <div class="w3l_offers">
            <p>SALE UP TO 70% OFF. USE CODE "SALE70%" . <a href="products.html">SHOP NOW</a></p>
        </div>
        @php \Debugbar::info(Sentinel::check()) @endphp
        @if(Sentinel::check())
            <div class="agile-login">
                <ul>
                    <li><a href="#" onclick="document.getElementById('logout-form').submit()">Logout</a></li>
                    <li><a href="#">Help</a></li>
                </ul>
            </div>
            <div class="product_list_header">
                <form action="#" method="post" class="last">
                    <input type="hidden" name="cmd" value="_cart">
                    <input type="hidden" name="display" value="1">
                    <button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
                </form>
            </div>
            <div class="clearfix"> </div>
        @else
            <div class="agile-login">
                <ul>
                    <li><a href="{{ route('getRegister') }}"> Create Account </a></li>
                    <li><a href="{{ route('getLogin') }}">Login</a></li>
                    <li><a href="#">Help</a></li>
                </ul>
            </div>
            <div class="product_list_header">
                <form action="#" method="post" class="last">
                    <input type="hidden" name="cmd" value="_cart">
                    <input type="hidden" name="display" value="1">
                </form>
            </div>
            <div class="clearfix"> </div>
        @endif
    </div>
</div>

<div class="logo_products">
    <div class="container">
        <div class="w3ls_logo_products_left1">
            <ul class="phone_email">
                <li><i class="fa fa-phone" aria-hidden="true"></i>Order online or call us : (+0123) 234 567</li>

            </ul>
        </div>
        <div class="w3ls_logo_products_left">
            <center><h1><a href="{{ route('home') }}"><img src="{{ URL::asset('icon.png') }}" class="img-responsive" style="height: auto; width: 150px; margin-top: -20px;" ></a></h1></center>
        </div>
        <div class="w3l_search">
            <form action="#" method="post">
                <input type="search" name="Search" placeholder="Search for a Product..." required="">
                <button type="submit" class="btn btn-default search" aria-label="Left Align">
                    <i class="fa fa-search" aria-hidden="true"> </i>
                </button>
                <div class="clearfix"></div>
            </form>
        </div>

        <div class="clearfix"> </div>
    </div>
</div>
<!-- //header -->
<!-- navigation -->
<div class="navigation-agileits">
    <div class="container">
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header nav_2">
                <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.html" class="act">Home</a></li>
                    <!-- Mega Menu -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Products<b class="caret"></b></a>
                        <ul class="dropdown-menu multi-column columns-3">
                            <div class="row">
                                <div class="multi-gd-img">
                                    <ul class="multi-column-dropdown">
                                        <h6>All Products</h6>
                                        @foreach(App\Category::all() as $cat)
                                            <li><a href="{{ route('public.category', $cat->id) }}">{{ $cat->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>

                            </div>
                        </ul>
                    </li>
                    {{--@foreach(App\Category::all() as $cat)
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ $cat->name }}<b class="caret"></b></a>
                            <ul class="dropdown-menu multi-column columns-3">
                                <div class="row">
                                    <div class="multi-gd-img">
                                        <ul class="multi-column-dropdown">
                                            <h6>All Groceries</h6>
                                            <li><a href="groceries.html">Dals & Pulses</a></li>
                                            <li><a href="groceries.html">Almonds</a></li>
                                            <li><a href="groceries.html">Cashews</a></li>
                                            <li><a href="groceries.html">Dry Fruit</a></li>
                                            <li><a href="groceries.html"> Mukhwas </a></li>
                                            <li><a href="groceries.html">Rice & Rice Products</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </ul>
                        </li>
                    @endforeach--}}
                    <li><a href="{{ route('recipies') }}" >Recepies</a></li>
                    <li><a href="#" >Testimonials</a></li>
                    <li><a href="#" >Join Us</a></li>
                    <li><a href="offers.html">FAQ</a></li>
                    <li><a href="gourmet.html">About Us</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- //navigation -->

@yield('content')

@extends('partials._footer')