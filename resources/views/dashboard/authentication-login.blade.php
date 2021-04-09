@extends('layouts.dashboard.authentication-login')
@section('title')
Login
@endsection
@section('content')

<!-- ============================================================== -->
<!-- Login box.scss -->
<!-- ============================================================== -->
<div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url({{ asset('pages/assets/images/big/auth-bg.jpg') }}) no-repeat center center;">
    <div class="auth-box">
        <div id="loginform">
            @foreach ($errors->all() as $error)
            <div>
                <span class="red-text text-darken-2">{{ $error }}</span>
            </div>
            @endforeach
            <div class="logo">
                <span class="db"><img src="{{ asset('pages/assets/images/logo-icon.png') }}" alt="logo" /></span>
                <h5 class="font-medium m-b-20">Sign In</h5>
            </div>
            <!-- Form -->
            <div class="row">
                <form class="col s12" action="{{ route('login') }}" method="POST">
                    @csrf
                    <!-- email -->
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" name="email" type="email" class="validate" required value="{{ old('email') }}">
                            <label for="email">Email</label>
                            @if ($errors->has('email'))
                            <span class="red-text text-darken-2">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <!-- pwd -->
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" name="password" type="password" class="validate" required>
                            <label for="password">Password</label>
                            @if ($errors->has('password'))
                            <span class="red-text text-darken-2">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>
                    <!-- pwd -->
                    <div class="row m-t-5">
                        <div class="col s7">
                            <label>
                                <input type="checkbox" id="remember" name="remember" value="old('remember')">
                                <span>Remember Me?</span>
                            </label>
                        </div>
                        <div class="col s5 right-align"><a href="#" class="link" id="to-recover">Forgot Password?</a></div>
                    </div>
                    <!-- pwd -->
                    <div class="row m-t-40">
                        <div class="col s12">
                            <button class="btn-large w100 blue accent-4" type="submit">Login</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="center-align m-t-20 db">
                <a href="#" class="btn indigo darken-1 tooltipped m-r-5" data-position="top" data-tooltip="Login with Facebook"><i class="fab fa-facebook-f"></i></a> <a href="#" class="btn orange darken-4 tooltipped" data-position="top" data-tooltip="Login with Facebook"><i class="fab fa-google-plus-g"></i></a>
            </div>
            <div class="center-align m-t-20 db">
                Don't have an account? <a href="{{ route('register') }}">Sign Up!</a>
            </div>
        </div>
        <div id="recoverform">
            <div class="logo">
                <span class="db"><img src="dashboard/assets/images/logo-icon.png" alt="logo" /></span>
                <h5 class="font-medium m-b-20">Recover Password</h5>
                <span>Enter your Email and instructions will be sent to you!</span>
            </div>
            <div class="row">
                <!-- Form -->
                <form class="col s12" action="index.html">
                    <!-- email -->
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email1" type="email" class="validate" required>
                            <label for="email1">Email</label>
                        </div>
                    </div>
                    <!-- pwd -->
                    <div class="row m-t-20">
                        <div class="col s12">
                            <button class="btn-large w100 red" type="submit" name="action">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Login box.scss -->
<!-- ============================================================== -->
@endsection
