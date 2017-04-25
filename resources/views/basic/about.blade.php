{{--
    View For About Us
--}}

@extends('main')

@section('title', 'About Us')

@section('content')
    <!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">About</li>
            </ol>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <div class="about">
        <div class="container">
            <h3 class="w3_agile_header">About Us</h3>
            <div class="about-agileinfo w3layouts">
                <div class="col-md-8 about-wthree-grids grid-top">
                    <h4>About Us </h4>
                    <p class="top">
                        We MaitriNutra Foods established in the year of 2013, at Bangalore by young entrepreneurs with the dream of providing healthy and safe food to every corner of the glove. We understand our responsibilities towards consumer satisfaction as well as the farmers as ANNDATA and especially for the nature.
                        Our team is dedicatedly working on bringing the innovative products that enrich the lives of our esteemed consumers, keeping the interest of health and taste together. After a huge success, we are bringing a product that is recognized worldwide as the one of the world’s healthiest food presenting The Maha Millet and various other Nutritious Products.
                    </p>
                    <h4>Vision</h4>
                    <p>
                        Becoming the leader in the field of Nutritious Food and pioneer in health food industry.
                        To ensure stable and risk-free returns to the business, Farmers by integrated activities of production, processing and marketing across Food value chain and securing local natural resource base.
                    </p>

                </div>
                <div class="col-md-4 about-wthree-grids">
                    <div class="offic-time">
                        <div class="time-top">
                            <h4>Mission</h4>
                        </div>
                        <div class="time-bottom">
                            <p>
                                Bringing back the tradition of super food millet and other such foods in the most modern and appealing form yet keeping it nutritive and healthy. To provide Tasty and Healthy Food for everyone as they like it, at the best quality.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //about -->
@endsection