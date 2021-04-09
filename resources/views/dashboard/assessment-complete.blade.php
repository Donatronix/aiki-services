@extends('layouts.dashboard.assessment-complete')
@section('content')
<section id="wrapper" class="error-page">
    <div style="height: 100%; position: fixed; width: 100%;">
        <div class="error-body center-align">
            <h1 style="font-size: 100px;">CONGRATULATIONS</h1>
            <h3>Assessment Complete!!!!</h3>
            <p class="m-t-30 m-b-30">YOU HAVE COMPLETED YOUR ASSESSMENT</p>
            <p class="m-t-30 m-b-30">
                YOUR SCORE IS: <h2>{{ $score }}</h2>
            </p>
            <a href="{{ route('home') }}" class="btn green waves-effect waves-light m-b-40">Back to Profile Page</a>
        </div>
    </div>
</section>
@endsection
