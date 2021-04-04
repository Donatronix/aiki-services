@extends('layouts.dashboard.authentication-recover-password')
@section('title')
Recover Password
@endsection
@section('content')
<section id="wrapper" class="error-page">
    <div class="error-box" style="background:url({{ asset('pages/assets/images/big/auth-bg.jpg') }}) no-repeat center center;">
        <div class="error-body center-align">
            <div class="card" style="width: 30%;margin: 0 auto;">
                <div class="card-content">
                    <img src="{{ asset('pages/assets/images/logo-icon.png') }}">
                    <h6>Recover Password</h6>
                    <form action="{{ route('password.email') }}" method="POST">
                        @csrf
                        <div class="input-field">
                            <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" required>
                            @if ($errors->has('name'))
                            <span class="red-text text-darken-2">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="input-field">
                            <input type="email" name="email" placeholder="Email" required value="{{ old('email') }}">
                            @if ($errors->has('email'))
                            <span class="red-text text-darken-2">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <button class="waves-effect waves-light btn indigo">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
