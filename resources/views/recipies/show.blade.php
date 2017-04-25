{{--
    Single Show page for Recipies
--}}

@extends('main')

@section('title', $rec->title)

@section('stylesheets')
    <style type="text/css">
        h1{
            color: #6b4107;
        }
        h2{
            color: #6b4107;
        }
        h3{
                    color: #6b4107;
        }
        h4{
                    color: #6b4107;
        }

    </style>
@stop

@section('content')
    <!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li><a href="{{ route('recipies') }}">Recipies</a></li>
                <li class="active">{{ $rec->title }} Recipie</li>
            </ol>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <div class="container">
        <div class="row" style="margin-bottom: 5em;">
            <div class="col-md-10 col-md-offset-1">
                <img  alt="No Image" class="img-responsive" width="500px" style="margin-top: 2em;" src="{{ URL::asset($rec->image) }}">
                <h1 style="margin-top: 2em;">{{ $rec->title }}</h1>
                @if($rec->description != NULL)
                    <h3>Description</h3>
                    {!! $rec->description !!}
                @endif
                <h3 style="margin-top: 2em;">Ingredients</h3>
                {!! $rec->ingredients !!}
                <h3 style="margin-top: 2em;">Instructions</h3>
                {!! $rec->steps !!}
            </div>
        </div>
    </div>
@endsection