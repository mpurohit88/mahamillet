{{--
    Blade view for Login
    Called by LoginController
--}}

@extends('main')

@section('title', 'Login')

@section('content')
    <!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="{{ route('home') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Login Page</li>
            </ol>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <!-- login -->
    <div class="login">
        <div class="container">
            <h2>Login Form</h2>

            <!-- Validate -->
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
        @endif
        <!-- //Validate -->

            <div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
                <form action="{{ route('postLogin') }}" method="post">
                    {{ csrf_field() }}
                    <input type="email" name="email" placeholder="Email Address" required=" " >
                    <input type="password" name="password" placeholder="Password" required=" " >
                    <div class="forgot">
                        <a href="#">Forgot Password?</a>
                    </div>
                    <input type="submit" value="Login">
                </form>
            </div>
            <h4>For New People</h4>
            <p><a href="{{ route('getRegister') }}">Register Here</a> (Or) go back to <a href="{{ route('home') }}">Home<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
        </div>
    </div>
    <!-- //login -->
@endsection