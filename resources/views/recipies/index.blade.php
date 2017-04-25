{{--
    Index page for all recipies
--}}

@extends('main')

@section('title', 'Recipies')

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
                <li class="active">Recipies</li>
            </ol>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <!--- recipies --->
    <div class="products">
        <div class="container">


            <div class="col-md-12 products-right">
                @if($recs != NULL)
                    @for($i=0, $flag =0; $flag==0; $i++)
                        <div class="agile_top_brands_grids">
                            @for($j=$i*3;$j< 3*($i+1);$j++)
                                @if($j<$recs->count())
                                    <div class="col-md-4 top_brand_left">
                                        <div class="hover14 column">
                                            <div class="agile_top_brand_left_grid">
                                                <div class="agile_top_brand_left_grid1">
                                                    <figure>
                                                        <div class="snipcart-item block">
                                                            <div class="snipcart-thumb">
                                                                <a href="{{ route('recipie', $recs[$j]->id) }}"><img  alt="No Image" class="img-responsive" src="{{ $recs[$j]->image }}"></a>
                                                                <p>{{ $recs[$j]->title }}</p>

                                                            </div>
                                                            <div class="snipcart-details top_brand_home_details">
                                                                <button name="view" onclick="window.location='{{ route('recipie', $recs[$j]->id) }}'" class="button">View</button>
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

            </div>
            <div class="text-center">
                {!! $recs->links() !!}
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!--- recipes --->
@endsection