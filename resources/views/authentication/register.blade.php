{{--
    Blade view for register
    Will be called by RegistrationController
--}}

@extends('main')

@section('title', 'Register')

@section('content')
    <!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="{{ route('home') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Registration Page</li>
            </ol>
        </div>
    </div>
    <!-- //breadcrumbs -->

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

    <!-- register -->
    <div class="register">
        <div class="container">
            <h2>Register Here</h2>
            <div class="login-form-grids">
                <h5>profile information</h5>
                <form action="{{ route('postRegister') }}" method="post">
                    {{ csrf_field() }}
                    <input type="text" name="first_name" placeholder="First Name..." required=" " >
                    <input type="text" name="last_name" placeholder="Last Name..." required=" " >

                <h6>Login information</h6>
                    <input type="email" name="email" placeholder="Email Address" required=" " >
                    <input type="password" name="password" placeholder="Password" required=" " >
                    <input type="password" name="password_confirmation" placeholder="Password Confirmation" required=" " >
                    <input type="submit" value="Register">
                </form>
            </div>
            <div class="register-home">
                <a href="{{ route('home') }}">Home</a>
            </div>
        </div>
    </div>
    <!-- //register -->
@endsection