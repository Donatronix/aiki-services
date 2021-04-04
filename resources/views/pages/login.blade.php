@extends('layouts.pages.login')
@section('content')
<div class="container register">
    <div class="row">
        <div class="col-md-7">
            <h1>Sign In to <br>
                Appply For Job.</h1>

            <div class="text">
                <p>If you don’t have an account, You can <a href="{{ route('register') }}"> Register here!</a></p>
                <img src="{{ asset('pages/images/undraw_Access_account_re_8spm 1.png') }}" alt="">
            </div>
        </div>
        <div class="col-md-5">
            @include('errors.list')
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
                    @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <!-- <div class="form-group col-md-6">
                        <label for="inputPassword4">State</label>
                        <input type="text" class="form-control" id="inputState4" placeholder="state">
                      </div> -->
                <button type="submit">Sign In </button>
            </form>
        </div>
    </div>
</div>
@endsection
