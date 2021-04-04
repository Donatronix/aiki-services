@extends('layouts.dashboard.authentication-register')
@section('content')
<!-- ============================================================== -->
<!-- Login box.scss -->
<!-- ============================================================== -->
<div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url({{ asset('pages/assets/images/big/auth-bg.jpg') }}) no-repeat center center;">
    <div class="auth-box">
        <div id="loginform">
            <div class="logo">
                <span class="db"><img src="{{ asset('pages/assets/images/logo-icon.png') }}" alt="logo" /></span>
                <h5 class="font-medium m-b-20">Register to Admin</h5>
            </div>
            <!-- Form -->
            <div class="row">
                <form class="col s12" action="{{ route('register') }}" method="POST">
                    @csrf
                    <!-- email -->
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="name" name="name" type="text" class="validate" required value="{{ old('name') }}">
                            <label for="name">Name</label>
                            @if ($errors->has('name'))
                            <span class="red-text text-darken-2">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>
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
                    <!-- technician -->
                    <div class="row">

                        <div class="input-field col s12">
                            <div class="select-wrapper">
                                <select tabindex="-1" id="technician" name="technician" required>
                                    <option value="" disabled="" selected="">Choose your field</option>
                                    @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ ucwords($role->name) }}</option>
                                    @endforeach


                                </select>
                                @if ($errors->has('technician'))
                                <span class="red-text text-darken-2">{{ $errors->first('technician') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- pwd -->
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" name="password" type="password" class="validate" required>
                            <label for="password">Password</label>
                            @if ($errors->has('password'))
                            <span class="red-text text-darken-2">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>
                    <!-- pwd -->
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password_confirmation" name="password_confirmation" type="password" class="validate" required>
                            <label for="password_confirmation">Confirm Password </label>
                        </div>
                    </div>
                    <!-- pwd -->
                    <div class="row m-t-5">
                        <div class="col s7">
                            <label>
                                <input type="checkbox" name="terms">
                                <span>Agree to all Terms</span>
                            </label>
                        </div>
                    </div>
                    <!-- pwd -->
                    <div class="row m-t-40">
                        <div class="col s12">
                            <button class="btn-large w100 red" type="submit">Sign Up</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="center-align m-t-20 db">
                Already have an account? <a href="{{ route('login') }}">Login</a>
            </div>
        </div>
    </div>
</div>
@endsection
