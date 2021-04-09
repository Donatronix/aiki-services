@extends('layouts.pages.signup')
@section('content')
<div class="container register">
    <div class="row">
        <div class="col-md-7">
            <h1>Sign up to <br>
                Appply For Job.</h1>

            <div class="text">
                <p>If you already have an account, You can <a href="{{ route('login') }}"> Login here!</a></p>
                <img src="{{ asset('pages/images/undraw_Access_account_re_8spm 1.png') }}" alt="">
            </div>
        </div>
        <div class="col-md-5">
            @foreach ($errors->all() as $error)
            <div>
                <span class="red-text text-darken-2">{{ $error }}</span>
            </div>
            @endforeach
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class=" form-group">
                    <input type="text" class="form-control" name="name" id="inputFullName4" placeholder="Full Name" value="{{ old('name') }}" required>
                    @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email Address" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <input name="password" type="password" class="form-control" id="password" placeholder="Choose Password" required>
                    @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" placeholder="Confirm Password" required>
                </div>
                <!-- <div class="form-group col-md-6">
                        <label for="inputPassword4">State</label>
                        <input type="text" class="form-control" id="inputState4" placeholder="state">
                      </div> -->
                <button type="submit">Sign up</button>
            </form>
        </div>
    </div>
</div>

@endsection
