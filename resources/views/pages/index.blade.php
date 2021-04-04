@extends('layouts.pages.index')
@section('content')
<div class="container caption">
    <div class="row">
        <div class="col-md-6 caption-text">
            <div class="text">
                <h1>
                    AIKI help recruit <br />
                    skilled technicians.
                </h1>
                <p>
                    Matching safe qualified reliable technicians for Industrial and
                    Domestic electrical and plumbing technical services.
                </p>
                <a href=""><button>Get Started</button></a>
            </div>
        </div>
        <div class="col-md-6 image">
            <img src="{{ asset('pages/images/Engineering_1.png') }}" alt="" />
        </div>
    </div>
</div>

<div class="textofservice">
    <h3>OUR SERVICES INCLUDE;</h3>
</div>
<div class="services">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="plumbing">
                    <div class="image-service">
                        <img src="{{ asset('pages/images/Plumbing.png') }}" alt="" />
                    </div>
                    <h3>Plumbing</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua
                    </p>
                    <button>Read More</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="electrical">
                    <div class="image-service">
                        <img src="{{ asset('pages/images/Electrical Engineer.png') }}" alt="" />
                    </div>
                    <h3>Electrical Engineering</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua
                    </p>
                    <button>Read More</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="textofservice">
    <h3>WHY CHOOSE US?</h3>
</div>
<div class="container whyChooseUs">
    <div class="row">
        <div class="col-md-4">
            <div class="why-content">
                <img src="{{ asset('pages/images/top-notch.png') }}" alt="" />
                <h3>Top-notch Work</h3>
                <p>
                    We deliver the best work. You just need to trust us with money.
                </p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="why-content">
                <img src="{{ asset('pages/images/fast.png') }}" alt="" />
                <h3>Fast and Secured</h3>
                <p>
                    We deliver the best work. You just need to trust us with money.
                </p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="why-content">
                <img src="{{ asset('pages/images/neat.png') }}" alt="" />
                <h3>Neat and Reliable</h3>
                <p>
                    We deliver the best work. You just need to trust us with money.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="textofservice">
    <h3>WHAT PEOPLE THINK OF US</h3>
</div>
@endsection
