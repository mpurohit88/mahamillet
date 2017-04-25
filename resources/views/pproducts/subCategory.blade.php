{{--
    Public Products Blade for Category wise products
--}}

@extends('main')

@section('title', $cat->name)

@section('stylesheets')
    <style type="text/css">
        .agile_top_brands_grids {
            margin-top: 0px;
        }
        .top_brand_left {
            margin-bottom: 40px;
        }
    </style>
@stop

@section('content')
    <!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li><a href="{{ route('public.category', $cat->id) }}"> {{ $cat->name }}</a></li>
                <li class="active">{{ $scat->name }}</li>
            </ol>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <!--- groceries --->
    <div class="products">
        <div class="container">
            <div class="col-md-4 products-left">
                <div class="categories">
                    <h2>Sub Categories</h2>
                    <ul class="cate">
                        @foreach($scats as $scat)
                            <li><a href="{{ route('public.subCategory', $scat->id) }}"><i class="fa fa-arrow-right" aria-hidden="true"></i>{{ $scat->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-8 products-right">
                @if($prods != NULL)
                    @for($i=0, $flag =0; $flag==0; $i++)
                        <div class="agile_top_brands_grids">
                            @for($j=$i*3;$j< 3*($i+1);$j++)
                                @if($j<$prods->count())
                                    <div class="col-md-4 top_brand_left">
                                        <div class="hover14 column">
                                            <div class="agile_top_brand_left_grid">
                                                <div class="agile_top_brand_left_grid1">
                                                    <figure>
                                                        <div class="snipcart-item block">
                                                            <div class="snipcart-thumb">
                                                                <a href="single.html"><img title=" " alt=" " src="images/14.png"></a>
                                                                <p>{{ $prods[$j]->name }}</p>
                                                                <h4>₹ {{ $prods[$j]->price }}</h4>
                                                            </div>
                                                            <div class="snipcart-details top_brand_home_details">
                                                                <button name="addC" @if(!Sentinel::check()) disabled @endif class="button">Add to cart</button>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    @php
                                        $flag=1;
                                    @endphp
                                @endif
                            @endfor
                        </div>
                    @endfor
                @else
                    No Products
                @endif

                <div class="text-center">
                    {!! $prods->links() !!}
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!--- groceries --->
@endsection